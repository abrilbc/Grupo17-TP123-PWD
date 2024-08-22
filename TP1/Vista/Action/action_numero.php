<?php
include_once '../../Control/Numero.php';

$informacion = $_POST['number'];

$objNumero = new Numero($informacion);

$resultado = $objNumero->comparar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Ingresado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    echo $resultado;
    ?>
</body>
</html>