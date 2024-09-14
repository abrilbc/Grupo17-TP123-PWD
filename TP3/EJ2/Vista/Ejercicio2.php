<?php 
include_once './Estructura/header.php';
?>
    <div class="container mb-5"> 
        <div class="p-4 border rounded-3 shadow-sm">
            <h2>CONSIGNA</h2>
            <p class="fs-5">
                Ejercicio 2 - Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
                que el tipo esperado sea <span class="fw-bold">txt</span> (texto plano), si es correcto deberá abrir el archivo y mostrar su
                contenido en un textarea.
                <br>
                (OBS: Referencia a funciones para trabajar con archivos: 
                <a href="http://php.net/manual/en/ref.filesystem.php" target="_blank" class="link-primary">documentación oficial</a>)
            </p>
            <div class="mt-5">
                <form action="./Action/subirArchivo.php" method="post" id="miFormulario" enctype="multipart/form-data" class="w-50 mx-auto">
                    <div class="mb-3">
                        <label for="archivo" class="fs-4 form-label">Ingrese el archivo <span class="fw-bold">.txt</span> para visualizarlo:</label>
                        <input type="file" name="archivo" id="archivo" accept=".txt" class="form-control p-2 fs-5" required>
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-success fs-5" value="Subir y visualizar">
                        <a href="../../" class="mt-3 btn btn-secondary fs-5 w-100 mb-2">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>