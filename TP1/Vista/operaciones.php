<?php

function operacion($info) {
    $respuesta = null;
    $n1 = $info['numero1'];
    $n2 = $info['numero2'];
    $tipo = $info["operacion"];
    switch ($tipo) {
        case 'suma': 
            $respuesta = $n1 + $n2;
            break;
        case 'resta':
            $respuesta = $n1 - $n2;
            break;
        case 'multiplicacion':
            $respuesta = $n1 * $n2;
            break;
        default:
            $respuesta = "NO";
    }
    return $respuesta;
}