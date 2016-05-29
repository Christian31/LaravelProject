<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ubicacion;

class RutaTuristicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('vistas_cliente.buscar_ruta'); 
    }
    public function vistaDetalleRuta(){
         return view('vistas_cliente.detalle_ruta'); 
    }
 public function vistaNosotros(){
         return view('vistas_cliente.nosotros'); 
    }

    public function buscarRutas(Request $request){
       $ubicacion= $_POST['ubicacion'];
       $distancia= $_POST['distancia'];
       $tiempo = $_POST['tiempo'];
       $precio= $_POST['precio'];
       $tipo_lugar=  $_POST['tipo'];
     
     /////EUCLIDES
/*$suma=0;
 $distanciaMenor = 0;
 $entrada = false;
 
 foreach ($datos as $fila){
   $suma = levenshtein($estilo, $fila->estilo)+abs($promedio-$fila->promedio)+levenshtein($recinto, $fila->recinto);
  if($entrada==false){
   $distanciaMenor = $suma;
    $sexo = $fila->sexo; 
   $entrada= true;  
  }else if($distanciaMenor>$suma){ 
   $distanciaMenor= $suma; 
  $sexo = $fila->sexo; 
 }
  }*/
       ///EUCLIDES



        return response()->json(['mensaje'=>$ubicacion]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
