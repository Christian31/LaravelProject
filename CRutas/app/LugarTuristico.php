<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarTuristico extends Model
{
    //

    protected $fillable = ['id', 'nombre','descripcion','duracionL','tiempoU','distanciaU','ubicacion'];
}
