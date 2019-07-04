<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donaciones;
use App\Http\Requests\DonacionesFormRequest;
use Illuminate\Support\Facades\Redirect;
use DB;

class DonacionesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request) {
        if ($request){
            $query=trim($request->get('searchText'));
            $donaciones=DB::table('donaciones')->where('articulo','LIKE','%'.$query.'%')
            ->orderBy('id','asc')
            ->paginate(15);
            return view('admin.donaciones.index', ['donaciones' => $donaciones,"searchText"=>$query]);
         }
    }
    public function create() {
        return view("admin.donaciones.create");
    }
    public function store(DonacionesFormRequest $request) {
        $donaciones=new Donaciones;
       	$donaciones->articulo = $request->articulo;
       	$donaciones->texto = $request->texto;
        $donaciones->save();
        return Redirect::to('administracion/donaciones');
    }
    public function show($id) {
         return view("admin.donaciones.show",["donaciones"=>Donaciones::findOrFail($id)]);
    }
    public function edit($id) {
        return view("admin.donaciones.edit",["donaciones"=>Donaciones::findOrFail($id)]);
    }
    public function update(DonacionesFormRequest $request,$id) {
        $donaciones=Donaciones::findOrFail($id);
        $donaciones->articulo = $request->articulo;
       	$donaciones->texto = $request->texto;
        $donaciones->save();
        return Redirect::to('administracion/donaciones');
    }
    public function destroy($id){
        $donaciones=DB::table('donaciones')->where('id','=',$id)->delete();
        return Redirect::to('administracion/donaciones');
    }
}
