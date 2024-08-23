<?php
class Calculadora{
    private $numero1;
    private $numero2;
    private $operacion;
    public function __construct($datos){
        $this->numero1 = $datos['num1'];
        $this->numero2 = $datos['num2'];
        $this->operacion = $datos['operacion'];
        $this->resultado = 0;
    }
    public function getNumero1()
    {
        return $this->numero1;
    }
    public function setNumero1($numero1)
    {
        $this->numero1 = $numero1;
    }
    public function getNumero2()
    {
        return $this->numero2;
    }
    public function setNumero2($numero2)
    {
        $this->numero2 = $numero2;
    }
    public function getOperacion()
    {
        return $this->operacion;
    }
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;
    }
    public function getResultado()
    {
        return $this->resultado;
    }
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }
    public function operar(){
        $resultado = null;
        switch ($this->getOperacion()) {
            case 'suma': 
                $resultado = $this->getNumero1() + $this->getNumero2();
                break;
            case 'resta': 
                $resultado = $this->getNumero1() - $this->getNumero2();
                break;
            case 'multiplicacion': 
                $resultado = $this->getNumero1() * $this->getNumero2();
                break;
        }
        return $resultado;
    }
}
?>