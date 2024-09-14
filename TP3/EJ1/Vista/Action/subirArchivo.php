<?php
include_once '../../Utils/funciones.php';
include_once '../../Control/Archivo.php';
include_once '../Estructura/header.php';
$datos = data_submitted();

$objArchivo = new Archivo();
$response = $objArchivo->subirArchivo($datos);
?>
    <div class="container mb-5"> 
        <div class="p-4 border rounded-3 shadow-sm">
            <h2>RESULTADO</h2>
            <p class="fs-5 text-center">
                <?php
                echo $response;
                ?>
            </p>
            <div class="d-flex justify-content-center">
                <button onclick="history.back()" class="btn btn-secondary fs-5 w-50 mb-2">Volver</button>
            </div>
        </div>
    </div>
</body>
</html>
