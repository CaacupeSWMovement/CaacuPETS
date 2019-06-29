<?php

namespace App\Http\Controllers;
use App\Noticia;
use App\Mascota;
use App\Slide;
use App\Welcome;
use Illuminate\Http\Request;
use DB;

class PetsController extends Controller
{
    //
	public function index () {
        $slides = DB::table('slide')->get();
        $welcome = DB::table('welcome')->get();
		return view('pets.index',['slides' => $slides,'welcome' => $welcome]);
	}
	
    public function about () {
    	return view('pets.about');
    }

    public function photo () {
        $mascotas = Mascota::orderBy('id','desc')->get();
    	return view('pets.photo')->with('mascotas',$mascotas);
    }

    public function adopcion () {
    	return view('pets.adopcion');
    }

    public function voluntario () {
    	return view('pets.voluntario');
    }

    public function noticia () {
        $noticias = Noticia::orderBy('id','desc')->get();
        return view('pets.noticia')->with('noticias',$noticias);
    	
    }

    public function contacto () {
    	return view('pets.contacto');
    }
}
