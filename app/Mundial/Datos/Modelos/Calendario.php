<?php


namespace Mundial\Datos\Modelos;

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
        //return $this->belongsTo('Mundial\Datos\Modelos\Equipos', 'EquipoLocal_id');
        return $this->belongsTo(Equipos::class,'EquipoLocal_id');
    }

    public function equipo2(){
        //return $this->belongsTo('Mundial\Datos\Modelos\Equipos', 'EquipoVisitante_id');
        return $this->belongsTo(Equipos::class, 'EquipoVisitante_id','id');
    }

    public function fase(){
       // return $this->belongsTo('Mundial\Datos\Modelos\Fases', 'Fase_id');
        return $this->belongsTo(Fases::class, 'Fase_id','id');
    }

    public function estadio(){
        //return $this->belongsTo('Mundial\Datos\Modelos\Estadios', 'Estadio_id');
        return $this->belongsTo(Estadios::class, 'Estadio_id','id');
    }


    public function usuariosXCalendario(){
        //return $this->hasMany('Mundial\Datos\Modelos\CalendarioUsuario','Id_Calendario','id');
        return $this->hasMany(CalendarioUsuario::class,'Id_Calendario','id');
    }


}
