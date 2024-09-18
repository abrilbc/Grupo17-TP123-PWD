<?php
include_once 'Estructura/header.php';
include_once 'Estructura/menu/menu.php';
?>
<main class="container">
    <div class="text-white">
        <div class="d-flex justify-content-center align-items-center" style="height: 450px;">
            <div class="shadow bg-light p-4" style="width: 100%; max-width: 600px">
                <h3 class="text-center" style="color:black">Buscar Auto por código de Patente</h3>
                <form onsubmit="return validar()" action="./Action/actionBuscarAuto.php" method="POST" id="form">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg rounded" placeholder="Ej: ADC 152" id="Patente" name="Patente">
                        <button class="btn btn-success text-white btn-lg" type="submit">Buscar</button>
                    </div>
                    <span class="text-danger" id="msjErrorPatente"></span>
                </form>
                <div class="w-100 d-flex justify-content-center">
                    <a onclick="history.back()" class="btn btn-secondary fs-5">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="Js/jquery-v3_7_1.js"></script>
<script src="Js/validarPatente1.js"></script>
</body>

</html>