<?php

namespace App\Http\Controllers;
use App\Noticia;
use App\Mascota;
use App\Slide;
use App\Testimonios;
use App\Voluntariado;
use App\Welcome;
use App\Nosotros;
use App\Donaciones;
use Illuminate\Http\Request;
use DB;

class PetsController extends Controller
{
    //
	public function index () {
        $slides = DB::table('slide')->get();
        $welcome = DB::table('welcome')->get();
        $testimonios = DB::table('testimonios')->get();
		return view('pets.index',['slides' => $slides,'welcome' => $welcome,'testimonios' => $testimonios]);
	}
	
    public function about () {
        $nosotros = DB::table('nosotros')->get();
    	return view('pets.about',['nosotros' => $nosotros]);
    }

    public function adopcion () {
        $mascotas = Mascota::orderBy('id','desc')->get();
        return view('pets.adopcion')->with('mascotas',$mascotas);
    }

    public function voluntario () {
        $voluntariado = Voluntariado::orderBy('id','asc')->get();
    	return view('pets.voluntario')->with('voluntariado',$voluntariado);
    }

    public function noticia () {
        $noticias = Noticia::orderBy('id','desc')->get();
        return view('pets.noticia')->with('noticias',$noticias);
    	
    }

    public function proyecto () {
        return view('pets.proyecto');
    }

    public function donaciones () {
        $donaciones = Donaciones::orderBy('id','desc')->get();
        return view('pets.donaciones')->with('donaciones',$donaciones);
    }

    public function contacto () {
    	return view('pets.contacto');
    }
}
