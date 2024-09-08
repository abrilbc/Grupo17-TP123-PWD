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
        $persona = new Persona();
        $personas = $persona->listar("NroDni = '" . $nroDni . "'");
        $salida = "";
        if (count($personas) > 0) {
            $salida = $personas[0];
        } else {
            $salida = null;
        }
        return $salida;
    }

    public function agregarPersonaNueva($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio)
    {
        $msj = '';

        if ($this->obtenerDatosPersona($nroDni) !== null) {
            $msj = 'ya esta.';
        } else {
            try {
                $objPersona = new Persona();
                $objPersona->setNroDni($nroDni);
                $objPersona->setApellido($apellido);
                $objPersona->setNombre($nombre);
                $objPersona->setFechaNacimiento($fechaNac);
                $objPersona->setTel($telefono);
                $objPersona->setDomicilio($domicilio);
                $objPersona->insertar();
                $msj = 'Exito';
            } catch (PDOException $e) {
                $msj = 'Error registrar: ' . $e->getMessage();
            } catch (Exception $e) {
                $msj = 'otro error: ' . $e->getMessage();
            }
        }
        return $msj;
    }
}
