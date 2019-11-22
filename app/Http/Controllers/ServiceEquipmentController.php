<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use Session;
use App\ServiceEquipment;
use Illuminate\Http\Request;

class ServiceEquipmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $service = ServiceEquipment::all();

        return view('admin.service.index')->with('service',$service);
    }

    public function create(){
        $data = $this->get_data('create');

        return view('admin.service.create')->with('data', $data);
    }

    public function store(Request $request){
        request()->validate($this->rules());

        $file=  $request->file('pdf_file');
        $image=  $request->file('image');

        $destinationPath = public_path('/image/services/equipment');
        $image->move($destinationPath,$file->getClientOriginalName());
        $file->move($destinationPath,$file->getClientOriginalName());

        $service = new ServiceEquipment;
        $service->title =  $request->title;
        $service->description = $request->description;
        $service->category = $request->category;
        $service->pdf_file = $file->getClientOriginalName();
        $service->image = $image->getClientOriginalName();
        $service->next = $request->next;
        $service->prev = $request->prev;
        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $service->user_id = Auth::user()->id;
        }

        if($service->save()){
            return redirect('admin/service/equipment/');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function show($id){
        $service = ServiceEquipment::find($id);

        return view('admin.service.show')->with('service', $service);
    }

    public function edit($id){
        $service = ServiceEquipment::find($id);

        $data = $this->get_data('edit',$id);
        return view('admin.service.edit')->with('service', $service)->with('data',$data);
    }

    public function update(Request $request,$id){
        request()->validate($this->rules('edit'));

        $pdf=  $request->file('pdf_file');
        $image =$request->file('image');

        $service = ServiceEquipment::find($id);
        $service->title =  $request->title;
        $service->category = $request->category;
        $service->description = $request->description;
        $service->next = $request->next;
        $service->prev = $request->prev;

        if($pdf){
            $destinationPath = public_path('/image/services/equipment/');

            $pdf->move($destinationPath,$pdf->getClientOriginalName());

            $pdf_file = $pdf->getClientOriginalName();

            $service->pdf_file = $pdf_file;
        }
        if($image){
            $destinationPath = public_path('/image/services/equipment/');

            $image->move($destinationPath,$image->getClientOriginalName());

            $image_get = $image->getClientOriginalName();

            $service->image = $image_get;
        }


        if (Auth::user())
        {
            // Auth::user() returns an instance of the authenticated user...
            $service->user_id = Auth::user()->id;
        }


        if($service->update()){
            return redirect('admin/service/equipment/');
        }else{
            $validator->errors()->add('database', 'Something is wrong with this database cannot input record!');
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function delete($id){
        $service = ServiceEquipment::find($id);

        if($service != null){
            $service->delete();
            Session::flash('message', 'Successfully deleted the Core!');
            return Redirect::to('admin/about/management/');
        }

        return back()->with(['message'=> 'Object is null, wrong id']);
    }

    protected function get_data($method,$id=null){
        $data=[];
        $data[0] = " ";

        if($method =='edit'){
            $project = ServiceEquipment::select('id','title')->where('id','!=',$id)->get()->toArray();
        }else{
            $project = ServiceEquipment::select('id','title')->get()->toArray();
        }


        foreach($project as $item){
            $data[$item['id']]=$item['title'];
        }

        return $data;
    }

    protected function rules($type=null){
        if($type == 'edit'){
            return [
                'title'=>'required',
                'description'=>'required'
               // 'image'=> 'mimes:jpeg,png,jpg,gif,svg'
            ];
        }else{
            return [
                'title'=>'required',
                'description'=>'required',
                'image' =>'required|mimes:jpeg,png,jpg,gif,svg',
                'category'=>'required',
                'pdf_file'=>'required|mimes:doc,pdf,docx,csv,xlsx,xls,docx,ppt,odt,ods,odp|max:10000',
            ];
        }

    }
}
