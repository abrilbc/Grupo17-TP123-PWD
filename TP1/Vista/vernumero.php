<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
<h1>Consigna: <br></h1>
<?php 
    include_once '../../Control/Numero.php';
    
    $informacionForm = $_POST;
    $objNumero = new Numero();
    $resultado = $objNumero->signo($informacionForm);

    echo $resultado;
?>

<a href="../Formulario1.php"><button>Volver</button></a>
</body>
</html>

    