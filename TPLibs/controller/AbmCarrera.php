<?php

namespace controller;

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


    public function listarCarreras($condicion = null)
    {
        $carreraModelo = $this->datosObjCarrera();
        if ($condicion) {
            $resultado = $carreraModelo->listar($condicion);
        } else {
            $resultado = $carreraModelo->listar();
        }
        return $resultado;
    }

    public function agregarCarrera()
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
    }

    private function datosObjCarrera()
    {
        $datos = darDatosSubmitted();

        $objCarrera = new Carrera();
        $this->hydrator->hydrate($datos, $objCarrera); // hydrate pa
        return $objCarrera;
    }
}
