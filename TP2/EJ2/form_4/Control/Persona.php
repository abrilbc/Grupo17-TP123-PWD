<?php
class Persona{
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;
    private $genero;
    private $estudios;
    private $deportes;

    public function __construct(){
    $this->nombre = "";
    $this->apellido = "";
    $this->edad = 0;
    $this->direccion = "";
    $this->genero = "";
    $this->estudios = "";
    $this->deportes = [];
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function getEstudios(){
        return $this->estudios;
    }

    public function getDeportes(){
        return $this->deportes;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function setEstudios($estudios){
        $this->estudios = $estudios;
    }

    public function setDeportes($deportes){
        $this->deportes = $deportes;
    }
    public function agregarDeporte($deporte){
        $arrayDep = $this->getDeportes();
        array_push($arrayDep, $deporte);
        $this->setDeportes($arrayDep);
    }

    public function mostrarDeportes(){
        $deportes = $this->getDeportes();
        $mostrar = "";
        foreach($deportes as $i => $deporte) {
            $mostrar .= $deporte;
            if ($i < (count($deportes)-1)) {
                $mostrar .= ", ";
            } else {
                $mostrar .= ".";
            }
            
        }
        return $mostrar;
    }
    public function esMayor() {
        $boolean = null;
        if ($this->getEdad() < 18) {
            $boolean = false;
        } else {
            $boolean = true;
        }
        return $boolean;
    }

    public function mostrarEstudios() {
        $retorna = "";
        switch ($this->getEstudios()) {
            case 'ninguno':
                $retorna = "No tengo estudios";
                break;
            case 'primario':
                $retorna = "Tengo estudios primarios";
                break;
            case 'secundario':
                $retorna = "Tengo estudios secundarios";
                break;
        }
        return $retorna;
    }

    public function mostrarGenero() {
        $retorna = "";
        switch ($this->getGenero()) {
            case 'mujer':
                $retorna = "Me identifico como <span> MUJER <span>";
                break;
            case 'hombre':
                $retorna = "Me identifico como <span> HOMBRE <span>";
                break;
            case 'nobinario':
                $retorna = "Me identifico como <span> NO BINARIO <span>";
                break;
            case 'otro':
                $retorna = "Prefiero no decir";
                break;
        }
        return $retorna;
    }
    public function generarMensaje($datos) {
        $retorna = "";
        if (!empty($datos)) {
            $this->setNombre($datos['nombre']);
            $this->setApellido($datos['apellido']);
            $this->setEdad($datos['edad']);
            $this->setDireccion($datos['dire']);

            $mensaje = "Hola, soy " . $this->getNombre() . " " . $this->getApellido() . 
                    "\nTengo " . $this->getEdad() . " años y vivo en " . $this->getDireccion(); 

            if ($this->esMayor()) {
                $mensaje .= "\nSoy mayor de edad";
            } else {
                $mensaje .= "\n\nSoy menor de edad";
            }

            if (!empty($datos['estudios']) && !empty($datos['genero'])) {
                $this->setEstudios($datos['estudios']);
                $this->setGenero($datos['genero']);
                $mensaje .= "\nEstudios: " . $this->mostrarEstudios();
                $mensaje .= "\nGenero: " . $this->mostrarGenero();
            }

            if (!empty($datos['deportes'])) {
                $this->setDeportes($datos['deportes']);
                $mensaje .= "\nDeportes que practico: " . $this->mostrarDeportes();
            }

            $retorna = $mensaje;
        }
        return $retorna;
    }
    
}
