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

  /**  public  function  ObtenerCalendario($idUser)
    {
        $partidos = Calendario::orderBy('id')->get();
        foreach ($partidos as $calendario)
        {
            $partidos->equipo1 = Equipos::where('id','=',$calendario ->EquipoLocal_id)->get()->first();
            $partidos->equipo2 = Equipos::where('id','=',$calendario ->EquipoVisitante_id)->get()->first();
            $partidos->Fases = Fases::where('id','=',$calendario ->Fase_id)->get()->first();
            $partidos->Estadio = Estadios::where('id','=',$calendario ->Estadio_id)->get()->first();
            $partidos->usuarioXCalendario = CalendarioUsuario::where('Id_Usuario','=',$idUser)->where('Id_Calendario','=',$calendario ->id)->get()->first();
            /if ($marcador)
            {
                $partidos->equipo1->GolesLocal = $marcador->Goles_Local;
                $partidos->equipo2->GolesVisitante = $marcador->Goles_Visitante;
                $partidos->Tendencia = $marcador->Tendencia;
            }

        }
        return $partidos;
    }*/

    public  function  ObtenerCalendario($idUser)
    {
        $partidos = Calendario::orderBy('id')->get();
        foreach ($partidos as $calendario)
        {
            $calendario->equipo1;
            $calendario->equipo2;
            $calendario->Fases;
            $calendario->Estadio;
            $calendario->usuarioXCalendario=CalendarioUsuario::where('Id_Usuario','=',$idUser)->where('Id_Calendario','=',$calendario ->id)->get()->first();;
        }
        return $partidos;
    }

    public function GuardarCalendarioUsuario($calendarioUsuarioreq)
    {
        DB::beginTransaction();
        try{
            // se debecontrolar que si el usuario ya tiene un registro para el calendario solo se debe modificar los goles
            //inicio del bloque donde se guarda el calendario por usuario
            $ind =$calendarioUsuarioreq->index;
            if ($calendarioUsuarioreq->Id_Calendario)
            {
                foreach ($calendarioUsuarioreq->Id_Calendario as $calendarioUsuario)
                {
                    $calendario = CalendarioUsuario::where('Id_Usuario','=',$calendarioUsuarioreq ->Id_Usuario)->
                    where('Id_Calendario','=',$calendarioUsuario)->get()->first();

                    if ($calendario)
                    {
                        $calendario->Goles_Local = $calendarioUsuarioreq->Goles_Local[$ind];
                        $calendario->Goles_Visitante = $calendarioUsuarioreq->Goles_Visitante[$ind];
                        $calendario->save();
                    }
                    else
                    {
                        $calendariouser = new CalendarioUsuario($calendarioUsuarioreq->all());
                        $calendariouser->Id_Calendario = $calendarioUsuario;
                        $calendariouser->Id_Usuario = $calendarioUsuarioreq->Id_Usuario;
                        $calendariouser->Goles_Local = $calendarioUsuarioreq->Goles_Local[$ind];
                        $calendariouser->Goles_Visitante = $calendarioUsuarioreq->Goles_Visitante[$ind];
                        $calendariouser->Tendencia = $calendarioUsuarioreq->Tendencia[$ind];
                        $calendariouser->save();
                    }
                    $ind++;
                }
            }

            DB::commit();

        }catch (\Exception $e) {
            $error = $e->getMessage();
            DB::rollback();
            return  false;
        }
        return true;
    }



}