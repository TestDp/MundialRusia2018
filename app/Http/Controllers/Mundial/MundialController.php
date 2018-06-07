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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
         $partidos = $this->calendarioServicio->ObtenerCalendario($user->id);
         $ListaPartidos= array('partidos' => $partidos);
         return view('Mundial/CalendarioMundialista',['ListaPartidos' => $ListaPartidos]);
    }

    public  function  GuardarCalendarioUsuario(Request $formCalendario)
    {
        return response()->json($this->calendarioServicio->GuardarCalendarioUsuario($formCalendario));
    }

}