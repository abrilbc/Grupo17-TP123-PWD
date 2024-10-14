<?php

namespace controller;

// __DIR__ es como el _toString() porque te reotrna 'algo' (la ruta) del archivo actual (como pwd en linux)
require_once __DIR__ . '/../../configuracion.php';

require_once __DIR__ . '/../model/connector/BaseDatos.php';

require_once __DIR__ . '/../model/Persona.php';
require_once __DIR__ . '/../model/Rol.php';

use Exception;
use model\Persona;
use model\Carrera;
use model\Rol;
use Laminas\Hydrator\ClassMethodsHydrator;
// use PDOException;


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
                $this->hydrator->hydrate($datosCarrera ?? [], $carreraObj); // Si no hay datos, usamos []
            }

            // --- Manejo de Rol ---
            if ($idRol = $rolObj->getId()) {
                $rol = new Rol();
                $datosRol = $rol->buscar($idRol);
                $this->hydrator->hydrate($datosRol ?? [], $rolObj); // Si no hay datos, usamos []
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
        $resultado = $personaModelo->insertar($datos);

        if ($resultado) {
            $mensaje = 'Éxito';
        } else {
            $mensaje = 'Error';
        }
        return $mensaje;
    }

    public function modificarPersona()
    {
        $msj = '';
        $personaModelo = $this->datosObjPersona();
        $datos = $this->hydrator->extract($personaModelo);
        if ($datos['legajo'] !== null) {
            $personaModelo->actualizar($datos);
            $msj = 'Éxito';
        } else {
            $msj = 'Error';
        }
        return $msj;
    }

    public function listarPersonas()
    {
        $personaModelo = $this->datosObjPersona();
        $resultado = $personaModelo->listar();
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
        } catch (Exception $e) {
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
