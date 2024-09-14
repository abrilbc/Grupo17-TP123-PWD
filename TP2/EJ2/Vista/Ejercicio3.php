<?php
include_once('./Estructura/header.php');
?>
<div class="container mb-5">
    <div class="p-4 border rounded-3 shadow-sm">
        <h2>CONSIGNA - Ejercicio 3</h2>
        <p class="fs-5">
            Crear una página php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
            Cambiar el método Post por Get y analizar las diferencias.
        </p>
        <div class="mt-5">
            <form action="./Action/action_ej3.php" method="post" id="miFormulario-3" class="w-50 mx-auto">
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
                    <a href="../" class="mt-3 btn btn-secondary fs-5 w-100 mb-2">Volver</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>