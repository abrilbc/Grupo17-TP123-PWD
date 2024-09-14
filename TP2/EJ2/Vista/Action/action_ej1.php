<?php

include_once '../../Control/Numero.php';
include_once '../../Utils/funciones.php';

$informacion = darDatosSubmitted();

$objNumero = new Numero($informacion);

$resultado = $objNumero->comparar();
include '../Estructura/header.php';
?>
    <div class="container">
        <div class="centrar pt-4">
            <h1>RESULTADO</h1>
            <p class="fs-5">
                <?php
                echo $resultado;
                ?>
            </p>
            <button type="button" class="mt-2 btn btn-success fs-5 text-white" onclick="history.back()">Volver</button>
        </div>
    </div>
    <script>
    </script>
</body>
</html>