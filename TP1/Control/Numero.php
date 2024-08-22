<?php
class Numero{

    private $valor;

    public function __construct($valor) {
        $this->valor = $valor; 
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
                $mensaje = "El número ingresado es negativo";
            } elseif ($this->getValor() == 0) {
                $mensaje = "El número ingresado es cero";
            } elseif ($this->getValor() > 0) {
                $mensaje = "El número ingresado es positivo.";
            }
        return $mensaje;
    }
}