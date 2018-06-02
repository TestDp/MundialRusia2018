<?php


namespace Mundial\Negocio\Logica;

use Mundial\Datos\Repositorio\CalendarioRepositorio;


class CalendarioServicio
{
    protected $calendarioRepositorio;

    public function __construct(CalendarioRepositorio $calendarioRepositorio)
    {
        $this->calendarioRepositorio = $calendarioRepositorio;
    }

    public function ObtenerCalendario($idUser)
    {
        return $this->calendarioRepositorio->ObtenerCalendario($idUser);
        
    }

    public function GuardarCalendarioUsuario($calendarioUsuario)
    {
        return $this->calendarioRepositorio->GuardarCalendarioUsuario($calendarioUsuario);
    }

}