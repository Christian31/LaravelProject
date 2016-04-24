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
Route::get('/resultados', function () {
    return view('vistas_cliente.listaBusqueda');
});

//admin 
Route::get('/inicioAdmin',function(){
	return view('vistas_admin.inicioAdmin');
});

// Lugar turistico
Route::resource('lugarTuristico', 'LugarTuristicoController');
//Ruta Turistica
Route::resource('rutaTuristica', 'RutaTuristicaController');
Route::get('recorridoVirtual', 'RutaTuristicaController@vistaDetalleRuta');
