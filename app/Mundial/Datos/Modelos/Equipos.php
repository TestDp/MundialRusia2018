<?php

namespace Mundial\Datos\Modelos;

use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    protected $table = 'Tbl_Equipos';
    protected $fillable =['Codigo_Equipo','Nombre_Equipo'];

    public function fases (){
        return $this->hasMany('Calendario');
    }
}
