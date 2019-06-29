<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Welcome;
use App\Http\Requests\WelcomeFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Image;
use DB;

class WelcomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        $welcome=DB::table('welcome')
        ->orderBy('id','asc')
        ->paginate(15);
        return view('admin.welcome.index', ['welcome' => $welcome]);
    }
    public function create() {
        return view("admin.welcome.create");
    }
    public function store(WelcomeFormRequest $request) {
        return Redirect::to('administracion/welcome');
    }
    public function show($id) {
         return view("admin.welcome.show",["welcome"=>Welcome::findOrFail($id)]);
    }
    public function edit($id) {
        return view("admin.welcome.edit",["welcome"=>Welcome::findOrFail($id)]);
    }
    public function update(WelcomeFormRequest $request,$id) {
        $welcome=Welcome::findOrFail($id);
        if(Input::hasFile('img1')) {
            $file=Input::file('img1');
            $file->move(public_path().'images/',$file->getClientOriginalName());
            $welcome->img1=$file->getClientOriginalName();
        }
        if(Input::hasFile('img2')) {
            $file=Input::file('img2');
            $file->move(public_path().'images/',$file->getClientOriginalName());
            $welcome->img2=$file->getClientOriginalName();
        }
        $welcome->titulo = $request->titulo;
        $welcome->subtitulo = $request->subtitulo;
        $welcome->info = $request->info;
        $welcome->save();
        return Redirect::to('administracion/welcome');
    }
    public function destroy($id){
        return Redirect::to('administracion/welcome');
    }
}
