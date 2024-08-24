<?php

include_once '../../Control/ControlUsuario.php';
include_once '../../Utils/funciones.php';


$loginExitoso = false;

$datos= darDatosSubmitted();
$usuarios = [
    ["usuario" => "Rodrigo", "clave" => "rodri123"],
    ["usuario" => "Martincho", "clave" => "Nomerentielquehiciste1"],
    ["usuario" => "Brisa", "clave" => "loveskzlove1"]
];
$objControl= new ControlUsuario($usuarios);   

$loginExitoso= $objControl->verificarUsuario($datos);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3-TP 2</title>
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="header"></div>
    <div class="container">
        <div class="centrar">
        <h2>Resultado de la Autenticación</h2>
        <p class="texto-normal">
            <h2><?php  
           echo $loginExitoso;
           ?>
           </h2>
        </p>
        
        <a href="../Ej3.php"><button class="btn">Volver</button></a>
        </div>
    </div>
</body>
</html>
