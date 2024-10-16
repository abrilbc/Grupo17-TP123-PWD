<?php

namespace controller;

require_once __DIR__ . '/../../configuracion.php';

require_once __DIR__ . '/../model/connector/BaseDatos.php';

require_once __DIR__ . '/../model/Rol.php';

use Exception;
use model\connector\BaseDatos;
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
    public function darNombreRol($id)
    {
        $RolModelo = new Rol();
        $RolExistente = null;
        $resultado = $RolModelo->darNombre($id);
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

    public function listarRoles()
    {
        $RolModelo = $this->datosObjRol();
        $roles = $RolModelo->listar();
        foreach ($roles as $rol) {
            $rolObj = new Rol();
            $datosRol = $rol;
            $this->hydrator->hydrate($datosRol, $rolObj);
            $resultado[] = $rolObj;
        }
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
