<?php
namespace model;
use model\connector\BaseDatos;

class Rol{
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

    public function buscar($id)
    {
        $array = [];
        $rolDatos = BaseDatos::getInstance()->get('rol', ['idrol', 'nombre'], ['idrol' => $id]);
        if ($rolDatos) {
            $array = [
                'id' => $rolDatos['idrol'],
                'nombre' => $rolDatos['nombre']
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
        $resultados = BaseDatos::getInstance()->select('rol', '*', $where);
        if ($resultados) {
            foreach ($resultados as $fila) {
                $objRol = new Rol($fila['idrol'], $fila['nombre']);
                $arrObjs[] = $objRol;
            }
        }
        return $arrObjs;
    }

}
