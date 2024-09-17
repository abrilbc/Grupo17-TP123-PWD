<?php
include_once 'Estructura/header.php';
?>

<main class="container " style="height:555px">
    <div class="d-flex flex-column align-items-center">
        <div class="shadow w-50 d-flex justify-content-center align-items-center rounded" style="height: 250px;">
            <div class=" ">
                <h3 class="text-center">Buscar persona por DNI</h3>
                <form onsubmit="return validar()" action="./Action/actionBuscarPersona.php" method="POST" id="form">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg rounded" placeholder="Ej: 12345678"
                            id="NroDni" name="NroDni">
                    </div>
                    <span class="text-danger" id="msjErrorDNI"></span>
                    <div class="d-flex flex-column align-items-center w-100 gap-3">
                        <button class="btn btn-success fs-5 w-50" type="submit">Buscar</button>
                        <a href="../" class="btn btn-secondary w-50 fs-5">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script src="./Js/jquery-v3_7_1.js"></script>
<script src="./Js/validarBusquedaPersona1.js"></script>
</body>

</html>