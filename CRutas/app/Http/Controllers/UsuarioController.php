<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Redirect;

class UsuarioController extends Controller
{
    //
    public function iniciarSesion(Request $request)
    {

    	 $nombreU=$_POST['nombreU'];
    	 $contrasena=$_POST['contrasena'];

    	 if($nombreU=='admin'&&$contrasena=='admin')
    	 {
           
    	 	Session::put('admin', $nombreU);
			Session::put('pass', $contrasena);
			Session::put('success', 'success');
			return Redirect::to('/inicioAdmin');
    	 }
    	 return Redirect::to('login');
    }

    public function cerrarSesion(){
        Session::flush();
        return Redirect::to('login');
    }
}
