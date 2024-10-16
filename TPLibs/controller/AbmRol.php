<?php

namespace controller;

use model\Rol;
use Laminas\Hydrator\ClassMethodsHydrator;

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
        var_dump($datos);
        return $mensaje;
    }

    public function listarRoles()
    {
        $RolModelo = $this->datosObjRol();
        $resultado = $RolModelo->listar();
        return $resultado;
    }

    private function datosObjRol()
    {
        $datos = darDatosSubmitted();

        $objRol = new Rol();
        $this->hydrator->hydrate($datos, $objRol); // hydrate pa
        return $objRol;
    }
}
