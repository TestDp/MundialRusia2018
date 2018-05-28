<?php


namespace App\Http\Controllers\Mundial;
//namespace Mundial\Http\Controllers\Mundial;

use Mundial\Datos\Modelos\Equipos;
use Mundial\Datos\Modelos\Fases;
use Mundial\Datos\Modelos\Calendario;
use Mundial\Datos\Modelos\Estadios;
use Mundial\Datos\Modelos\CalendarioUsuario;
use Mundial\Negocio\Logica\CalendarioServicio;
use App\Http\Controllers\Controller;


use Illuminate\Routing\Controller as BaseController;

class MundialController extends Controller
{
    protected $calendarioServicio;
    protected $equiposServicio;
    protected $estadiosServicio;

    public function __construct(CalendarioServicio $calendarioServicio)
    {
        $this->calendarioServicio=$calendarioServicio;
        //$this->equiposServicio = $equiposServicio;
        //$this->estadiosServicio = $estadiosServicio;
    }

    public  function  ObtenerCalendario()
    {
        $partidos = $this->calendarioServicio->ObtenerCalendario();
        $ListaPartidos= array('partidos' => $partidos);
        return view('Mundial/CalendarioMundialista',['ListaPartidos' => $ListaPartidos]);
        // return response()->json($this->calendarioServicio->ObtenerCalendario());


    }



    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}