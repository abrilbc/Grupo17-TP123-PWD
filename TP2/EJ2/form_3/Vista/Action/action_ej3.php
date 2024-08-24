<?php
include_once '../../Control/Persona.php';
include_once '../../Utils/funciones.php';
    $datos = darDatosSubmitted();
    $persona = new Persona();
    $mensaje = $persona->generarPersonaSimplificado($datos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="TP1/Utils/JQuery/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="header"></div>
    <div class="container">
        <div class="centrar">
        <h2>RESULTADO</h2>
        <p class="texto-normal">
            <?php
            echo nl2br($mensaje)
            ?>
        </p>
        </div>
    </div>
    <script>
    </script>
</body>
</html>