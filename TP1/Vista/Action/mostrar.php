<?php

include_once "../../Control/funcion.php";

$informacion = $_GET;

$rta = calculo($informacion);

echo $rta;