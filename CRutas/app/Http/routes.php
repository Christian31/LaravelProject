<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//admin 
Route::get('/inicioAdmin',function(){
	return view('vistas_admin.inicioAdmin');
});

Route::get('/inicio',function(){
	return view('vistas_cliente.inicio');
});
// Ruta turistica
Route::resource('rutaT', 'RutaTuristicaController');