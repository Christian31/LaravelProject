<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LugarTuristico;
use App\LugarTuristicoProbs;
use App\LugarTuristicoDataset;
use \DB;

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
       $lugares= $this->buscarLugaresTuristicos($ubicacion, $precio, $tipo_lugar, $distancia, $tiempo);
        return response()->json(['mensaje'=>  count($lugares)]);
    }

    private function buscarLugaresTuristicos($ubicacion, $precio, $tipo_lugar, $distancia, $tiempo){

        $claseLugar = $this->algoritmoBayesResult($ubicacion, $precio, $tipo_lugar);

        
        //CON ESTO LE RETORNA TODOS LOS SITIOS INSERTADOS QUE POSEEN LA CLASE CON EL VALOR OBTENIDO DEL METODO
        //QUE CALCULA LA CLASE BASADO EN LAS PROBABILIDADES
        //EN RESUMEN, OBTIENE 0 O 1
        $lugares=array();
       
        $lugares = LugarTuristico::where('clase_lugar_turistico','=', $claseLugar)->get();
        $lugares_generados = LugarTuristicoDataset::where('clase','=', $claseLugar)->get();

        //CASTEO DE LOS DATOS GENERADOS A OBJETOS DE LUGARES TURISTICOS PARA PODER MANEJARLOS EN UNA MISMA LISTA
        //Y CREAR LA RUTA EN BASE A ESA LISTA
        foreach ($lugares_generados as $lugar_temp) {
            $lugar = new LugarTuristico;
         $lugar->id_lugar_turistico = $lugar_temp->id;
           $lugar->nombre_lugar_turistico = "Registro generado";
            $lugar->fk_id_ubicacion = $lugar_temp->fk_id_ubicacion;
            $lugar->precio_lugar_turistico = $lugar_temp->precio_lugar_turistico;
            $lugar->tipo_atractivo_lugar_turistico = $lugar_temp->tipo_atractivo;
            $lugar->clase_lugar_turistico = $lugar_temp->clase;
            $lugar->distancia_ubicacion = 10;
            $lugar->tiempo_llegada_ubicacion = 1;
            $lugares->add($lugar);
        }
    


    $lista_final= $this->algoritmoEuclidesResult($lugares,$ubicacion, $precio, $tipo_lugar, $distancia, $tiempo);
    return $lista_final;
    }

    /*
    * Metodo que obtiene la clase calculada basada en la tabla de probabilidades y 
    * la tabla de datos de entrenamiento
    */
    private function algoritmoBayesResult($ubicacion, $precio, $tipo_lugar){
        $clase = 1;
        $prob1 = (($this->get_table_atri_prob_num('lugar_turistico_probs', 'class', '0', 'fk_id_ubicacion', $ubicacion)) * ($this->get_table_atri_prob_num('lugar_turistico_probs', 'class', '0', 'precio_lugar_turistico', $precio)) * ($this->get_table_atri_prob_num('lugar_turistico_probs', 'class', '0', 'tipo_atractivo', $tipo_lugar))) * $this->get_table_probClass('lugar_turistico_dataset', 'clase', '0');

        $prob2 = (($this->get_table_atri_prob_num('lugar_turistico_probs', 'class', '1', 'fk_id_ubicacion', $ubicacion)) * ($this->get_table_atri_prob_num('lugar_turistico_probs', 'class', '1', 'precio_lugar_turistico', $precio)) * ($this->get_table_atri_prob_num('lugar_turistico_probs', 'class', '1', 'tipo_atractivo', $tipo_lugar))) * $this->get_table_probClass('lugar_turistico_dataset', 'clase', '1');
        
        $prob = max($prob1, $prob2);
        
        if ($prob != 0) {
            if ($prob == $prob1) {    
                $clase = 0;
            }
        }


        return $clase;
    }

    private function get_table_atri_prob_num($tableProb, $class, $valClass, $atributo, $valAtributo){
        /**
        * se obtiene la probabilidad de un atributo especifico de la tabla de las probabilidades
        */
        $row = DB::select("SELECT prob from ".$tableProb." where ".$class." LIKE '%".$valClass."%' AND atributo = '".$atributo."' AND val = ".$valAtributo."");
        //$proAtriClass = LugarTuristicoProbs::where($class,'like','%'.$valClass.'%')->where('atributo', '=', $atributo)->where('val', '=', $valAtributo)->get();
        
        return doubleval($row);; 
    }

    public function get_table_probClass($table, $class, $valClass){

        /**
        * se obtiene la probabilidad de una clase dentro de la tabla
        */
        $probClassClass = LugarTuristicoDataset::where('clase', 'like', '%'.$valClass.'%')->count();

        /**
        * se obtiene el total de registros dentro de la tabla
        */
        $proTotal = LugarTuristicoDataset::all()->count();

        /**
        * se calcula la probabilidad total de la clase y retorna el valor
        */
        $probClass = bcdiv($probClassClass, ($proTotal), 8);
        return $probClass;
    }

    public function algoritmoEuclidesResult($lugares, $ubicacion, $precio, $tipo_lugar, $distancia, $tiempo){
         /////EUCLIDES
       $suma=0;
       $arreglo_lugares = array();
       foreach ($lugares as $fila){
            $suma = abs($ubicacion-$fila->fk_id_ubicacion)+abs($precio-$fila->precio_lugar_turistico)+abs($tipo_lugar-$fila->tipo_atractivo_lugar_turistico);
            if($suma==0){
                array_push($arreglo_lugares, $fila);
            }
        }//fin for
       ///EUCLIDES

       return  $this->crearRutas($arreglo_lugares, $distancia, $tiempo);
       
    }

    public function crearRutas($lugares, $distancia, $tiempo){
        $rutaUno= array();
        $listaOrdenadaLugares= array();
        $distanciaRuta=0;
        $tiempoRuta=0;
        $distanciaMaxima=$this->distanciaMaxima($distancia);
        $tiempoMaximo=$this->tiempoMaximo($tiempo);
       
 
       $listaOrdenadaLugares= array_values(array_sort($lugares, function ($value){
        return $value['distancia_ubicacion'];
    }));

        foreach ($listaOrdenadaLugares as $lugar) {
          
            if(count($listaOrdenadaLugares)<=5){  //solo se va a hacer una ruta
                //valida que no se pase de la distancia y tiempo ingresados por el usuario
                if($distanciaRuta<=$distanciaMaxima and $tiempoRuta<=$tiempoMaximo){
                    array_push($rutaUno, $lugar);
                    $distanciaRuta+=$lugar->distancia_ubicacion;
                    $tiempoRuta+=$lugar->tiempo_llegada_ubicacion;

                }





            }else if(count($lugares)<=10){ //se hacen dos rutas
                   

                }else{// se hacen tres rutas
                    

                }
          
        }

        return $rutaUno;

    }

    private function distanciaMaxima($distancia){
         if($distancia==1){
          $distanciaMaxima=20;
        }else if($distancia==2){
            $distanciaMaxima=40;
        }else if($distancia==3){
            $distanciaMaxima=60;

        }else{
            $distanciaMaxima=80;
        }

        return $distanciaMaxima;

    }

  private function tiempoMaximo($tiempo){
         if($tiempo==1){
          $tiempoMaximo=3;
        }else if($tiempo==2){
            $tiempoMaximo=5;
        }else if($tiempo==3){
            $tiempoMaximo=9;

        }else{
            $tiempoMaximo=12;
        }

        return $tiempoMaximo;

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
