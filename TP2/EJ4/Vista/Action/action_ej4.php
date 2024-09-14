<?php
include_once '../../Utils/funciones.php';
include_once '../../Control/Pelicula.php';
include_once '../Estructura/header.php';

$datos = darDatosSubmitted();

$objPelicula = new Pelicula($datos);

?>
    <div class="d-flex justify-content-center align-items-center bg-white" style="height: 555px">
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
            <button onclick="history.back()" class="text-decoration-none text-reset fw-semibold"><div class="position-absolute top-0 end-0 m-3 p-1 pe-2 ps-2 btn btn-success">X</div></button>
        </div>
    </div>
</body>
</html>