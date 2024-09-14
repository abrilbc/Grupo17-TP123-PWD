<?php
include_once('./Estructura/header.php');
?>
<div class="container mb-5">
    <div class="p-4 border rounded-3 shadow-sm centrar">
        <h2 class="mb-4">CONSIGNA - Ejercicio 7</h2>
        <p class="texto-normal mb-5 fs-5">
            Crear una página con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del formulario:
        </p>
        <form action="./Action/action_ej7.php" method="post" id="miFormulario-7" class="w-50 mx-auto">
            <div class="mb-3">
                <label for="num1" class="form-label fs-5">Ingrese el primer número:</label>
                <input type="number" id="num1" name="num1" class="form-control p-2" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label fs-5">Ingrese el segundo número:</label>
                <input type="number" id="num2" name="num2" class="form-control p-2" required>
            </div>
            <div class="mb-4">
                <label for="operacion" class="form-label fs-5">Operación:</label>
                <select name="operacion" id="operacion" class="form-select p-2 fs-5" required>
                    <option value="">Seleccione una operación</option>
                    <option value="suma">SUMA</option>
                    <option value="resta">RESTA</option>
                    <option value="multiplicacion">MULTIPLICACIÓN</option>
                </select>
            </div>
            <div class="d-flex align-items-center flex-column">
                <input type="submit" class="mt-3 btn btn-success fs-5 w-25" value="Calcular">
                <a href="../" class="mt-3 btn btn-secondary fs-5 w-25 mb-2">Volver</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>