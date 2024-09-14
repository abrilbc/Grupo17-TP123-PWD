<?php
class Numero{

    private $valor;

    public function __construct($valor) {
        $this->valor = $valor["number"]; 
    }

    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function comparar() {
        $mensaje = "";
            if ($this->getValor() < 0) {
                $mensaje = "El número ingresado es NEGATIVO";
            } elseif ($this->getValor() == 0) {
                $mensaje = "El número ingresado es CERO";
            } elseif ($this->getValor() > 0) {
                $mensaje = "El número ingresado es POSITIVO";
            }
        return $mensaje;
    }
}