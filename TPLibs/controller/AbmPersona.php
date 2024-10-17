<?php

namespace controller;

use PDOException;
use model\Persona;
use model\Carrera;
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
        $personaExistente = null;

        if ($resultado) {
            // Hidratamos los datos de la persona
            $this->hydrator->hydrate($resultado, $personaModelo);
            $carreraObj = $personaModelo->getObjCarrera() ?? new Carrera();
            $rolObj = $personaModelo->getObjRol() ?? new Rol();
            $personaModelo->setObjCarrera($carreraObj); // Lo seteamos independientemente
            $personaModelo->setObjRol($rolObj);

            // --- Manejo de Carrera ---
            if ($idCarrera = $carreraObj->getId()) {
                $carrera = new Carrera();
                $datosCarrera = $carrera->buscar($idCarrera);
                $this->hydrator->hydrate($datosCarrera ?? [], $carreraObj);
            }

            // --- Manejo de Rol ---
            if ($idRol = $rolObj->getId()) {
                $rol = new Rol();
                $datosRol = $rol->buscar($idRol);
                $this->hydrator->hydrate($datosRol ?? [], $rolObj);
            }

            $personaExistente = $personaModelo;
        }
        return $personaExistente;
    }

    public function agregarPersona()
    {
        $mensaje = '';
        $personaModelo = $this->datosObjPersona();
        $datos = $this->hydrator->extract($personaModelo);

        unset($datos['legajo']);

        if (isset($datos['obj_carrera'])) {
            $datos['id_carrera'] = $datos['obj_carrera']->getId();
            unset($datos['obj_carrera']);
        }

        if (isset($datos['obj_rol'])) {
            $datos['rol'] = $datos['obj_rol']->getId();
            unset($datos['obj_rol']);
        }

        $resultado = $personaModelo->insertar($datos);

        if ($resultado) {
            $mensaje = 'Éxito';
        } else {
            $mensaje = 'Error al insertar la persona.';
        }

        return $mensaje;
    }

    public function modificarPersona()
    {
        $msj = '';
        $personaModelo = $this->datosObjPersona();
        $datos = $this->hydrator->extract($personaModelo);

        if (isset($datos['legajo']) && is_numeric($datos['legajo'])) {
            if (isset($datos['obj_carrera'])) {
                $datos['id_carrera'] = $datos['obj_carrera']->getId();
                unset($datos['obj_carrera']);
            }

            if (isset($datos['obj_rol'])) {
                $datos['rol'] = $datos['obj_rol']->getId();
                unset($datos['obj_rol']);
            }
            if ($personaModelo->actualizar($datos)) {
                $msj = 'Éxito';
            } else {
                $msj = 'Error';
            }
        } else {
            $msj = 'Error';
        }

        return $msj;
    }


    public function listarPersonas($condicion = null)
    {
        $personaModelo = $this->datosObjPersona();
        if ($condicion !== null) {
            $resultado = $personaModelo->listar($condicion);
        } else {
            $resultado = $personaModelo->listar();
        }
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
                if ($resultado) {
                    $msj = 'Éxito';
                } else {
                    $msj = 'Error';
                }
            }
        } catch (PDOException $e) {
            $msj = $e->getMessage();
        }
        return $msj;
    }

    private function datosObjPersona()
    {
        $datos = darDatosSubmitted();
        // Manejo de Carrera
        if (isset($datos['id_carrera'])) {
            $carrera = new Carrera($datos['id_carrera']);
            $datos['obj_carrera'] = $carrera;
        }

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
