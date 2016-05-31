<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ImagenLugarTuristico extends Model
{
    //
    protected $table = 'imagen_lugar_turistico';
    public $timestamps=false;
    protected $primaryKey='id_imagen';
    protected $fillable = ['ruta_imagen','fk_id_lugar_turistico'];

    //public function setRutaImagenAttribute($ruta_imagen){
   	//$this->attributes['ruta_imagen'] = Carbon::now()->second.$ruta_imagen->getClientOriginalName();
   	//$nombre = Carbon::now()->second.$rutaImagen->getClientOriginalName();
    //\Storage::disk('local')->put($ruta_imagen, \File::get($ruta_imagen));
   // }
}

