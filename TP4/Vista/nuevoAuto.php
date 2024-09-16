<?php
include_once('../Vista/Estructura/header.php');
?>
<main class="container">
    <div class="card col-12 text-center shadow">
        <div class="container text-center">
            <div class="col d-flex text-center flex-column align-items-center justify-content-center p-5">

                <form onsubmit="return validar()" action="./Action/actionNuevoAuto.php" class="d-flex flex-column gap-3" style="width:80%" method="POST" id="miForm">
                    <h3>Agregar un auto nuevo</h3>

                    <div class="w-100 text-start">
                        <label for="Patente" class="fs-5">Patente</label>
                        <input class="form-control p-3" type="text" id="Patente" name="Patente" placeholder="ej. ADC 153">
                        <span class="text-danger" id="autoPatente"></span>
                    </div>

                    <div class="w-100 text-start">
                        <label for="Marca" class="fs-5">Marca</label>
                        <input class="form-control p-3" type="text" id="Marca" name="Marca" placeholder="ej. Honda">
                        <span class="text-danger" id="autoMarca"></span>
                    </div>

                    <!-- Modelo -->
                    <div class="w-100 text-start">
                        <label for="Modelo" class="fs-5">Modelo</label>
                        <input class="form-control p-3" type="text" id="Modelo" name="Modelo" placeholder="Año (ej. 2018)">
                        <span class="text-danger" id="autoModelo"></span>
                    </div>

                    <div class="w-100 text-start">
                        <label for="DniDuenio" class="fs-5">DNI del Dueño</label>
                        <input class="form-control p-3" type="text" id="DniDuenio" name="DniDuenio" placeholder="12345678">
                        <span class="text-danger" id="dniPersona"></span>
                    </div>

                    <div class="d-flex flex-column align-items-center">
                        <input class="btn btn-success p-2 fs-5 m-2 w-50" type="submit" value="Agregar">
                        <a href="../" class="btn btn-secondary fs-5 w-50 m-2">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<script src="./Js/jquery-v3_7_1.js"></script>
<script src="./Js/validacionNuevoAuto1.js"></script>
</body>

</html>
