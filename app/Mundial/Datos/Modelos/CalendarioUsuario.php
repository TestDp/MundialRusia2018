<?php

namespace Mundial\Datos\Modelos;

use Illuminate\Database\Eloquent\Model;

class CalendarioUsuario extends Model
{
    //id usuario y id calendario, marcadorUsuario, goles local, goles visitante, tendencia, CampoAdcional

    protected $table = 'Tbl_CalendarioUsuario';
    protected $fillable =['Id_Usuario','Id_Calendario','Goles_Local','Goles_Visitante',
                            'Tendencia','CampoAdicional','CampoAdicional2'];

    public function calendario(){
        return $this->belongsTo('Calendario','Id_Calendario','id');
    }

    public function usuario(){
        return $this->belongsTo('Usuario','Id_Usuario','id');
    }

}
