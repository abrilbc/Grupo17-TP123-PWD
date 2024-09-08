<?php

class AbmAuto
{

    public function obtenerTodosLosAutos()
    {
        $autos = Auto::listar();
        return $autos;
    }

    public function obtenerDatosAuto($patente)
    {
        $auto = new Auto();
        $autos = $auto->listar("Patente = '" . $patente . "'");
        $salida = "";
        if (count($autos) > 0) {
            $salida = $autos[0];
        } else {
            $salida = null;
        }
        return $salida;
    }
}
