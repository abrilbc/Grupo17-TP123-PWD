<?php

class Tiempo{
    private $horas;

    public function __construct() {
        $this->horas = 0;
    }
    public function getHoras()
    {
        return $this->horas;
    }
    public function setHoras($horas)
    {
        $this->horas = $horas;
    }

    public function sumarHoras($dias) {
        $var = 0;
        foreach($dias as $hora) {
            $var += $hora;
        }
        return $var;
    }
}