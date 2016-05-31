<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ubicacion;
use App\LugarTuristico;
use App\ImagenLugarTuristico;

use Session;
class LugarTuristicoController extends Controller
{

     public function __construct()
   {
       // $this->middleware('auth');
      if(!Session::has('success')){
        $this->middleware('auth');
       }
   }
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
       
        $ubicaciones=Ubicacion::all();
       
        
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
        $lugar=new LugarTuristico;
        $lugar->nombre_lugar_turistico=$_POST['nombre'];
        $lugar->fk_id_ubicacion=$_POST['ubicacion'];
        $lugar->descripcion_lugar_turistico=$_POST['descripcion'];
        $lugar->tiempo_estancia_lugar_turistico=$_POST['duracionL'];
        $lugar->tiempo_llegada_ubicacion=$_POST['tiempoU'];
        $lugar->distancia_ubicacion=$_POST['distanciaU'];
        $lugar->precio_lugar_turistico=$_POST['precio'];
        $lugar->tipo_atractivo_lugar_turistico=$_POST['tipo'];
        $lugar->latitud=$_POST['latitud'];
        $lugar->longitud=$_POST['longitud'];

        //$imagen->$request['imagen'];
        //var_dump($lugar);
       
        $lugar->save();
        $destinationPath =  public_path('imagenes/');

        foreach ($_FILES as $key) //Iteramos el arreglo de archivos
        {
              
              $imagenLugar=new ImagenLugarTuristico;
              $nombreImagen=$key["name"];
              
              $fileName = $destinationPath.$nombreImagen; // renameing image
              move_uploaded_file($key["tmp_name"], $fileName);
              $imagenLugar->ruta_imagen= $fileName;
              $imagenLugar->fk_id_lugar_turistico= $lugar->id_lugar_turistico;
              $imagenLugar->save();
        }
       

        return response()->json(['lugar'=>  $lugar->nombre_lugar_turistico]);;
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

         $lugar1= LugarTuristico::find($id);
         $ubicaciones=Ubicacion::all();
        

        return view('vistas_admin.ruta_turistica.editar',compact('ubicaciones','lugar1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
      // $nombre='Se actualizo';
       // echo "string";
        $id=$request->get('id');
         echo $id;
        $lugar= LugarTuristico::find($id);
        $lugar->fill($request->all());
        $lugar->save();
        return response()->json(['lugar'=> 'Se actualizo correctamente']);
    }

    public function editar(Request $request)
    {
        $lugar= LugarTuristico::find($_POST['id']);
        $lugar->fill($request->all());
        $lugar->save();

         $destinationPath =  public_path('imagenes/');
         $bandera=1;
        foreach ($_FILES as $key) //Iteramos el arreglo de archivos
        {
              if($bandera==1)
              {
                $this->eliminarImagenes($lugar->id_lugar_turistico);
              }
              $imagenLugar=new ImagenLugarTuristico;
              $nombreImagen=$key["name"];
              
              $fileName = $destinationPath.$nombreImagen; // renameing image
              move_uploaded_file($key["tmp_name"], $fileName);
              $imagenLugar->ruta_imagen= $fileName;
              $imagenLugar->fk_id_lugar_turistico= $lugar->id_lugar_turistico;
              $imagenLugar->save();
              $bandera=2;
        }
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
        $this->eliminarImagenes($id);
        LugarTuristico::destroy($id);
        return response()->json();
    }

    public function eliminarImagenes($id)
    {
        $imagenes=ImagenLugarTuristico::where('fk_id_lugar_turistico','=',$id)->get();
        //var_dump($imagenes);
        foreach ($imagenes as $imagen) {
            unlink($imagen->ruta_imagen);
            $imagen->delete();
        }
    }

    public function insertarLugar(Request $request)
    {

        $nombre=$_POST['nombre'];
        return response()->json(['lugar'=> $nombre]);
    }

    public function listadoLugaresTuristicos()
    {
       

        $lugares=LugarTuristico::all();
        

         return response()->json(
       // $lugares->toArray(), 200, array(),  JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
        $lugares->toArray(), 200, array(),  JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
    }
}
