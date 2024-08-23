<?php
include_once '../../Control/Entrada.php';
include_once '../../Utils/funciones.php';

$datos = darDatosSubmitted();
$objEntrada = new Entrada($datos);

$precio = $objEntrada->getPrecio();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="TP1/Utils/JQuery/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="header"></div>
    <div class="container">
        <div class="centrar">
        <h2>CONSIGNA</h2>
        <p class="texto-normal">
        La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente. Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una página web. Si es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. Agregar un botón para limpiar el formulario y volver a consultar.
        </p>
        <form action="./Action/action_ej8.php" method="post" id="miFormulario">
            <input type="number" id="edad" name="edad" disabled><br>
            <select name="estudiante" id="estudiante" disabled></select>
            <h3>El precio de su entrada sería de: </h3>
            <p class="texto-normal">
                <span>
               <?php
               echo "$" . $precio;
                ?> 
                </span>
            </p>
            
            <a href="TP1/Vista/Ejercicio8.php"><button class="btn">Volver</button></a>
        </form>
        </div>
    </div>
    <script>
    </script>
</body>
</html>