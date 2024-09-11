<?php

class Auto
{
    private $patente;
    private $marca;
    private $modelo;
    private $objDuenio;
    private $msjOperacion;

    public function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->objDuenio = new Persona();
        $this->msjOperacion = "";
    }

    public function cargar($patente, $marca, $modelo, $duenio)
    {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setObjDuenio($duenio);
    }

    // GETTERS

    public function getPatente()
    {
        return $this->patente;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getObjDuenio()
    {
        return $this->objDuenio;
    }

    public function getMsjOperacion()
    {
        return $this->msjOperacion;
    }

    // SETTERS

    public function setPatente($patente)
    {
        $this->patente = $patente;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setObjDuenio($objDuenio)
    {
        $this->objDuenio = $objDuenio;
    }

    public function setMsjOperacion($msjOperacion)
    {
        $this->msjOperacion = $msjOperacion;
    }

    public function buscar()
    {
        $resp = false;
        $base = new BaseDatos();
        $query = "SELECT * FROM auto WHERE Patente = '" . $this->getPatente() . "'";
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($query);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $objDuenio = new Persona();
                    $objDuenio->setNroDni($row['DniDuenio']);
                    $objDuenio->buscar();
                    $this->cargar($row['Patente'], $row['Marca'], $row['Modelo'], $objDuenio);
                    $resp = true;
                }
            }
        } else {
            $this->setMsjOperacion("auto->listar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($condicion = "")
    {
        $array = []; // de autos
        $base = new BaseDatos();
        $query = "SELECT * FROM auto ";
        if ($condicion != "") {
            $query .= 'WHERE ' . $condicion;
        }

        $res = $base->Ejecutar($query);
        if ($res > -1) {
            if ($res > 0) {

                while ($row = $base->Registro()) {
                    $obj = new Auto();
                    $objDuenio = new Persona();
                    $objDuenio->setNroDni($row['DniDuenio']);
                    $obj->cargar($row['Patente'], $row['Marca'], $row['Modelo'], $objDuenio);
                    $array[] = $obj;
                }
            }
        } else {
            throw new Exception("auto->listar: " . $base->getError());
        }

        return $array;
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $objDuenio = $this->getObjDuenio();

        if ($this->getObjDuenio() != null) {
            $sql = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio)  VALUES ('" . $this->getPatente() . "','" . $this->getMarca() . "','" . $this->getModelo() . "','" . $this->getObjDuenio()->getNroDni() . "')";
            if ($base->Iniciar()) {
                if ($patente = $base->Ejecutar($sql)) {
                    $this->setPatente($patente);
                    $resp = true;
                } else {
                    $this->setMsjOperacion("auto->insertar: " . $base->getError());
                }
            } else {
                $this->setMsjOperacion("auto->insertar: " . $base->getError());
            }
        }
        return $resp;

        /*if ($objDuenio != null && $objDuenio instanceof Persona) { // Verifica que sea un objeto Persona
            $nroDniDuenio = $objDuenio->getNroDni(); // Obtiene el DNI del objeto Persona
            $sql = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio) VALUES ('" . $this->getPatente() . "','" . $this->getMarca() . "','" . $this->getModelo() . "','" . $nroDniDuenio . "')";

            if ($base->Iniciar()) {
                if ($base->Ejecutar($sql)) {
                    $resp = true;
                } else {
                    $this->setMsjOperacion("auto->insertar: " . $base->getError());
                }
            } else {
                $this->setMsjOperacion("auto->insertar: " . $base->getError());
            }
        }

        return $resp;*/
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $query = "UPDATE auto SET Marca = '" . $this->getMarca() . "',Modelo='" . $this->getModelo() . "',
        DniDuenio='" . $this->getObjDuenio()->getNroDni() . "' WHERE Patente='" . $this->getPatente() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($query)) {
                $resp = true;
            } else {
                $this->setMsjOperacion("auto->modificar: " . $base->getError());
            }
        } else {
            $this->setMsjOperacion("auto->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $query = "DELETE FROM auto WHERE Patente=" . $this->getPatente();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($query)) {
                $resp = true;
            } else {
                $this->setMsjOperacion("auto->eliminar: " . $base->getError());
            }
        } else {
            $this->setMsjOperacion("auto->eliminar: " . $base->getError());
        }
        return $resp;
    }
}
