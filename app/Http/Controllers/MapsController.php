<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use App\Maps;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $maps = Maps::all();

        return view('admin.maps.index')->with('maps', $maps);
    }

    public function create(){
        return view('admin.maps.create');
    }

    public function store(Request $request){
        request()->validate($this->rules());

        $maps = new Maps;
        $maps->location =  $request->location;
        $maps->maps = $request->maps;
        $maps->description = $request->description;
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $maps->user_id = Auth::user()->id;
        }


        if($maps->save()){
            return redirect('admin/maps/');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function show($id){
        return Maps::with('user')->find($id);
    }

    public function edit($id){
        $maps = Maps::find($id);

        return view('admin.maps.edit')->with('maps',$maps);
    }

    public function update(Request $request,$id){
        request()->validate($this->rules());

        $maps = Maps::find($id);
        $maps->location =  $request->location;
        $maps->maps = $request->maps;
        $maps->description = $request->description;
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $maps->user_id = Auth::user()->id;
        }


        if($maps->save()){
            return redirect('admin/maps/');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function destroy($id){
        $maps = Project::find($id);

        if($maps != null){
            $maps->delete();
            Session::flash('message', 'Successfully deleted the Project!');
            return Redirect::to('admin/maps/');
        }

        return back()->with(['message'=> 'Object is null, wrong id']);
    }

    public function rules(){
        return [
            'location'=>'required',
            'description'=>'required',
            'maps'=>'required'
        ];
    }

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'maps' => $this->maps,
            'location' => $this->location,
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
