<?php

function calculo($informacion){
    $tarifa = 300;
    $edad = $informacion['edad'];
    $estResp = $informacion['estudiante'];
    if ($estResp == 'si' || $edad <= 12) {
        $tarifa = 160;
    } 
    
    if ($estResp == 'si' && $edad >= 12) {
        $tarifa = 180;
    }
    return $tarifa;
}