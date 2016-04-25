<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ubicacion;
use App\LugarTuristico;
class LugarTuristicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vistas_admin.ruta_turistica.listado_lugares_turisticos'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
        $ubicacion1=new Ubicacion;
        $ubicacion1->id=1;
        $ubicacion1->nombre='Paraíso,Cartago';
        $ubicacion2=new Ubicacion;
        $ubicacion2->id=2;
        $ubicacion2->nombre='Liberia,Guanacaste';
        $ubicaciones=array();
        array_push($ubicaciones, $ubicacion1);
        array_push($ubicaciones, $ubicacion2);
        
        return view('vistas_admin.ruta_turistica.insertar',compact('ubicaciones')); 
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
        $nombre=$_POST['nombre'];
        return response()->json(['lugar'=> $nombre]);
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
         $lugar1=new LugarTuristico;
        $lugar1->id=1;
        $lugar1->nombre="Mirador de orosí";
        $lugar1->descripcion="lugar con muchos arboles";
        $lugar1->tiempoU=0.30;
        $lugar1->distanciaU=2;
        $lugar1->duracionL=3;

        $ubicacion1=new Ubicacion;
        $ubicacion1->id=1;
        $ubicacion1->nombre='Paraíso,Cartago';
        $ubicacion2=new Ubicacion;
        $ubicacion2->id=2;
        $ubicacion2->nombre='Liberia,Guanacaste';
        $ubicaciones=array();
        array_push($ubicaciones, $ubicacion1);
        array_push($ubicaciones, $ubicacion2);

        return view('vistas_admin.ruta_turistica.editar',compact('ubicaciones','lugar1'));
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
        return response()->json();
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
        return response()->json();
    }

    public function insertarLugar(Request $request)
    {

        $nombre=$_POST['nombre'];
        return response()->json(['lugar'=> $nombre]);
    }

    public function listadoLugaresTuristicos()
    {
        $lugar1=new LugarTuristico;
        $lugar1->id=1;
        $lugar1->nombre="Mirador de orosí";
        $lugar1->ubicacion="Paraiso,Cartago";

        $lugar2=new LugarTuristico;
        $lugar2->id=2;
        $lugar2->nombre="Africa mía";
        $lugar2->ubicacion="Libería,Guanacaste";

        $lugar3=new LugarTuristico;
        $lugar3->id=3;
        $lugar3->nombre="Playas del coco";
        $lugar3->ubicacion="Libería,Guanacaste";

        $lugares=array();
        array_push($lugares, $lugar1);
        array_push($lugares, $lugar2);
        array_push($lugares, $lugar3);

         return response()->json(
       // $lugares->toArray(), 200, array(),  JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
        $lugares, 200, array(),  JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
    }
}
