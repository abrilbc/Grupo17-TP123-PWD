<?php

class AbmPersona
{
    public function __construct() {}

    public function obtenerTodasLasPersonas()
    {
        $persona = new Persona();
        $personas = $persona->listar();
        return $personas;
    }


    // obbtener persona por dni
    public function obtenerDatosPersona($nroDni)
    {
        $personas = Persona::listar("NroDni = '" . $nroDni . "'");
        $salida = "";
        if (count($personas) > 0) {
            $salida = $personas[0];
        } else {
            $salida = null;
        }
        return $salida;
    }
}
