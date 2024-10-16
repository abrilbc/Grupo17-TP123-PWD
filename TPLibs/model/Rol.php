<?php

namespace model;

use model\connector\BaseDatos;

class Rol
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
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function buscar($dato)
    {
        $rolExistente = [];
        if (is_numeric($dato)) {
            $rolDatos = BaseDatos::getInstance()->get('rol', ['idrol', 'nombre'], ['idrol' => $dato]);
        } else {
            // Si el dato no es numérico, buscamos por nombre
            $rolDatos = BaseDatos::getInstance()->get('rol', ['idrol', 'nombre'], ['nombre' => $dato]);
        }
        if ($rolDatos) {
            $rolExistente = [
                'id' => $rolDatos['idrol'],
                'nombre' => $rolDatos['nombre']
            ];
        }
        return $rolExistente;
    }


    public function listar($condicion = "")
    {
        $where = [];
        $arrObjs = [];
        if ($condicion !== "") {
            $where = ["AND" => $condicion];
        }
        $resultados = BaseDatos::getInstance()->select('rol', '*', $where);
        if ($resultados) {
            foreach ($resultados as $fila) {
                $objRol = new Rol($fila['idrol'], $fila['nombre']);
                $arrObjs[] = $objRol;
            }
        }
        return $arrObjs;
    }

    public function insertar($param)
    {
        $resp = false;

        $datos = $this->limpiarDatos($param);
        unset($datos['idrol']);

        $database = BaseDatos::getInstance();
        $insertResultado = $database->insert('rol', $datos);
        if ($insertResultado) {
            $resp = true;
        }
        return $resp;
    }

    private function limpiarDatos($datos)
    {
        $columnasValidas = ['nombre'];
        $mapeoClaves = [
            'nombre' => 'nombre'
        ];

        foreach ($datos as $k => $v) {
            if (isset($mapeo[$k])) {
                $datos[$mapeoClaves[$k]] = $v;
                unset($datos[$k]);
            }

            if (!in_array($k, $columnasValidas) && !isset($mapeoClaves[$k])) {
                unset($datos[$k]);
            }
        }
        if (!isset($datos['idrol'])) {
            $datos['idrol'] = null;
        }
        return $datos;
    }
}
