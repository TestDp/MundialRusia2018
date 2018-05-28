<?php

namespace Mundial\Datos\Modelos;

use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    protected $table = 'Tbl_Equipos';
    protected $fillable =['Codigo_Equipo','Nombre_Equipo','Imagen_Equipo'];

    public function calendario1 (){
        return $this->hasMany('Calendario','EquipoLocal_id','id');
    }

    public function calendario2 (){
        return $this->hasMany('Calendario','EquipoVisitante_id','id');
    }
}
