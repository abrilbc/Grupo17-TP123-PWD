<?php
include_once '../../Control/Persona.php';
include_once '../../Utils/funciones.php';
include '../Estructura/header.php';

    $datos = darDatosSubmitted();

    $datos = darDatosSubmitted();

    $persona = new Persona();
    $mensaje = $persona->generarMensaje($datos);
?>
<!-- EJERCICIOS 4, 5 Y 6 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="header"></div>
    <div class="container">
        <div class="centrar">
        <h2>RESULTADO</h2>
        <p class="fs-5">
            <?php
            echo nl2br($mensaje);
            ?>
        </p>
        <button type="button" class="btn btn-success fs-5 text-white" onclick="history.back()">Volver</button>
        </div>
    </div>
    <script>
    </script>
</body>
</html>