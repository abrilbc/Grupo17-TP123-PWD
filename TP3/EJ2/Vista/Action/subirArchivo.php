<?php
include_once '../../Utils/funciones.php';
include_once '../../Control/Archivo.php';
include_once '../Estructura/header.php';

$datos = data_submitted();

$archivoController = new Archivo();
$respuesta = $archivoController->subirArchivo($datos);
?>
    <div class="container mb-5"> 
        <div class="p-4 border rounded-3 shadow-sm">
            <h2 class="mb-4">RESULTADO</h2>
            <div class="mb-3">
                <?php
                if ($respuesta !== "" && file_exists($respuesta)) {
                    $contenido = file_get_contents($respuesta);
                    echo "<h4 class='mb-3'>Contenido del Archivo:</h4>";
                    echo "<textarea rows='10' class='form-control' readonly>" . htmlspecialchars($contenido) . "</textarea>";
                } else {
                    echo "<div class='alert alert-danger fs-5'>" . nl2br($respuesta) . "</div>";
                }
                ?>
            </div>
            <div class="d-grid gap-2">
                <button onclick="history.back()" class="btn btn-success fs-5">Volver</button>
            </div>
        </div>
    </div>
</body>
</html>