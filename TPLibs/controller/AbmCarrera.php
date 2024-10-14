<?php

namespace controller;

require_once __DIR__ . '/../../configuracion.php';

require_once __DIR__ . '/../model/connector/BaseDatos.php';

// require_once __DIR__ . '/../model/Persona.php';

require_once __DIR__ . '/../model/Carrera.php';

use Exception;
use model\connector\BaseDatos;
use model\Carrera;
use Laminas\Hydrator\ClassMethodsHydrator;

class AbmCarrera
{
    private $hydrator;

    public function __construct()
    {
        $this->hydrator = new ClassMethodsHydrator();
    }

    public function buscarCarrera($id)
    {
        $carreraModelo = new Carrera();
        $carreraExistente = null;
        $resultado = $carreraModelo->buscar($id);

        if ($resultado) {
            $this->hydrator->hydrate($resultado, $carreraModelo);
            $carreraExistente = $carreraModelo;
        }

        return $carreraExistente;
    }


    public function listarCarreras()
    {
        $carreraModelo = $this->datosObjCarrera();
        $resultado = $carreraModelo->listar();
        return $resultado;
    }

    /*public function agregarCarrera()
    {
        $mensaje = '';
        $carreraModelo = $this->datosObjCarrera();
        $datos = $this->hydrator->extract($carreraModelo);
        // var_dump($datos);
        $resultado = $carreraModelo->insertar($datos);

        if ($resultado) {
            $mensaje = 'Éxito';
        } else {
            $mensaje = 'Error';
        }
        return $mensaje;
    }*/

    private function datosObjCarrera()
    {
        $datos = darDatosSubmitted();
        // var_dump($datos);

        $objCarrera = new Carrera();
        $this->hydrator->hydrate($datos, $objCarrera); // hydrate pa
        // var_dump($objPersona);
        return $objCarrera;
    }
}
