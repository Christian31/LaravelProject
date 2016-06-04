<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LugarTuristico;
use App\LugarTuristicoProbs;
use App\LugarTuristicoDataset;

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
       $lugares= $this->buscarLugaresTuristicos($ubicacion, $precio, $tipo_lugar);
        return response()->json(['mensaje'=>  count($lugares)]);
    }

    private function buscarLugaresTuristicos($ubicacion, $precio, $tipo_lugar){

        $claseLugar = algoritmoBayesResult($ubicacion, $precio, $tipo_lugar);

        
        //CON ESTO LE RETORNA TODOS LOS SITIOS INSERTADOS QUE POSEEN LA CLASE CON EL VALOR OBTENIDO DEL METODO
        //QUE CALCULA LA CLASE BASADO EN LAS PROBABILIDADES
        //EN RESUMEN, OBTIENE 0 O 1
        $lugares = LugarTuristico::where('clase_lugar_turistico','=', $claseLugar)->get();
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


        return $arreglo_lugares;
    }

    /*
    * Metodo que obtiene la clase calculada basada en la tabla de probabilidades y 
    * la tabla de datos de entrenamiento
    */
    private function algoritmoBayesResult($ubicacion, $precio, $tipo_lugar){
        $clase = 1;
        $prob1 = (($this->get_table_atri_prob_num('lugar_turistico_probs', 'class', '0', 'fk_id_ubicacion', $ubicacion)) * ($this->get_table_atri_prob_num('lugar_turistico_probs', 'class', '0', 'precio_lugar_turistico', $precio)) * ($this->get_table_atri_prob_num('lugar_turistico_probs', 'class', '0', 'tipo_atractivo', $tipo_lugar))) * $this->get_table_probClass('lugar_turistico_dataset', 'clase', '0');
        $prob2 = (($this->get_table_atri_prob_num('lugar_turistico_probs', 'class', '1', 'fk_id_ubicacion', $ubicacion)) * ($this->get_table_atri_prob_num('lugar_turistico_probs', 'class', '1', 'precio_lugar_turistico', $precio)) * ($this->get_table_atri_prob_num('lugar_turistico_probs', 'class', '1', 'tipo_atractivo', $tipo_lugar))) * $this->get_table_probClass('lugar_turistico_dataset', 'clase', '1');
        
        $prob = max($probb, $probbb);
        
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
        $proAtriClass = LugarTuristicoProbs::where($class,'like','%'.$valClass.'%')->AND('atributo', '=', $atributo)->AND('val', '=', $valAtributo)->get();

        return $proAtriClass; 
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
        $probClass = bcdiv($probClassClass, ($probTotal)), 8);
        return $probClass;
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
