<?php

namespace model;

use model\connector\BaseDatos;

class Carrera
{
    private $id;
    private $nombre;

    public function __construct($id = null, $nombre = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function buscar($id)
    {
        $array = [];
        $carreraDatos = BaseDatos::getInstance()->get('carrera', ['idcarrera', 'nomcarrera'], ['idcarrera' => $id]);
        if ($carreraDatos) {
            $array = [
                'id' => $carreraDatos['idcarrera'],
                'nombre' => $carreraDatos['nomcarrera']
            ];
        }
        return $array;
    }

    public function listar($condicion = "")
    {
        $where = [];
        $arrObjs = [];
        if ($condicion !== "") {
            $where = ["AND" => $condicion];
        }
        $resultados = BaseDatos::getInstance()->select('carrera', '*', $where);
        if ($resultados) {
            foreach ($resultados as $fila) {
                $carrera = new Carrera($fila['idcarrera'], $fila['nomcarrera']);
                $arrObjs[] = $carrera;
            }
        }
        return $arrObjs;
    }

    /*private function verificarCarrera($idCarrera)
    {
        $resp = true;
        if (!is_numeric($idCarrera) || $idCarrera <= 0) {
            $resp = false;
        }
        $database = BaseDatos::getInstance();
        $carrera = $database->get('carrera', '*', ['idcarrera' => $idCarrera]);
        if (empty($carrera)) {
            $resp = false;
        }
        return $resp;
    }*/

    /*public function insertar($datos)
    {
        $resultado = BaseDatos::getInstance()->insert('carrera', $datos);
        return $resultado;
    }*/
}
