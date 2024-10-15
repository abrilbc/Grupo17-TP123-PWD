<?php

namespace model;

require_once 'Carrera.php';
require_once 'Rol.php';

use model\Connector\BaseDatos;

class Persona
{
    private $legajo;
    private $nombre;
    private $objCarrera;
    private $objRol;
    private $database;

    public function __construct()
    {
        $this->legajo = null;
        $this->nombre = null;
        $this->objCarrera = new Carrera();
        $this->objRol = new Rol();
    }

    public function setLegajo($legajo)
    {
        $this->legajo = $legajo;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setObjCarrera($id_carrera)
    {
        $this->objCarrera = $id_carrera;
    }
    public function setObjRol($rol)
    {
        $this->objRol = $rol;
    }
    public function setDatabase($database)
    {
        $this->database = $database;
    }

    public function getLegajo()
    {
        return $this->legajo;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getObjCarrera()
    {
        return $this->objCarrera;
    }
    public function getObjRol()
    {
        return $this->objRol;
    }
    public function getDatabase()
    {
        return $this->database;
    }

    // get() en Medoo es el buscar() en el ORM clásico
    public function buscar($legajo)
    {
        $array = [];
        $personaDatos = BaseDatos::getInstance()->get('usuario', '*', ['legajo' => $legajo]);
        if ($personaDatos) {
            $carrera = new Carrera();
            $carrera->setId($personaDatos['id_carrera']);
            
            $rol = new Rol();
            $rol->setId($personaDatos['rol']);
            $array = [
                'legajo' => $personaDatos['legajo'],
                'nombre' => $personaDatos['nombre'],
                'objCarrera' => $carrera, // es un obj asi que pasa entero para hidratarse despues
                'objRol' => $rol //lo mismo
            ];
        }

        return $array;
    }

    // mientras que select() es listar($param);
    public function listar($condicion = "")
    {
        $where = [];
        $arrObjs = [];
        if ($condicion !== "") {
            $where = ['AND' => $condicion]; // 'AND' es para condiciones multiples en medoo
        }
        $database = BaseDatos::getInstance();
        $resultados = $database->select('usuario', '*', $where);
        if ($resultados) {
            foreach ($resultados as $fila) {
                $objPersona = new Persona();
                $objPersona->setLegajo($fila['legajo']);
                $objPersona->setNombre($fila['nombre']);

                $objCarrera = new Carrera();
                $objCarrera->setId($fila['id_carrera']);
                $datosCarrera = $objCarrera->buscar($fila['id_carrera']);
                
                $objRol = new Rol();
                $objRol->setId($fila['rol']);
                $datosRol = $objRol->buscar($fila['rol']);
                //verificamos
                if ($datosCarrera) {
                    $objCarrera->setNombre($datosCarrera['nombre']);
                }
                if ($datosRol) {
                    $objRol->setNombre($datosRol['nombre']);
                }
                $objPersona->setObjCarrera($objCarrera);
                $objPersona->setObjRol($objRol);
                $arrObjs[] = $objPersona;
            }
        }
        return $arrObjs;
    }

    public function insertar($param)
{
    $resp = false;

    // Limpiar datos antes de la comparación
    $param = $this->limpiarDatos($param);
    
    // Verifica si ya existe una persona con el mismo legajo
    $colPersonas = $this->listar(['legajo' => $param['legajo']]);
    if (empty($colPersonas)) {
        // Si no existe duplicado, continuamos con la inserción
        $idCarreraEncontrado = $this->getObjCarrera()->getId();
        if ($idCarreraEncontrado !== null) {
            $database = BaseDatos::getInstance();
            $insertResultado = $database->insert('usuario', $param);
            
            if ($insertResultado) {
                $resp = true;
            }
        }
    }

    // Retornar resultado
    return $resp;
}


    public function actualizar($param)
    {
        $resp = false;
        $claves = $this->limpiarDatos($param);
        if (isset($claves['legajo']) && is_numeric($claves['legajo'])) {
            $database = BaseDatos::getInstance();
            $resultado = $database->update('usuario', $claves, ['legajo' => $claves['legajo']]);

            if ($resultado->rowCount() > 0) {
                $resp = true;
            }
        }
        return $resp;
    }

    public function eliminar($legajo)
    {
        $resp = false;
        $legajoEncontrado = BaseDatos::getInstance()->delete('usuario', ['legajo' => $legajo]);
        if ($legajoEncontrado->rowCount() > 0) {
            $resp = true;
        }
        return $resp;
    }

    private function limpiarDatos($datos)
    {
        $columnasValidas = ['legajo', 'nombre', 'id_carrera', 'rol'];
        $mapeoClaves = [
            'obj_id_carrera' => 'id_carrera',
            'obj_rol' => 'rol'
        ];

        foreach ($datos as $key => $value) {
            if (isset($mapeoClaves[$key])) {
                $datos[$mapeoClaves[$key]] = $value;
                unset($datos[$key]);
            }

            // se limpia la clave del obj aca porque es una instancia de carrera que se instancia en persona (por construct)
            if ($key === 'obj_carrera' && $value instanceof Carrera) {
                $idCarrera = $value->getId();
                $datos['id_carrera'] = $idCarrera;
                unset($datos[$key]);
            }

            if ($key === 'obj_rol' && $value instanceof Rol) {
                $idRol = $value->getId();
                $datos['rol'] = $idRol;
                unset($datos[$key]);
            }

            if (!in_array($key, $columnasValidas) && !isset($mapeoClaves[$key])) {
                unset($datos[$key]); // destruye claves
            }
        }
        if (!isset($datos['id_carrera'])) {
            $datos['id_carrera'] = null;
        }

        return $datos;
    }
}
