<?php
include_once 'Estructura/header.php';
?>
<main class="container">
    <div class="card col-12 text-center">
        <div class="container text-center">
            <div class="col d-flex text-center flex-column align-items-center justify-content-center p-5 ">

                <form onsubmit="return validar()" action="./Action/actionCambioDuenio.php" class="d-flex flex-column gap-3" style="width:80%" method="POST" id="miFormulario">
                    <h3>Cambiar Dueño</h3>

                    <input class="form-control p-3" type="text" id="Patente" name="Patente" placeholder="Patente del vehículo">
                    <span class="text-danger" id="aPatente"></span>

                    <input class="form-control p-3" type="text" id="DniDuenio" name="DniDuenio" placeholder="DNI del Dueño">
                    <span class="text-danger" id="personaDNI"></span>

                    <input class="btn btn-success p-2" type="submit" style="width:20%" value="Cambiar">
                    <a onclick="history.back()" class="btn btn-success fs-5 w-50">Volver</a>
                </form>
            </div>
        </div>
    </div>
</main>
<script src="./Js/validarCambioDuenio.js"></script>
</body>

</html>