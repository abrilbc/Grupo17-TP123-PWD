<?php
include_once('./Estructura/header.php');
?>
<div class="container mb-5">
    <div class="p-4 border rounded-3 shadow-sm centrar">
        <h2 class="mb-4">CONSIGNA - Ejercicio 8</h2>
        <p class="texto-normal mb-5 fs-5">
            La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente. Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una página web. Si es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. Agregar un botón para limpiar el formulario y volver a consultar.
        </p>
        <form action="./Action/action_ej8.php" method="post" id="miFormulario" class="w-50 mx-auto">
            <div class="mb-3">
                <label for="edad" class="form-label fs-5">Edad:</label>
                <input type="number" id="edad" name="edad" class="form-control p-2" required>
            </div>
            <div class="mb-3">
                <label for="estudiante" class="form-label fs-5">¿Es estudiante?</label>
                <select name="estudiante" id="estudiante" class="form-select p-2 fs-5" required>
                    <option value="">Seleccionar</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="d-grid">
                <input type="submit" class="mt-3 btn btn-success fs-5" value="Calcular">
                <input type="reset" class="mt-3 btn btn-dark fs-5" value="Limpiar">
                <a href="../" class="mt-3 btn btn-secondary fs-5 w-100 mb-2">Volver</a>
            </div>
        </form>
    </div>
</div>

    <script>
    </script>
</body>
</html>