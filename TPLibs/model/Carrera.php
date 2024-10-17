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

    public function buscar($dato)
    {
        $carreraExistente = [];
        if (is_numeric($dato)) {
            $carreraDatos = BaseDatos::getInstance()->get('carrera', ['idcarrera', 'nomcarrera'], ['idcarrera' => $dato]);
        } else {
            $carreraDatos = BaseDatos::getInstance()->get('carrera', ['idcarrera', 'nomcarrera'], ['idcarrera' => $dato]);
        }
        if ($carreraDatos) {
            $carreraExistente = [
                'id' => $carreraDatos['idcarrera'],
                'nombre' => $carreraDatos['nomcarrera']
            ];
        }
        return $carreraExistente;
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

    public function insertar($datos)
    {
        $resp = false;
        unset($datos['idcarrera']);

        $database = BaseDatos::getInstance();
        $insertResultado = $database->insert('carrera', $datos);
        if ($insertResultado) {
            $resp = true;
        }
        return $resp;
    }
}
