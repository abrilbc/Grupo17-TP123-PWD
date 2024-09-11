<?php

class AbmAuto
{
    private $msjError;

    public function __construct() {}

    public function getMsjError()
    {
        return $this->msjError;
    }

    public function setMsjError($msjError)
    {
        $this->msjError = $msjError;
    }

    public function obtenerColAutos()
    {
        try {
            $colAutos = Auto::listar();
        } catch (Exception $e) {
            $this->setMsjError($e->getMessage());
            $colAutos = [];
        }
        return $colAutos;
    }

    public function obtenerDatosObjAuto($patente)
    {
        try {
            $colAutos = Auto::listar("Patente = '" . $patente . "'");
        } catch (Exception $e) {
            $this->setMsjError($e->getMessage());
            $colAutos = [];
        }

        $respuesta = '';
        if (count($colAutos) > 0) {
            $respuesta = $colAutos[0];
        } else {
            $respuesta = null;
        }
        return $respuesta;
    }

    public function agregarObjAutoNuevo($patente, $marca, $modelo, $dniDuenio)
    {
        $msj = '';
        if ($this->obtenerDatosObjAuto($patente) !== null) {
            $msj = 'el auto está';
        } else {
            try {
                $objAuto = new Auto();
                $objAuto->setPatente($patente);
                $objAuto->setMarca($marca);
                $objAuto->setModelo($modelo);
                $objDuenio = new Persona();
                $objDuenio->setNroDni($dniDuenio);
                $objAuto->setObjDuenio($objDuenio);
                $objAuto->insertar();
                $msj = 'exito';
            } catch (PDOException $e) {
                $msj = 'error al registrar: ' . $e->getMessage();
            }
        }
        return $msj;
    }
}
