<?php
include_once 'Estructura/header.php';
?>
<main class="container">
    <div class="col-12 text-center w-100">
        <div class="container text-center w-50 shadow">
            <div class="col d-flex text-center flex-column align-items-center justify-content-center p-5">

                <form onsubmit="return validar()" action="./Action/actionCambioDuenio.php" class="d-flex flex-column gap-3" style="width:80%" method="POST" id="miFormulario">
                    <h3 class="pt-3">Cambiar Dueño</h3>

                    <label for="Patente" class="fs-5 fw-bold">Patente del vehículo</label>
                    <input class="form-control p-3" type="text" id="Patente" name="Patente" placeholder="Ej: ABC1234">
                    <span class="text-danger" id="aPatente"></span>

                    <label for="DniDuenio" class="fs-5 fw-bold">DNI del Dueño</label>
                    <input class="form-control p-3" type="text" id="DniDuenio" name="DniDuenio" placeholder="Ej: 12345678">
                    <span class="text-danger" id="personaDNI"></span>
                    <div class="w-100 d-flex flex-column gap-3 align-items-center">
                        <input class="btn btn-success p-2 w-25 fs-5" type="submit" value="Cambiar">
                        <a href="../" class="btn btn-secondary fs-5 w-25">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script src="./Js/validarCambioDuenio.js"></script>
</body>

</html>
