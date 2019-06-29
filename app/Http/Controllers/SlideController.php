<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Slide;
use App\Http\Requests\SlideFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Image;
use DB;

class SlideController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request) {
        if ($request){
            $query=trim($request->get('searchText'));
            $slides=DB::table('slide')->where('id','LIKE','%'.$query.'%')
            ->orderBy('id','asc')
            ->paginate(15);
            return view('admin.slide.index', ['slides' => $slides,"searchText"=>$query]);
         }
    }
    public function create() {
        return view("admin.slide.create");
    }
    public function store(SlideFormRequest $request) {
        $slide=new Slide;
        if(Input::hasFile('slide')) {
            $file=Input::file('slide');
            $file->move(public_path().'images/',$file->getClientOriginalName());
            $slide->slide=$file->getClientOriginalName();
        }
        $slide->save();
        return Redirect::to('administracion/slide');
    }
    public function show($id) {
         return view("admin.slide.show",["slide"=>Slide::findOrFail($id)]);
    }
    public function edit($id) {
        return view("admin.slide.edit",["slide"=>Slide::findOrFail($id)]);
    }
    public function update(SlideFormRequest $request,$id) {
        $slide=slide::findOrFail($id);
        if(Input::hasFile('slide')) {
            $file=Input::file('slide');
            $file->move(public_path().'images/',$file->getClientOriginalName());
            $slide->slide=$file->getClientOriginalName();
        }
        $slide->save();
        return Redirect::to('administracion/slide');
    }
    public function destroy($id){
        $slide=DB::table('slide')->where('id','=',$id)->delete();
        return Redirect::to('administracion/slide');
    }
}
