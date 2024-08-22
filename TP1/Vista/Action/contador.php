<?php
$array = $_GET;
$cantidad = 0;

if (!empty($array)){
        $arregloTemp = array();
        foreach ($array as $hora){
        $arregloTemp[] = $hora;
        $cantidad += $hora;
    }
}
echo " <br> Horas totales: " . $cantidad;
