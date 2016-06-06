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

Route::get('mapa', function () {
    return view('vistas_cliente.mapaSitio');
});

//login 
Route::get('login',function(){
	return view('vistas_admin.login');
});
/*Route::get('/resultados', function () {
    return view('vistas_cliente.listaBusqueda');
});*/

//admin 
Route::get('/inicioAdmin',function(){
	return view('vistas_admin.inicioAdmin');
});



// Lugar turistico
Route::resource('lugarTuristico', 'LugarTuristicoController');
Route::get('listadoLugaresTuristicos','LugarTuristicoController@listadoLugaresTuristicos');
//Route::post'lugarTuristico/update','LugarTuristicoController@update');

Route::post('editarLugarTuristico','LugarTuristicoController@editar');
//Ruta Turistica
Route::resource('rutaTuristica', 'RutaTuristicaController');
Route::get('recorridoVirtual', 'RutaTuristicaController@vistaDetalleRuta');
Route::get('nosotros', 'RutaTuristicaController@vistaNosotros');
Route::post('buscarRutas', 'RutaTuristicaController@buscarRutas');
Route::get('crearRecorridoVirtual/{idRuta}', 'RutaTuristicaController@crearRecorridoVirtual');

Route::get('resultados', 'RutaTuristicaController@volverResultadosBusqueda');
//usuario
Route::post('iniciarSesion','UsuarioController@iniciarSesion');
Route::get('cerrarSesion','UsuarioController@cerrarSesion');

