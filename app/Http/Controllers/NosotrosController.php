<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nosotros;
use App\Http\Requests\NosotrosFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Image;
use DB;

class NosotrosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        $nosotros=DB::table('nosotros')
        ->orderBy('id','asc')
        ->paginate(1);
        return view('admin.nosotros.index', ['nosotros' => $nosotros]);
    }
    public function create() {
        return view("admin.nosotros.create");
    }
    public function store(NosotrosFormRequest $request) {
        return Redirect::to('administracion/nosotros');
    }
    public function show($id) {
         return view("admin.nosotros.show",["nosotros"=>Nosotros::findOrFail($id)]);
    }
    public function edit($id) {
        return view("admin.nosotros.edit",["nosotros"=>Nosotros::findOrFail($id)]);
    }
    public function update(NosotrosFormRequest $request,$id) {
        $nosotros=Nosotros::findOrFail($id);
        $nosotros->titulo1 = $request->titulo1;
        if(Input::hasFile('img1')) {
            $file=Input::file('img1');
            $file->move(public_path().'images/',$file->getClientOriginalName());
            $nosotros->img1=$file->getClientOriginalName();
        }
        $nosotros->texto1 = $request->texto1;
        $nosotros->titulo2 = $request->titulo2;
        $nosotros->texto2 = $request->texto2;
        $nosotros->titulo3 = $request->titulo3;
        $nosotros->texto3 = $request->texto3;
        $nosotros->save();
        return Redirect::to('administracion/nosotros');
    }
    public function destroy($id){
        return Redirect::to('administracion/nosotros');
    }
}
