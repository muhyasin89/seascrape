<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\KeyManagement;
use Illuminate\Http\Request;
use App\Http\Resources\KeyManagement as KeyManagementResource;

class KeyManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $management = KeyManagement::with('prev','next','user')->get();

        return view('admin.about.management.index')->with('management',$management);
    }

    public function create(){
        $data =  $this->get_data('create');

        return view('admin.about.management.create')->with('data',$data);
    }

    public function store(Request $request){
        request()->validate($this->rules('create'));

        $image=  $request->file('image');

        $destinationPath = public_path('/image/about/management/');

        $image->move($destinationPath,$image->getClientOriginalName());

        $management = new KeyManagement;
        $management->name =  $request->name;
        $management->position = $request->position;
        $management->image = $image->getClientOriginalName();
        $management->description = $request->description;
        $management->next = $request->next;
        $management->prev = $request->prev;
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $management->user_id = Auth::user()->id;
        }

        if($management->save()){
            return redirect('admin/about/management/');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function show($id){
        return KeyManagement::with('user')->find($id);
    }

    public function edit($id){
        $data =  $this->get_data('edit',$id);
        $management = KeyManagement::find($id);
        return view('admin.about.management.edit')->with('management',$management)->with('data',$data);
    }

    public function update(Request $request,$id){
        request()->validate($this->rules());

        $image=  $request->file('image');

        $destinationPath = public_path('/image/about/management/');




        $management = KeyManagement::find($id);
        $management->name =  $request->name;
        $management->position = $request->position;
        $management->next = $request->next;
        $management->prev = $request->prev;
        if($image){
            $image->move($destinationPath,$image->getClientOriginalName());
            $management->image = $image->getClientOriginalName();
        }

        $management->description = $request->description;
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $management->user_id = Auth::user()->id;
        }


        if($management->update()){
            return redirect('admin/about/management/');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function delete($id){
        $management = KeyManagement::find($id);

        if($management != null){
            $management->delete();
            Session::flash('message', 'Successfully deleted the Core!');
            return Redirect::to('admin/about/management/');
        }

        return back()->with(['message'=> 'Object is null, wrong id']);
    }

    public function rules($method=null){
        if($method == 'create'){
            return [
                'name' => 'required',
                'position' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                'description' =>'required'
            ];
        }else{
            return [
                'name' => 'required',
                'position' => 'required',
                'description' =>'required'
            ];
        }

    }

    protected function get_data($method,$id=null){
        $data=[];
        $data[0] = " ";

        if($method =='edit'){
            $project = KeyManagement::select('id','name')->where('id','!=',$id)->get()->toArray();
        }else{
            $project = KeyManagement::select('id','name')->get()->toArray();
        }


        foreach($project as $item){
            $data[$item['id']]=$item['name'];
        }

        return $data;
    }

}
