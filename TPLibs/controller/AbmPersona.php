<?php

namespace controller;

use PDOException;
use model\Persona;
use model\Rol;
use Laminas\Hydrator\ClassMethodsHydrator;

class AbmPersona
{
    private $hydrator;

    public function __construct()
    {
        $this->hydrator = new ClassMethodsHydrator();
    }

    public function buscarPersona($legajo)
    {
        $personaModelo = new Persona();
        $resultado = $personaModelo->buscar($legajo);

        if ($resultado) {
            $rolObj = $personaModelo->getObjRol() ?? new Rol();
            $personaModelo->setObjRol($rolObj);

            // --- Manejo de Rol ---
            if ($idRol = $rolObj->getId()) {
                $rol = new Rol();
                $datosRol = $rol->buscar($idRol);
                $this->hydrator->hydrate($datosRol ?? [], $rolObj);
            }

            return $personaModelo;
        }
        return null;
    }

    public function agregarPersona()
    {
        $mensaje = '';
        $personaModelo = $this->datosObjPersona();
        $datos = $this->hydrator->extract($personaModelo);

        unset($datos['legajo']);

        if (isset($datos['obj_rol'])) {
            $datos['rol'] = $datos['obj_rol']->getId();
            unset($datos['obj_rol']);
        }

        $resultado = $personaModelo->insertar($datos);

        $mensaje = $resultado ? 'Éxito' : 'Error al insertar la persona.';
        return $mensaje;
    }

    public function modificarPersona()
    {
        $msj = '';
        $personaModelo = $this->datosObjPersona();
        $datos = $this->hydrator->extract($personaModelo);

        if (isset($datos['legajo']) && is_numeric($datos['legajo'])) {
            if (isset($datos['obj_rol'])) {
                $datos['rol'] = $datos['obj_rol']->getId();
                unset($datos['obj_rol']);
            }
            $msj = $personaModelo->actualizar($datos) ? 'Éxito' : 'Error';
        } else {
            $msj = 'Error';
        }

        return $msj;
    }

    public function listarPersonas($condicion = null)
    {
        $personaModelo = new Persona();
        $resultado = $condicion !== null ? $personaModelo->listar($condicion) : $personaModelo->listar();
        return $resultado;
    }

    public function eliminarPersona()
    {
        try {
            $personaModelo = $this->datosObjPersona();
            $datos = $this->hydrator->extract($personaModelo);
            $legajo = $datos['legajo'];

            if ($legajo !== null) {
                $resultado = $personaModelo->eliminar($legajo);
                return $resultado ? 'Éxito' : 'Error';
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        return 'Error';
    }

    private function datosObjPersona()
    {
        $datos = darDatosSubmitted();

        // Manejo de Rol
        if (isset($datos['rol'])) {
            $rol = new Rol($datos['rol']);
            $datos['obj_rol'] = $rol;
        }

        $objPersona = new Persona();
        $this->hydrator->hydrate($datos, $objPersona);
        return $objPersona;
    }
}
