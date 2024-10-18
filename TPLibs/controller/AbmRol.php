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
        $rolModelo = new Rol();
        $rolExistente = null;
        $resultado = $rolModelo->buscar($dato);
        
        if ($resultado) {
            // Hidratamos el modelo con los datos obtenidos
            $this->hydrator->hydrate($resultado, $rolModelo);
            $rolExistente = $rolModelo;
        }
        return $rolExistente;
    }

    public function agregarRol()
{
    $mensaje = '';
    $rolModelo = $this->datosObjRol();
    $datos = $this->hydrator->extract($rolModelo);
    print_r($datos);
    if (isset($datos['nombre']) && $this->buscarRol($datos['nombre'])) {
        $mensaje = 'Error: El rol con ese nombre ya existe.';
    } else {
        $resultado = $rolModelo->insertar($datos);
        if ($resultado) {
            $mensaje = 'Éxito: Rol insertado correctamente.';
        } else {
            $mensaje = 'Error: No se pudo insertar el rol.';
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
            $id = $datos['id'] ?? null;

            if ($id !== null) {
                $resultado = $rolModelo->eliminar($id);
                $msj = $resultado ? 'Éxito: Rol eliminado correctamente.' : 'Error al eliminar el rol.';
            } else {
                $msj = 'Error: ID no válido.';
            }
        } catch (\PDOException $e) {
            if ($e->getCode() == '23000') {
                $msj = 'No se puede eliminar el rol porque está asignado a uno o más usuarios.';
            } else {
                $msj = 'Error: ' . $e->getMessage();
            }
        } catch (Exception $e) {
            $msj = 'Error: ' . $e->getMessage();
        }
        return $msj;
    }

    public function listarRoles($condicion = null)
    {
        $rolModelo = $this->datosObjRol();
        $resultado = $condicion ? $rolModelo->listar($condicion) : $rolModelo->listar();
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
