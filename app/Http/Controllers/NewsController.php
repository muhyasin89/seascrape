<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news =  News::all();

        return view('admin.news.index')->with('news',$news);
    }

    public function create()
    {
        $data= $this->get_data('create');

        return view('admin.news.create')->with('data',$data);
    }

    public function store(Request $request)
    {
        request()->validate($this->rules());

        $news = new News;
        $news->title =  $request->title;
        $news->category = $request->category;
        $news->content = $request->content;
        $news->next = $request->next;
        $news->prev = $request->prev;

        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $news->user_id = Auth::user()->id;
        }

        if($news->save()){
            return redirect('admin/news/');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function show($id)
    {
        #$news = News::find($id);
        #return view('admin.news.show')->with('news',$news);

        return News::find($id);
    }

    public function edit($id)
    {
        $news = News::find($id);
        $data= $this->get_data('edit');

        return view('admin.news.edit')->with('news',$news)->with('data',$data);
    }

    public function update(Request $request, $id)
    {
        request()->validate($this->rules());

        $news = News::find($id);
        $news->title =  $request->title;
        $news->category = $request->category;
        $news->content = $request->content;
        $news->next = $request->next;
        $news->prev = $request->prev;

        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $news->user_id = Auth::user()->id;
        }

        if($news->update()){
            return redirect('admin/news/');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function destroy()
    {
        $news = News::find($id);

        if($news != null){
            $news->delete();
            Session::flash('message', 'Successfully deleted the Core!');
            return Redirect::to('admin/about/management/');
        }

        return back()->with(['message'=> 'Object is null, wrong id']);
    }

    public function rules()
    {
        return [
            'title'=>'required',
            'category' => 'required',
            'content' =>'required'
        ];
    }

    protected function get_data($method,$id=null){
        $data=[];
        $data[0] = " ";

        if($method =='edit'){
            $news = News::select('id','title')->where('id','!=',$id)->get()->toArray();
        }else{
            $news = News::select('id','title')->get()->toArray();
        }


        foreach($news as $item){
            $data[$item['id']]=$item['title'];
        }

        return $data;
    }
}
