<?php

function data_submitted() {
    $datos = [];
    if (!empty($_POST)) {
        $datos = $_POST;
    } elseif (!empty($_GET)) {
        $datos = $_GET;
    }

    if(!empty($_FILES)) {
        $datos = array_merge($datos, $_FILES);
    }

    if (count($datos)) {
        foreach($datos as $indice => $valor) {
            if ($valor == "") {
                $datos[$indice] = 'null';
            }
        }
    }
    return $datos;
}