<?php

class Pelicula{
    private $titulo;
    private $actores;
    private $director;
    private $guion;
    private $produccion;
    private $anio;
    private $nacionalidad;
    private $genero;
    private $duracion;
    private $rest_edad;
    private $sinopsis;

    public function __construct($datos){
        $this->titulo = $datos["titulo"];
        $this->actores = $datos["actores"];
        $this->director = $datos["director"];
        $this->guion = $datos["guion"];
        $this->produccion = $datos["produccion"];
        $this->anio = $datos["anio"];
        $this->nacionalidad = $datos["nacionalidad"];
        $this->genero = $datos["genero"];
        $this->duracion = $datos["duracion"];
        $this->rest_edad = $datos["edad-radio"];
        $this->sinopsis = $datos["sinopsis"];
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function getActores()
    {
        return $this->actores;
    }
    public function setActores($actores)
    {
        $this->actores = $actores;
    }
    public function getDirector()
    {
        return $this->director;
    }
    public function setDirector($director)
    {
        $this->director = $director;
    }
    public function getGuion()
    {
        return $this->guion;
    }
    public function setGuion($guion)
    {
        $this->guion = $guion;
    }
    public function getProduccion()
    {
        return $this->produccion;
    }
    public function setProduccion($produccion)
    {
        $this->produccion = $produccion;
    }
    public function getAnio()
    {
        return $this->anio;
    }
    public function setAnio($anio)
    {
        $this->anio = $anio;
    }
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
    }
    public function getGenero()
    {
        return $this->genero;
    }
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
    public function getDuracion()
    {
        return $this->duracion;
    }
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }
    public function getRestEdad()
    {
        return $this->rest_edad;
    }
    public function setRestEdad($rest_edad)
    {
        $this->rest_edad = $rest_edad;
    }
    public function getSinopsis()
    {
        return $this->sinopsis;
    }
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;
    }

    public function __toString() {
        $text = "Titulo: " . $this->getTitulo() . "\n" .
            "Actores: " . $this->getActores() . "\n" .
            "Director: " . $this->getDirector() . "\n" .
            "Guión: " . $this->getGuion() . "\n" .
            "Producción: " . $this->getProduccion() . "\n" .
            "Año: " . $this->getAnio() . "\n" .
            "Nacionalidad: " . $this->getNacionalidad() . "\n" .
            "Género: " . $this->getGenero() . "\n" .
            "Duración: " . $this->getDuracion() . "\n" .
            "Restricción de edad: " . $this->getRestEdad() . "\n" .
            "Sinopsis: " . $this->getSinopsis();
        return $text;
    }
}