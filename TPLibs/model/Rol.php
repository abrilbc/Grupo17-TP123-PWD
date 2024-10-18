<?php

namespace model;

use model\connector\BaseDatos;
use Laminas\Hydrator\ClassMethodsHydrator;

class Rol
{
    private $id;
    private $nombre;
    private $hydrator;

    public function __construct($id = null, $nombre = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->hydrator = new ClassMethodsHydrator();
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
        $rolDatos = [];
        if (is_numeric($dato)) {
            $rolDatos = BaseDatos::getInstance()->get('rol','*' , ['id' => $dato]);
        } else {
            $rolDatos = BaseDatos::getInstance()->get('rol', '*', ['nombre' => $dato]);
        }
        if ($rolDatos) {
            $this->hydrator->hydrate($rolDatos, $this);
        }

        return $this->hydrator->extract($this);
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
                $objRol = new Rol();
                $this->hydrator->hydrate($fila, $objRol);
                $arrObjs[] = $objRol;
            }
        }
        return $arrObjs;
    }

    public function insertar($param)
    {
        $resp = false;
        $datos = $this->limpiarDatos($param);

        unset($datos['id']);
        $database = BaseDatos::getInstance();
        $insertResultado = $database->insert('rol', $datos);

        if ($insertResultado) {
            $resp = true;
        }
        return $resp;
    }

    public function eliminar($id)
    {
        $resp = false;
        $idEncontrado = BaseDatos::getInstance()->delete('rol', ['id' => $id]);
        if ($idEncontrado->rowCount() > 0) {
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
            if (isset($mapeoClaves[$k])) {
                $datos[$mapeoClaves[$k]] = $v;
                unset($datos[$k]);
            }

            if (!in_array($k, $columnasValidas) && !isset($mapeoClaves[$k])) {
                unset($datos[$k]);
            }
        }

        return $datos;
    }
}
