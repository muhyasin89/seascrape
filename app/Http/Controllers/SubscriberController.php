<?php

namespace App\Http\Controllers;

use URL;
use Auth;
use App\Subscriber;
use App\SubscriberCategory;

use Illuminate\Http\Request;

class SubscriberController extends Controller
{

    public function index(){
        $this->auth();
        $subscriber = Subscriber::with('category','user')->get();


        return view('admin.subscriber.index')->with(compact('subscriber'));
    }

    public function store(Request $request){
        $this->auth();
        request()->validate($this->rules());

        $subscriber = new Subscriber;
        $subscriber->email = $request->email;
        $subscriber->status = True;
        $subscriber->save();

        if ($subscriber->save()) {
            return redirect(URL::previous() . "#newsletter")->with(['message'=> 'Thank You, We will contact you very soon']);
        } else {
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function edit($id){
        $this->auth();

        $subscriber =  Subscriber::find($id);
        $data = $this->get_data('create');


        return view('admin.subscriber.edit')->with('subscriber',$subscriber)->with('data',$data);

    }

    public function update(Request $request, $id){
        $this->auth();

        $subscriber= Subscriber::find($id);

        $subscriber->category_id = $request->category;
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $subscriber->user_id = Auth::user()->id;
        }

        if ($subscriber->update()) {
            return redirect('admin/subscriber/')->with(['message'=> 'Thank You, We will contact you very soon']);
        } else {
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }

    }


    public function change_status($id){
        $this->auth();
        $subscriber = Subscriber::find($id);

        if($subscriber->status){
            $subscriber->status = False;

            $message = 'Email change to deactivate';
        }else{
            $subscriber->status = True;
            $message = 'Email change to active';
        }
        $subscriber->save();
        return back()->with(['message'=> $message]);
    }


    /*--- Category --*/
    public function index_category(){
        $this->auth();
        $category = SubscriberCategory::with('user')->get();
        return view('admin.subscriber.category.index')->with('category',$category);
    }

    public function create_category(){
        $this->auth();
        return view('admin.subscriber.category.create');
    }

    public function store_category(Request $request){
        $this->auth();
        request()->validate($this->category_rules());

        $subscriber_category = new SubscriberCategory;
        $subscriber_category->category = $request->category;
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $subscriber_category->user_id = Auth::user()->id;
        }

        if ($subscriber_category->save()) {
            return redirect('admin/subscriber/')->with(['message'=> 'Thank You, We will contact you very soon']);
        } else {
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function edit_category($id){
        $this->auth();
        $category = SubscriberCategory::find($id);

        return view('admin.subscriber.category.edit')->with('category',$category);
    }

    public function update_category(Request $request, $id){
        $this->auth();
        request()->validate($this->category_rules());

        $subscriber_category = SubscriberCategory::find($id);
        $subscriber_category->category = $request->category;
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $subscriber_category->user_id = Auth::user()->id;
        }

        if ($subscriber_category->update()) {
            return redirect('admin/subscriber/')->with(['message'=> 'Thank You, We will contact you very soon']);
        } else {
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function delete_category($id){
        $this->auth();
        $service = SubscriberCategory::find($id);

        if($service != null){
            $service->delete();
            Session::flash('message', 'Successfully deleted the Core!');
            return Redirect::to('admin/about/management/');
        }

        return back()->with(['message'=> 'Object is null, wrong id']);
    }


    public function change_null_default(){
        $subscriber  = Subscriber::where('category_id',0)->get();
        $category = SubscriberCategory::where('category','all')->first();

        if(count($subscriber) > 0){
            if(count($category) > 0){
                foreach ($subscriber as $sub){
                    $sub_update = Subscriber::find($sub->id);

                    $sub_update->category_id = $category->id;
                    if (Auth::user())
                    {
                        // Auth::user() returns an instance of the authenticated user...
                        $sub_update->user_id = Auth::user()->id;
                    }
                    $sub_update->update();

                }
                return redirect('/admin/subscriber')->with('message','has updated');
            }
        }

        return redirect('/admin/subscriber')->with('message','this is null');

    }

    protected function get_data($method,$id=null){
        $data=[];
        $data[0] = " ";

        if($method =='edit'){
            $project = SubscriberCategory::select('id','category')->where('id','!=',$id)->get()->toArray();
        }else{
            $project = SubscriberCategory::select('id','category')->get()->toArray();
        }


        foreach($project as $item){
            $data[$item['id']]=$item['category'];
        }

        return $data;
    }

    protected function auth(){
        $this->middleware('auth');
    }

    public function category_rules(){
        return [
            'category' => 'required'
        ];
    }

    public function rules(){
        return [
            'email' => 'required|email|unique:subscriber,email',
        ];
    }
}
