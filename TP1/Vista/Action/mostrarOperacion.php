

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Operaci&oacute;n</title>
</head>
<body>
<?php
include_once '../../Control/operaciones.php';

$informacion = $_GET;

$rta = operacion($informacion);
echo "El resultado es: " . $rta;
?>
</body>
</html>