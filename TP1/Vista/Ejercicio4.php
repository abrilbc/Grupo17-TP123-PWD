<?php
include_once('./Estructura/header.php');
?>
<div class="container mb-5"> 
    <div class="p-4 border rounded-3 shadow-sm">
        <h2>CONSIGNA - Ejercicio 4</h2>
        <p class="fs-5">
            Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar esos datos a otra página en donde se muestren mensajes distintos dependiendo si la persona es mayor de edad o no; (si la edad es mayor o igual a 18).
            Enviar los datos usando el método GET y luego probar de modificar los datos directamente en la url para ver los dos posibles mensajes.
        </p>
        <div class="mt-5">
            <form action="./Action/action_persona.php" method="post" id="miFormulario-4" class="w-50 mx-auto">
                <div class="mb-3">
                    <label for="nombre" class="fs-4 form-label">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control p-2 fs-5" required>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="fs-4 form-label">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" class="form-control p-2 fs-5" required>
                </div>
                <div class="mb-3">
                    <label for="edad" class="fs-4 form-label">Edad:</label>
                    <input type="number" id="edad" name="edad" class="form-control p-2 fs-5" required>
                </div>
                <div class="mb-3">
                    <label for="dire" class="fs-4 form-label">Dirección:</label>
                    <input type="text" id="dire" name="dire" class="form-control p-2 fs-5" required>
                </div>
                <div class="d-grid">
                    <input type="submit" class="btn btn-success fs-5" value="Enviar">
                </div>
            </form>
            <div class="d-flex justify-content-center">
                <a href="../" class="mt-3 btn btn-secondary fs-5 w-50 mb-2">Volver</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>