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
        if(is_numeric($dato)){
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

    public function insertar($datos)
    {
        $resp = false;

        $datos = $this->limpiarDatos($datos);
        unset($datos['idcarrera']);

        $database = BaseDatos::getInstance();
        $insertResultado = $database->insert('carrera', $datos);
        if ($insertResultado){
            $resp = true;
        }
        return $resp;
    }

    private function limpiarDatos($datos){
    $columnasValidas = ['nomcarrera'];
    $mapeoClaves = ['nomcarrera' => 'nomcarrera'];

    foreach ($datos as $k => $v) {
        if (isset($mapeo[$k])) {
            $datos[$mapeoClaves[$k]] = $v;
            unset($datos[$k]);
        }

        if (!in_array($k, $columnasValidas) && !isset($mapeoClaves[$k])) {
            unset($datos[$k]);
        }
    }
    if (!isset($datos['idcarrera'])) {
        $datos['idcarrera'] = null;
    }
    return $datos;


    }
}
