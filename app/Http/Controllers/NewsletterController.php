<?php

namespace App\Http\Controllers;

use Log;
use Mail;
use Auth;
use Redirect;
use Session;
use Validator;

use Illuminate\Support\Facades\Artisan;

use Carbon\Carbon;
use App\Subscriber;
use App\SubscriberCategory;
use App\NewsletterLogs;

use App\Newsletter;
use Illuminate\Http\Request;


class NewsletterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $newsletter = Newsletter::all();
        $group = $this->get_data();

        return view('admin.newsletter.index')->with('news', $newsletter)->with('data',$group);

    }

    public function create(){
        return view('admin.newsletter.create');
    }

    public function store(Request $request)
    {
        request()->validate($this->rules());

        $newsletter = new Newsletter;
        $newsletter->title = $request->title;
        $newsletter->slug = $this->make_slug($request->title);


        if($request->content){
            $content = $this->change_button($request->content,$newsletter->slug);
        }

        $newsletter->content = $content;
        $newsletter->description = $request->description;
        $newsletter->date = $request->date;
        if ($request->publish == 'active') {
            $publish = True;
        } else {
            $publish = False;
        }
        $newsletter->publish = $publish;

        if ($newsletter->save()) {
            return redirect('admin/newsletter');
        } else {
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        //}
    }

    public function show($id){
        if(is_numeric($id)){
            $newsletter = Newsletter::find($id);
        }else{
            $newsletter = Newsletter::where('slug',$id)->first();
        }



        return view('admin.newsletter.email')->with('newsletter',$newsletter);
    }

    public function edit(Newsletter $newsletter){
        #$newsletter = Newsletter::find($id);

        #return view('admin.newsletter.edit')->with('newsletter',$newsletter);
        return view('admin.newsletter.edit')->with(compact('newsletter'));
    }

    public function update(Request $request,$id){
        request()->validate($this->rules());

        $newsletter = Newsletter::find($id);
        $newsletter->title = $request->title;
        $newsletter->slug = $this->make_slug($request->title);


        if($request->content){
            $content = $this->change_button($request->content,$newsletter->slug);
        }


        $newsletter->content = $content;
        $newsletter->description = $request->description;
        $newsletter->date = $request->date;
        //$newsletter->updated_at = Carbon::now()->format('d/m/Y');
        if($request->publish == 'active'){
            $publish = True;
        }else{
            $publish = False;
        }
        $newsletter->publish = $publish;

        if($newsletter->update()){
            Session::flash('message', 'Successfully updated newslatter');
            return redirect('admin/newsletter');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                    ->withErrors($validator)
                    ->withInput();
        }

    }

    public function setting(Request $request){
        if($request->id){
            $id = $request->id;
        }

        if($request->group){
            $group = $request->group;
        }


        $log = new NewsletterLogs;
        $log->newsletter_id = $id;
        $log->category_id = $group;
        $log->keterangan = 'pending';

        if(Auth::user()){
            $log->user_id=Auth::user()->id;
        }

        $log->ended_at= Carbon::now();
        if($log->save()){
            return back()->with(['message'=> 'Success']);
        }else{
            return back()->with(['message'=> 'Newsletter is not success']);
        }
    }

    public function destroy($id){
        $newslatter = Newsletter::find($id);

        if($newslatter != null){
            $newslatter->delete();
            Session::flash('message', 'Successfully deleted the Newslatter!');
            return Redirect::to('admin/newsletter/');
        }

        return back()->with(['message'=> 'Object is null, wrong id']);
    }



    protected function change_button($content, $slug = null){
        $replace = "<a href=\"/admin/newsletter/preview/$slug\"><button class='btn btn-primary'>Learn More</button></a>";
        $ctn = str_replace("[button]",$replace, $content );

        return $ctn;
    }

    protected function make_slug($title){
        $title = str_slug($title,'-');
        return $title;
    }

    protected function get_data(){
        $data=[];


        $subscribe = SubscriberCategory::select('id','category')->get()->toArray();

        foreach($subscribe as $item){
            $data[$item['id']]=$item['category'];
        }

        return $data;
    }

    public function send_email(){
        Log::info("Request cycle without Queues finished");


        $log = NewsletterLogs::where('keterangan','pending')->get();

        Log::info("Begin NewsBlast");
        foreach ($log as $item){
            if($item->category_id == 1){
                $subscriber = Subscriber::where('status',1)->get();
            }else{
                $subscriber = Subscriber::where('id', $item->category_id)->where('status',1)->get();
            }

            $newsletter = Newsletter::where('id', $item->newsletter_id)->first();

            foreach($subscriber as $sub){
                Mail::send('emails.email', ['newsletter'=>$newsletter], function ($message) use ($sub) {
                    $message->from('seasscape@gmail.com', 'Sea Scrapes');

                    $message->to($sub->email);

                });
                Log::info('Sending '.$newsletter->title.'to :'.$sub->email);
            }

        }
        Log::info("End of NewsBlast");

        return 'wew success';
    }

    public function rules(){
        return [
            'title' => 'required',
            'content' => 'required',
            'description' => 'required',
            'date' => 'required',

        ];
    }

    public function rule_newsletter(){
        return [
            'id'=>'required',
            'group'=>'required'
        ];
    }
}
