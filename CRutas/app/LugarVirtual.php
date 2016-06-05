<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarVirtual extends Model
{
    //
    protected $table = 'lugar_turistico';
    protected $fillable = ['id_lugar_turistico', 'fk_id_ubicacion', 'nombre_lugar_turistico','descripcion_lugar_turistico','tiempo_estancia_lugar_turistico','tiempo_llegada_ubicacion','distancia_ubicacion','precio_lugar_turistico','tipo_atractivo_lugar_turistico','latitud','longitud','clase_lugar_turistico', 'lista_imagenes'];
}
