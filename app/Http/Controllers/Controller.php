<?php

namespace App\Http\Controllers;

use Mail;
use Log;
use Carbon\Carbon;

use App\Subscriber;
use App\NewsletterLogs;
use App\Newsletter;

use App\Mail\TestEmail;
use App\Mail\NewsletterMail;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('admin.home');
    }

    public function email_test(){

        $data = ['message' => 'This is a test!'];

        Mail::to('muhyasin89@gmail.com')->send(new TestEmail($data));
    }

    public function rebase(){
        $log = NewsletterLogs::where('keterangan','success')->get();
        foreach ($log as $item){
            $item->keterangan = 'pending';
            $item->ended_at = null;
            $item->update();
        }
    }

    public function email(){
        $log = NewsletterLogs::where('keterangan','pending')->get();

        Log::info("Begin NewsBlast");
        $address='scrapesurvey@gmail.com';
        $name= 'scrapes survey';

        foreach ($log as $item){
            if($item->category_id == 1){
                $subscriber = Subscriber::where('status',1)->get();
            }else{
                $subscriber = Subscriber::where('id', $item->category_id)->where('status',1)->get();
            }

            $newsletter = Newsletter::where('id', $item->newsletter_id)->first();

            foreach ($subscriber as $mail){
                Mail::to($mail->email)->send(new NewsletterMail($newsletter,$address,$newsletter->title, $name));
                Log::info('Sending '.$newsletter->title.'to :'.$mail->email);
            }

            $item->keterangan = 'success';
            $item->ended_at = Carbon::now();
            $item->update();
        }
        Log::info("End of NewsBlast");

    }

}
