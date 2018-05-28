<?php

namespace Mundial\Datos\Modelos;

use Illuminate\Database\Eloquent\Model;

class Estadios extends Model
{
    protected $table = 'Tbl_Estadios';
    protected $fillable =['Codigo_Estadio','Nombre_Estadio','Capacidad_Estadio',
                            'Descripcion_Estadio','Ciudad_Estadio','Imagen_Estadio'];

    public function estadio (){
        return $this->hasMany('Calendario','Estadio_id','id');
    }
}
