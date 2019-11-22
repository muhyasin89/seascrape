<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use App\ClientModel;
use App\Core;
use App\News;
use App\Maps;
use App\Project;
use App\KeyManagement;
use App\ServiceEquipment;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu()
    {
        return view('home');
    }

    public function home(){
        if (Auth::user()) {
            return redirect('/admin/');
        }else{
            return redirect('/login');
        }
    }

    public function index()
    {
        $client = ClientModel::all();
        $data=[
            'page'=>'home',
            'client' => $client
        ];

        return view('main.home')->with('data',$data);
    }

    public function home1()
    {
        $client = ClientModel::all();
        $data=[
            'page'=>'home',
            'client' => $client
        ];

        return view('main.home1')->with('data',$data);
    }

    public function about($sub='core'){
        $data= [
            'page' => 'about',
            'sub' => $sub,
            'data' => $this->raw_data(),
        ];

        if($sub == 'company'){
            return view('main.about.company')->with('data',$data);
        }elseif($sub == 'key_management') {
            $first = KeyManagement::orderBy('created_at')->first();;
            $rest = KeyManagement::orderBy('created_at')->whereNotIn('id',array($first->id))->take(6)->get();

            $data['first'] = $first;
            $data['rest'] = $rest;

            return view('main.about.key_management')->with('data',$data);
        }elseif($sub == 'mission_statement'){
            return view('main.about.mission_statement')->with('data',$data);
        }else{
            $core_content = Core::where('category','normal')->orWhere('category','both')->get();
            $core_slider = Core::where('category','slider')->orWhere('category','both')->get();

            $data['content'] = $core_content;
            $data['slider'] = $core_slider;

            return view('main.about.core_value')->with('data',$data);
        }
    }

    public function services($sub='survey_positioning',$id=null){
        $data= [
            'page' => 'services',
            'sub' => $sub
        ];


        if($sub == 'subsea_inspection'){
            return view('main.services.subsea_inspection')->with('data',$data);
        }elseif ($sub == 'our_equipment'){
            $data['rov'] = ServiceEquipment::select('id','title')->where('category','rov')->get();
            $data['vessel'] = ServiceEquipment::select('id','title')->where('category','vessel')->get();

            return view('main.services.our_equipment')->with('data',$data);
        }elseif($sub == 'equipment_details'){
            $data['detail']= ServiceEquipment::find($id);
            $nextEquipment = $data['detail']['next'];
            $prevEquipment = $data['detail']['prev'];
            $data['nextEquipment'] = ServiceEquipment::where('id', (int)$nextEquipment)->first();
            $data['prevEquipment'] = ServiceEquipment::where('id', (int)$prevEquipment)->first();
            return view('main.services.equipment_details')->with('data',$data);
        }else{
            return view('main.services.survey_positioning')->with('data',$data);
        }
    }


    public function news($sub='list',$id=null){
        $data = [
            'page' => 'news',
            'sub' => $sub
        ];

        if($sub == 'newsletter'){
            return view('main.news.newsletter')->with('data',$data);
        }elseif ($sub == 'detail'){
            $data['detail'] = News::find($id);
            return view('main.news.post')->with('data',$data);
        }else{
            $data['list']= News::paginate(6);
            return view('main.news.list')->with('data',$data);
        }
    }


    public function project($sub='list',$id=null){
        $data = [
            'page' => 'project',
            'sub' => $sub
        ];

        if($sub == 'list'){
            $data['list'] = Project::get();
            return view('main.project.list')->with('data',$data);
        }else{
            $data['detail'] = Project::find($id);
            $nextProject = $data['detail']['next'];
            $prevProject = $data['detail']['prev'];
            $data['nextProject'] = Project::where('id', (int)$nextProject)->first();
            $data['prevProject'] = Project::where('id', (int)$prevProject)->first();
            return view('main.project.detail')->with('data',$data);
        }
    }


    public function hse($sub = null){
        $data = [
            'page' => 'hse',
            'sub' => $sub
        ];

        return view('main.hse')->with('data',$data);
    }

    public function career($sub = null){
        $data = [
            'page' => 'career',
            'sub' => $sub
        ];

        return view('main.career')->with('data',$data);
    }

    public function contact($sub = null){

        $maps = Maps::all();

        $data = [
            'page' => 'contact',
            'sub' => $sub,
            'maps' => $maps
        ];

        return view('main.contact')->with('data',$data);
    }

    public function maps_api($id){
        return Maps::with('user')->find($id);
    }

    public function about_key_management_api($id){
        return KeyManagement::with('user')->find($id);
    }

    public function test($name=null){

        $title = explode("@",$name);
        if (strpos($title[0], '.') !== false) {
            $result = explode("@",$title[0]);
        }else if(strpos($title[0], '-') !== false){
            $result = explode("@",$title[0]);
        }else if(strpos($title[0], '_') !== false){
            $result = explode("@",$title[0]);
        }else{
            $result = $title[0];
        }

        return $result;
    }

    protected function raw_data(){
        $content = 'Completing project safely, without  Injury to personnel damage to  Equipment or effect to the environment';
        return [
            [
                'title' => 'Safety first',
                'content' => $content,
            ],[
                'title' => 'Reliable',
                'content' => $content,
            ], [
                'title' => 'High Quality',
                'content' => $content,
            ],[
                'title'=> 'Suitable Equipment',
                'content' => $content,
            ],[
                'title' =>'Safety First',
                'content' => $content,
            ],[
                'title' => 'Reliable',
                'content' => $content,
            ]
        ];
}

}
