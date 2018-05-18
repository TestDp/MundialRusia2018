<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    //
    protected $table = 'Tbl_Calendario';
    protected $fillable =['Orden','Dia','Mes',
                          'Fecha_Partido','EquipoLocal_id',
                          'EquipoVisitante_id','Fase_id','Estadio_id','Marcador',
                          'GolesLocal','GolesVisitante','Grupo',
                          'Tendencia','userField1','UserField2'];

    public function equipo1(){
        return $this->belongsTo('Mundial\Datos\Modelos\Equipos');
    }

    public function equipo2(){
        return $this->belongsTo('Mundial\Datos\Modelos\Equipos');
    }

    public function fase(){
        return $this->belongsTo('Mundial\Datos\Modelos\Fases');
    }

    public function estadio(){
        return $this->belongsTo('Mundial\Datos\Modelos\Estadios');
    }


    public function usuariosXCalendario(){
        return $this->hasMany('Mundial\Datos\Modelos\CalendarioUsuario','Id_Calendario','id');
    }


}
