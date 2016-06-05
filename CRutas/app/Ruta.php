<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    //
    protected $table = 'ruta';
    //protected $primaryKey='id_ubicacion';
    protected $fillable = [ 'distancia_total','tiempo_total', 'lista_lugares'];
}
