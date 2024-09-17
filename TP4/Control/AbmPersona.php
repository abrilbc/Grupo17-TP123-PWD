<?php

class AbmPersona
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

    public function obtenerColeccionPersonas()
    {
        try {
            $colPersonas = Persona::listar();
        } catch (Exception $e) {
            $this->setMsjError($e->getMessage());
            $colPersonas = [];
        }
        return $colPersonas;
    }

    // obbtener persona por dni
    public function obtenerDatosObjPersona($nroDni)
    {
        try {
            $colPersonas = Persona::listar("NroDni = '" . $nroDni . "'");
        } catch (Exception $e) {
            $this->setMsjError($e->getMessage());
            $colPersonas = [];
        }

        $respuesta = '';
        if (count($colPersonas) > 0) {
            $respuesta = $colPersonas[0];
        } else {
            $respuesta = null;
        }
        return $respuesta;
    }

    public function agregarObjPersonaNueva($nroDni, $nombre, $apellido,  $fechaNac, $telefono, $domicilio)
    {
        $msj = '';

        if ($this->obtenerDatosObjPersona($nroDni) !== null) {
            $msj = 'PERSONA AGREGADA CORRECTAMENTE';
        } else {
            try {
                $objPersona = new Persona();
                $objPersona->setNroDni($nroDni);
                $objPersona->setNombre($nombre);
                $objPersona->setApellido($apellido);
                $objPersona->setFechaNacimiento($fechaNac);
                $objPersona->setTel($telefono);
                $objPersona->setDomicilio($domicilio);
                $objPersona->insertar();
                $msj = 'Exito';
            } catch (PDOException $e) {
                $msj = 'Error registrar: ' . $e->getMessage();
            }
        }
        return $msj;
    }

    public function modificarDatosPersona($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio)
    {
        $msj = '';

        $abmObjPersona = new AbmPersona();
        $objPersona = new Persona();
        $objPersona->cargar($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio);

        if (!($abmObjPersona->obtenerDatosObjPersona($nroDni) === null)) {
            try {
                $objPersona->modificar();
                $msj = "exito";
            } catch (PDOException $e) {
                $msj = "Error: " . $e->getMessage();
            }
        } else {
            $msj = "no persona en bdd";
        }
        return $msj;
    }
}
