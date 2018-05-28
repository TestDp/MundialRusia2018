<?php

namespace Mundial\Datos\Modelos;

use Illuminate\Database\Eloquent\Model;

class Fases extends Model
{
    protected $table = 'Tbl_Fases';
    protected $fillable =['Codigo_Fase','Nombre_Fase'];

    public function fases (){
        return $this->hasMany('Calendario','Fase_id','id');
    }
}
