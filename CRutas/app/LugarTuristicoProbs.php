<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarTuristicoProbs extends Model
{
    //

    protected $table = 'lugar_turistico_probs';
    public $timestamps=false;
    //protected $primaryKey='id_lugar_turistico';
    protected $fillable = ['class', 'atributo','val','prob'];
    
}
