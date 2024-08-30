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
        
        $precio = 300;
        if ($this->getEdad() < 12 || $this->getEstudiante() == "si") {
            $precio = 160;
        }
        if ($this->getEdad() >= 12 && $this->getEstudiante() == "si") {
            $precio = 180;
        }
        $this->setPrecio(0);
        print($precio);
        return $precio;
    }
}