<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarTuristicoDataset extends Model
{
    //

    protected $table = 'lugar_turistico_dataset';
    public $timestamps=false;
    protected $primaryKey='id';
    protected $fillable = ['fk_id_ubicacion', 'precio_lugar_turistico','tipo_atractivo', 'clase'];
    
}
