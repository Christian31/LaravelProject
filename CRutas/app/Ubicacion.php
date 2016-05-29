<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    //
    protected $table = 'ubicacion';
    protected $primaryKey='id_ubicacion';
    protected $fillable = [ 'nombre_ubicacion','latitud','longitud'];
}
