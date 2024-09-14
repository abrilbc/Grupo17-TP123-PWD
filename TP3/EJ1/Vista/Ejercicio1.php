<?php
include_once('./Estructura/header.php');
?>
<div class="container mb-5"> 
    <div class="p-4 border rounded-3 shadow-sm">
        <h2>CONSIGNA - Ejercicio 1</h2>
        <p class="fs-5">
            Crear un formulario HTML que permita subir un archivo. En el servidor se deberá controlar, antes de guardar el archivo, que los tipos válidos son <span class="text-primary">.doc</span> o <span class="text-primary">.pdf</span> y además el tamaño máximo permitido es de 2 MB. En caso de que se cumplan las condiciones, mostrar un enlace al archivo cargado. En caso contrario, mostrar un mensaje indicando el problema.
        </p>
        <div class="mt-5">
            <form action="./Action/subirArchivo.php" method="post" id="miFormulario" enctype="multipart/form-data" class="w-50 mx-auto">
                <div class="mb-3">
                    <label for="archivo" class="fs-4 form-label">Ingrese el archivo <span class="text-primary">.doc</span> o <span class="text-primary">.pdf</span>:</label>
                    <input type="file" name="archivo" id="archivo" accept=".doc,.pdf" class="form-control p-2 fs-5" required>
                </div>
                <div class="d-grid">
                    <input type="submit" class="btn btn-success fs-5" value="Subir archivo">
                </div>
            </form>
            <div class="d-flex justify-content-center">
            <a href="../../" class="mt-3 btn btn-secondary fs-5 w-50 mb-2">Volver</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
