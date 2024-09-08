<?php

class Persona
{
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNacimiento;
    private $tel;
    private $domicilio;
    private $msjOperacion;

    public function __construct()
    {

        $this->nroDni = "";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNacimiento = "";
        $this->tel = "";
        $this->domicilio = "";
        $this->msjOperacion = "";
    }

    public function cargar($nroDni, $apellido, $nombre, $fechaNacimiento, $tel, $domicilio)
    {
        $this->setNroDni($nroDni);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
        $this->setFechaNacimiento($fechaNacimiento);
        $this->setTel($tel);
        $this->setDomicilio($domicilio);
    }

    // GETTERS

    public function getNroDni()
    {
        return $this->nroDni;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function getDomicilio()
    {
        return $this->domicilio;
    }

    public function getMsjOperacion()
    {
        return $this->msjOperacion;
    }

    // SETTERS

    public function setNroDni($nroDni)
    {
        $this->nroDni = $nroDni;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }

    public function setMsjOperacion($msjOperacion)
    {
        $this->msjOperacion = $msjOperacion;
    }

    public function buscar()
    {
        $resp = false;
        $base = new BaseDatos();
        $nroDni = $this->getNroDni();
        $query = "SELECT * FROM persona WHERE NroDni = '$nroDni'";
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($query);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->cargar($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                    $resp = true;
                }
            }
        } else {
            $this->setMsjOperacion("persona->listar: " . $base->getError());
        }
        return $resp;
    }

    public function listar($condicion = "")
    {
        $arreglo = [];
        $base = new BaseDatos();
        $query = "SELECT * FROM persona ";
        if ($condicion != "") {
            $query .= 'WHERE ' . $condicion;
        }
        $res = $base->Ejecutar($query);
        if ($res > -1) {
            if ($res > 0) {

                while ($row = $base->Registro()) {
                    $objDuenio = new Persona();
                    $objDuenio->cargar($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                    $arreglo[] = $objDuenio;
                }
            }
        } else {
            $this->setMsjOperacion("persona->listar: " . $base->getError());
        }
        return $arreglo;
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $query = "INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)
        VALUES ('"
            . $this->getNroDni() . "', '"
            . $this->getApellido() . "', '"
            . $this->getNombre() . "', '"
            . $this->getFechaNacimiento() . "', '"
            . $this->getTel() . "', '"
            . $this->getDomicilio() . "')";
        if ($base->Iniciar()) {
            if ($id = $base->Ejecutar($query)) {
                $this->setNroDni($id);
                $resp = true;
            } else {
                $this->setMsjOperacion("persona->insertar: " . $base->getError());
            }
        } else {
            $this->setMsjOperacion("persona->insertar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $query = "UPDATE persona SET Apellido='" . $this->getApellido() . "', Nombre='" . $this->getNombre() . "', 
        fechaNac='" . $this->getFechaNacimiento() . "',
        Telefono='" . $this->getTel() . "',
        Domicilio='" . $this->getDomicilio() . "'  WHERE NroDni=" . $this->getNroDni();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($query)) {
                $resp = true;
            } else {
                $this->setMsjOperacion("persona->modificar: " . $base->getError());
            }
        } else {
            $this->setMsjOperacion("persona->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $query = "DELETE FROM persona WHERE NroDni=" . $this->getNroDni();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($query)) {
                $resp = true;
            } else {
                $this->setMsjOperacion("persona->eliminar: " . $base->getError());
            }
        } else {
            $this->setMsjOperacion("persona->eliminar: " . $base->getError());
        }
        return $resp;
    }
}
