<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'auth'], function () {
Route::get('/administracion', function () {
    return view('admin.index');
});
Route::resource('administracion/noticia','NoticiaController');
Route::resource('administracion/mascota','MascotaController');
Route::resource('administracion/slide','SlideController');
Route::resource('administracion/welcome','WelcomeController');
Route::resource('administracion/testimonios','TestimoniosController');
Route::resource('administracion/nosotros','NosotrosController');
Route::resource('administracion/voluntariado','VoluntariadoController');
Route::resource('administracion/donaciones','DonacionesController');
Route::resource('administracion/user','UserController');
});
Auth::routes();

Route::get('/', 'PetsController@index');
Route::get('/about', 'PetsController@about');
Route::get('/adopcion', 'PetsController@adopcion');
Route::get('/voluntario', 'PetsController@voluntario');
Route::get('/proyecto', 'PetsController@proyecto');
Route::get('/noticia', 'PetsController@noticia');
Route::get('/donaciones', 'PetsController@donaciones');
Route::get('/contacto', 'PetsController@contacto');
