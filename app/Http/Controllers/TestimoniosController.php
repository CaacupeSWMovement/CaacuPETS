<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Testimonios;
use App\Http\Requests\TestimoniosFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Image;
use DB;

class TestimoniosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request) {
    	if ($request){
            $query=trim($request->get('searchText'));
	        $testimonios=DB::table('testimonios')->where('id','LIKE','%'.$query.'%')
	        ->orderBy('id','asc')
	        ->paginate(15);
	        return view('admin.testimonios.index', ['testimonios' => $testimonios,"searchText"=>$query]);
	    }
    }
    public function create() {
        return view("admin.testimonios.create");
    }
    public function store(TestimoniosFormRequest $request) {
        $testimonio=new Testimonios;
        $testimonio->testimonio = $request->testimonio;
        $testimonio->save();
        return Redirect::to('administracion/testimonios');
    }
    public function show($id) {
         return view("admin.testimonios.show",["testimonio"=>Testimonios::findOrFail($id)]);
    }
    public function edit($id) {
        return view("admin.testimonios.edit",["testimonio"=>Testimonios::findOrFail($id)]);
    }
    public function update(TestimoniosFormRequest $request,$id) {
        $testimonio=Testimonios::findOrFail($id);
        $testimonio->testimonio = $request->testimonio;
        $testimonio->update();
        return Redirect::to('administracion/testimonios');
    }
    public function destroy($id){
        $testimonio=DB::table('testimonios')->where('id','=',$id)->delete();
        return Redirect::to('administracion/testimonios');
    }
}
