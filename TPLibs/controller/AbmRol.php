<?php

namespace controller;


use model\Rol;
use Laminas\Hydrator\ClassMethodsHydrator;
use Exception;

class AbmRol
{
    private $hydrator;

    public function __construct()
    {
        $this->hydrator = new ClassMethodsHydrator();
    }

    public function buscarRol($dato)
    {
        $RolModelo = new Rol();
        $RolExistente = null;
        $resultado = $RolModelo->buscar($dato);
        if ($resultado) {
            $this->hydrator->hydrate($resultado, $RolModelo);
            $RolExistente = $RolModelo;
        }

        return $RolExistente;
    }

    public function agregarRol()
    {
        $mensaje = '';
        $rolModelo = $this->datosObjRol();
        $datos = $this->hydrator->extract($rolModelo);

        if (isset($datos['nombre']) && $this->buscarRol($datos['nombre'])) {
            $mensaje = 'Error';
        } else {
            $resultado = $rolModelo->insertar($datos);
            if ($resultado) {
                $mensaje = 'Éxito';
            } else {
                $mensaje = 'Error';
            }
        }
        return $mensaje;
    }

    public function eliminarRol()
    {
        $msj = "";
        try {
            $rolModelo = $this->datosObjRol();
            $datos = $this->hydrator->extract($rolModelo);
            $idrol = $datos['id'];
            if ($idrol !== null) {
                $resultado = $rolModelo->eliminar($idrol);
                if ($resultado) {
                    $msj = 'Éxito';
                } else {
                    $msj = 'Error';
                }
            }
        } catch (\PDOException $e) {
            if ($e->getCode() == '23000') {  // Este es el código específico de MySQL para violación de clave foránea
                $msj = 'No se puede eliminar el rol porque está asignado a uno o más usuarios.';
            } else {
                $msj = 'Error: ' . $e->getMessage();
            }
        } catch (Exception $e) {
            $msj = $e->getMessage();
        }
        return $msj;
    }

    public function listarRoles($condicion = null)
    {
        $RolModelo = $this->datosObjRol();
        if ($condicion) {
            $resultado = $RolModelo->listar($condicion);
        } else {
            $resultado = $RolModelo->listar();
        }
        return $resultado;
    }

    private function datosObjRol()
    {
        $datos = darDatosSubmitted();
        $objRol = new Rol();
        $this->hydrator->hydrate($datos, $objRol);
        return $objRol;
    }
}
