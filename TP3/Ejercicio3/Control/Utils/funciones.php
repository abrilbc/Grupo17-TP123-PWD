<?php
function darDatosSubmitted(){
    $datos = [];
    foreach($_GET as $key => $value){
        $datos[$key] = $value;
    }
    foreach($_POST as $key => $value){
        $datos[$key] = $value;
    } 
    foreach($_FILES as $key => $value){
        $datos[$key] = $value;
    }
    return $datos;
}