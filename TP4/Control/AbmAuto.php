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

    public function cambiarDuenioAuto($patente, $dniDuenio)
    {
        $rpta = [
            'estado' => 0, // si sale 0, éxito; si es -1, error
            'msj' => ''
        ];

        $objAuto = $this->obtenerDatosObjAuto($patente);
        $objAutoDuenio = $objAuto->getObjDuenio();
        if ($objAuto === null) {
            $rpta['estado'] = -1;
            $rpta['msj'] = 'no esta en la bdd';
        }else if ($objAutoDuenio->getNroDni() === $dniDuenio){
            $rpta['estado'] = -2;
            $rpta['msj'] = 'Este auto ya esta registrado con este DNI';
        } else {
            try {
                $objNuevoDuenio = new Persona();
                $objNuevoDuenio->setNroDni($dniDuenio);
                $objAuto->setObjDuenio($objNuevoDuenio);
                $objAuto->modificar();
                $rpta['msj'] = 'El dueño se actualizó';
            } catch (PDOException $e) {
                $rpta['estado'] = -1;
                $rpta['msj'] = 'Error: ' . $e->getMessage();
            }
        }
        return $rpta;
    }

    public function obtenerAutoPorDNI($nroDni)
    {
        try {
            $colAutos = Auto::listar("dniDuenio = '" . $nroDni . "'");
        } catch (Exception $e) {
            $this->setMsjError($e->getMessage());
            $colAutos = [];
        }
        return $colAutos;
    }
}
