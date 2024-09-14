<?php

class Entrada{
    private $edad;
    private $estudiante;
    private $precio;

    public function __construct($datos){
        $this->edad = $datos['edad'];
        $this->estudiante = $datos['estudiante'];
        $this->precio = 0;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    public function getEstudiante()
    {
        return $this->estudiante;
    }
    public function setEstudiante($estudiante)
    {
        $this->estudiante = $estudiante;
    }    
    public function getPrecio()
    {
        return $this->precio;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    public function calcularPrecio() {
        if ($this->getEstudiante() == 'Si') {
            if ($this->getEdad() < 12) {
                $precio = 160;
            } else {
                $precio = 180;
            }
        } else {
            $precio = 300;
        }
        $this->setPrecio($precio);
        print($precio);
        return $precio;
    }
}