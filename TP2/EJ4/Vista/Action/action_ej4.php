<?php
include_once '../../Control/Utils/funciones.php';
include_once '../../Control/Pelicula.php';

$datos = darDatosSubmitted();

$objPelicula = new Pelicula($datos);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - TP 2</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="ff-Jost">
    <div class="d-flex justify-content-center align-items-center w-100 vh-100 bg-white">
        <div class="bg-light rounded-2 ps-4 p-5 w-50 shadow position-relative">
            <h2 class="text-info">La pelicula introducida es</h2>
            <div class="text-success fs-5 ">
                <strong>T&iacute;tulo:</strong> <?php echo $objPelicula->getTitulo() ?> <br>
                <strong>Actores:</strong> <?php echo $objPelicula->getActores() ?> <br> 
                <strong>Director:</strong> <?php echo $objPelicula->getDirector() ?> <br>
                <strong>Gui&oacute;n:</strong> <?php echo $objPelicula->getGuion() ?> <br>
                <strong>Producci&oacute;n:</strong> <?php echo $objPelicula->getProduccion() ?> <br>
                <strong>A&ntilde;o:</strong> <?php echo $objPelicula->getAnio() ?> <br>
                <strong>Nacionalidad:</strong> <?php echo $objPelicula->getNacionalidad() ?> <br>
                <strong>G&eacute;nero:</strong> <?php echo $objPelicula->getGenero() ?> <br>
                <strong>Duraci&oacute;n:</strong> <?php echo $objPelicula->getDuracion() ?> <br>
                <strong>Restriccion de edad:</strong> <?php echo $objPelicula->getRestEdad() ?> <br>
                <strong>Sinopsis:</strong> <?php echo $objPelicula->getSinopsis() ?> <br>
            </div>
            <a href="../Ej4.php" class="text-decoration-none text-reset fw-semibold"><div class="position-absolute top-0 end-0 m-3 p-1 pe-2 ps-2">X</div></a>
        </div>
    </div>
</body>
</html>