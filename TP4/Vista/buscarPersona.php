<?php
include_once 'Estructura/header.php';
?>

<main class="container">
    <div class="">
        <div class="shadow d-flex justify-content-center align-items-center" style="height: 450px;">
            <div class=" ">
                <h3 class="text-center">Buscar persona por DNI</h3>
                <form onsubmit="return validar()" action="./Action/actionBuscarPersona.php" method="POST" id="form">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg rounded" placeholder="Ej: 12345678"
                            id="NroDni" name="NroDni">
                        <span class="text-danger" id="msjErrorDNI"></span>
                    </div>
                    <div class="d-flex justify-content-around w-100">
                        <button class="btn btn-success fs-5" type="submit">Buscar</button>
                        <a onclick="history.back()" class="btn btn-dark fs-5">Volver</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</main>
<script src="./Js/validarBusquedaPersona.js"></script>
</body>

</html>