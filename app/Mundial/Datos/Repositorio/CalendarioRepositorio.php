<?php


namespace Mundial\Datos\Repositorio;


use Mundial\Datos\Modelos\Equipos;
use Mundial\Datos\Modelos\Fases;
use Mundial\Datos\Modelos\Calendario;
use Mundial\Datos\Modelos\Estadios;
use Mundial\Datos\Modelos\CalendarioUsuario;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;
use PhpParser\Node\Stmt\Echo_;

class CalendarioRepositorio
{

   

    // public function obtenerEvento($idEvento)
    // {
    //     $evento = Evento::where('id','=',$idEvento)->get()->first();
    //     $evento->preguntas;
    //     $evento->preciosBoletas;
    //     $evento->preguntas->each(function($preguntas){
    //         $preguntas ->respuestas;// se realiza la relacion de la respuestas de la preguntas del evento
    //     });
    //     $evento->ciudad= Ciudad::where('id','=',$evento ->Ciudad_id)->get()->first();
    //     $evento->ciudad->departamento=Departamento::where('id','=',$evento ->ciudad->Departamento_id)->get()->first();
    //     return $evento ;
    // }

    public  function  ObtenerCalendario()
    {
        $partidos = Calendario::orderBy('id')->get();
        //$partidos = DB::table('Tbl_Calendario')->orderBy('id')->get();
        foreach ($partidos as $calendario)
        {
            $partidos->equipo1 = Equipos::where('id','=',$calendario ->EquipoLocal_id)->get()->first();
            $partidos->equipo2 = Equipos::where('id','=',$calendario ->EquipoVisitante_id)->get()->first();
            $partidos->Fases = Fases::where('id','=',$calendario ->Fase_id)->get()->first();
            $partidos->Estadio = Estadios::where('id','=',$calendario ->Estadio_id)->get()->first();

        }
        return $partidos;
    }

   

    // public  function  ObtenerMiCalendario($idUser){
    //     $partidos = CalendarioUsuarios::where("user_id","=",$idUser)->get();
    //     return $partidos;
    // }

    public function GuardarCalendarioUsuario($calendarioUsuarioreq)
    {
        DB::beginTransaction();
        try{
            //inicio del bloque donde se guarda el evento para obtener el id del evento
            
            if ($calendarioUsuarioreq->Id_Calendario) 
            {
                foreach ($calendarioUsuarioreq->Id_Calendario as $calendarioUsuario) 
                {
                $calendariouser = new CalendarioUsuario($calendarioUsuarioreq->all());
                $calendariouser->Id_Calendario = $calendarioUsuario;
                $calendariouser->Id_Usuario = 4;//$calendarioUsuarioreq->Id_Usuario;
                $calendariouser->Goles_Local = 2;//$calendarioUsuarioreq->Goles_Local;
                $calendariouser->Goles_Visitante = 2;//$calendarioUsuarioreq->Goles_Visitante;
                $calendariouser->Tendencia = 1;
                $calendariouser->save();
                }
           
            }
        
            DB::commit();

            }catch (\Exception $e) {

             $error = $e->getMessage();
             DB::rollback();
            return  false;
            //return $calendariouser ;
            }
            //return $calendariouser ;
        return true;
    }
}