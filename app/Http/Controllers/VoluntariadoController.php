<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voluntariado;
use App\Http\Requests\VoluntariadoFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Image;
use DB;

class VoluntariadoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request) {
        if ($request){
            $query=trim($request->get('searchText'));
            $voluntariado=DB::table('voluntariado')->where('id','LIKE','%'.$query.'%')
            ->orderBy('id','asc')
            ->paginate(15);
            return view('admin.voluntariado.index', ['voluntariado' => $voluntariado,"searchText"=>$query]);
         }
    }
    public function create() {
        return view("admin.voluntariado.create");
    }
    public function store(VoluntariadoFormRequest $request) {
        $voluntariado=new Voluntariado;
        $voluntariado->titulo = $request->titulo;
        if(Input::hasFile('img1')) {
            $file=Input::file('img1');
            $file->move(public_path().'images/',$file->getClientOriginalName());
            $voluntariado->img1=$file->getClientOriginalName();
        }
        $voluntariado->texto = $request->texto;
        $voluntariado->save();
        return Redirect::to('administracion/voluntariado');
    }
    public function show($id) {
         return view("admin.voluntariado.show",["voluntariado"=>Voluntariado::findOrFail($id)]);
    }
    public function edit($id) {
        return view("admin.voluntariado.edit",["voluntariado"=>Voluntariado::findOrFail($id)]);
    }
    public function update(VoluntariadoFormRequest $request,$id) {
        $voluntariado=Voluntariado::findOrFail($id);
        $voluntariado->titulo = $request->titulo;
        if(Input::hasFile('img1')) {
            $file=Input::file('img1');
            $file->move(public_path().'images/',$file->getClientOriginalName());
            $voluntariado->img1=$file->getClientOriginalName();
        }
        $voluntariado->texto = $request->texto;
        $voluntariado->save();
        return Redirect::to('administracion/voluntariado');
    }
    public function destroy($id){
        $slide=DB::table('voluntariado')->where('id','=',$id)->delete();
        return Redirect::to('administracion/voluntariado');
    }
}
