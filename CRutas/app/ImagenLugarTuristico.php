<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenLugarTuristico extends Model
{
    //
    protected $table = 'imagen_lugar_turistico';
    public $timestamps=false;
    protected $primaryKey='id_imagen';
    protected $fillable = ['ruta_imagen','fk_id_lugar_turistico'];
}
