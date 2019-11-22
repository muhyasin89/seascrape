<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $project = Project::all();

        return view('admin.projects.index')->with(compact('project'));
    }

    public function create(){


        $data= $this->get_data('create');

        return view('admin.projects.create')->with('data',$data);
    }

    public function store(Request $request){
        request()->validate($this->rules());

        // if($request->next == $request->prev){
        //     $validator->errors()->add('next and prev', 'Next record and prev record cannot be same');
        //     return back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $project = new Project;
        $project->title = $request->title;
        $project->client =  $request->client;
        $project->year = $request->year;
        $project->location = $request->location;
        $project->vesels = $request->vesels;
        $project->duration = $request->duration;
        $project->wrov = $request->wrov;
        $project->description = $request->description;
        $project->next = $request->next;
        $project->prev = $request->prev;
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $project->user_id = Auth::user()->id;
        }


        if($project->save()){
            return redirect('admin/projects/');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function show($id){
        $project = Project::find($id);

        return view('admin.projects.show')->with('project',$project);

    }

    public function edit($id){
        $project = Project::find($id);

        $data= $this->get_data('edit',$id);

        return view('admin.projects.edit')->with('project',$project)->with('data',$data);
    }

    public function update(Request $request,$id){
        request()->validate($this->rules());

        $project = Project::find($id);
        $project->title =  $request->title;
        $project->client =  $request->client;
        $project->year = $request->year;
        $project->location = $request->location;
        $project->vesels = $request->vesels;
        $project->duration = $request->duration;
        $project->wrov = $request->wrov;
        $project->description = $request->description;
        $project->next = $request->next;
        $project->prev = $request->prev;
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $project->user_id = Auth::user()->id;
        }


        if($project->save()){
            return redirect('admin/projects/');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function destroy($id){
        $project = Project::find($id);

        if($project != null){
            $project->delete();
            Session::flash('message', 'Successfully deleted the Project!');
            return Redirect::to('admin/projects/');
        }

        return back()->with(['message'=> 'Object is null, wrong id']);
    }


    protected function get_data($method,$id=null){
        $data=[];

        if($method =='edit'){
            $project = Project::select('id','title')->where('id','!=',$id)->get()->toArray();
        }else{
            $project = Project::select('id','title')->get()->toArray();
        }


        foreach($project as $item){
            $data[$item['id']]=$item['title'];
        }

        return $data;
    }

    public function rules(){
        return [
            'client'=> 'required',
            'year'=>'required',
            'location'=>'required',
            'vesels'=>'required',
            'duration'=>'required',
            'wrov'=>'required',
            'description' => 'required'
        ];
    }
}
