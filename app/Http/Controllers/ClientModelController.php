<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\ClientModel;
use Illuminate\Http\Request;

class ClientModelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $client = ClientModel::all();

        return view('admin.clientmodel.index')->with('client',$client);
    }

    public function create(){
        return view('admin.clientmodel.create');
    }

    public function store(Request $request){
        request()->validate($this->rules());

        $image=  $request->file('image');

        $destinationPath = public_path('/image/client/model/');

        $image->move($destinationPath,$image->getClientOriginalName());

        $client = new ClientModel;
        $client->title =  $request->title;

        $client->image = $image->getClientOriginalName();
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $client->user_id = Auth::user()->id;
        }

        if($client->save()){
            #return redirect('admin/client/model/image/'.$client->id);
            return redirect('admin/client/model/');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function image_edit($id){
        $client = ClientModel::find($id);

        return view('admin.clientmodel.preview')->with('client',$client);
    }

    public function show($id){
        $client = ClientModel::find($id);

        return view('admin.clientmodel.show')->with('client',$client);
    }

    public function edit($id){
        $client = ClientModel::find($id);

        return view('admin.clientmodel.edit')->with('client',$client);
    }

    public function update($id){
        request()->validate($this->rules());

        $image=  $request->file('image');

        $destinationPath = public_path('/image/client/model/');

        $image->move($destinationPath,$image->getClientOriginalName());

        $client = ClientModel::find($id);
        $client->title =  $request->title;

        $client->image = $image->getClientOriginalName();
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $client->user_id = Auth::user()->id;
        }

        if($client->save()){
            return redirect('admin/client/model/');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function delete($id){
        $project = ClientModel::find($id);

        if($project != null){
            $project->delete();
            Session::flash('message', 'Successfully deleted the Project!');
            return Redirect::to('admin/projects/');
        }

        return back()->with(['message'=> 'Object is null, wrong id']);
    }


    public function rules(){
        return [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}
