<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use App\Core;
use Illuminate\Http\Request;


class AboutCoreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $core = Core::all();

        return view('admin.about.core.index')->with(compact('core'));
    }

    public function create(){
        return view('admin.about.core.create');
    }

    public function store(Request $request){
        request()->validate($this->rules());

        $core = new Core;
        $core->title =  $request->title;
        $core->content = $request->content;
        $core->category = $request->category;

        if($core->save()){
            return redirect('admin/about/core/');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }

    }

    public function show($id){
        $core = Core::find($id);

        return view('admin.about.core.show')->with('core',$core);
    }

    public function edit(Core $core, $id){
        $core = Core::find($id);
        return view('admin.about.core.edit')->with(compact('core'));
    }

    public function update(Request $request, $id){
        request()->validate($this->rules());

        $core = Core::find($id);
        $core->title = $request->title;
        $core->content = $request->content;
        $core->category = $request->category;

        if($core->update()){
            Session::flash('message', 'Successfully updated core');
            return redirect('admin/about/core');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function delete($id){
        $core = Core::find($id);

        if($core != null){
            $core->delete();
            Session::flash('message', 'Successfully deleted the Core!');
            return Redirect::to('admin/about/core');
        }

        return back()->with(['message'=> 'Object is null, wrong id']);
    }

    public function rules(){
        return [
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
        ];
    }
}
