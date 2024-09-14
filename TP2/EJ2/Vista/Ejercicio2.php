<?php
include_once('./Estructura/header.php');
?>
<div class="container mb-5">
    <div class="p-4 border rounded-3 shadow-sm">
        <h2>CONSIGNA - Ejercicio 2</h2>
        <p class="fs-5">
            Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programación Web Dinámica, por cada día de la semana. Enviar los datos del formulario por el método Get a otra página php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana.
        </p>
        
        <form action="./Action/action_ej2.php" method="get" id="miFormulario-2" class="w-50 mx-auto">
            <h4 class="mb-4">Ingrese las horas de cursada de PWD por día de semana: <br>(1h a 24hs permitidas)</h4>
            
            <div class="mb-3">
                <label for="lunes" class="form-label fs-5">Lunes</label>
                <input type="number" name="lunes" id="lunes" class="form-control p-2" required>
            </div>

            <div class="mb-3">
                <label for="martes" class="form-label fs-5">Martes</label>
                <input type="number" name="martes" id="martes" class="form-control p-2" required>
            </div>

            <div class="mb-3">
                <label for="miercoles" class="form-label fs-5">Miércoles</label>
                <input type="number" name="miercoles" id="miercoles" class="form-control p-2" required>
            </div>

            <div class="mb-3">
                <label for="jueves" class="form-label fs-5">Jueves</label>
                <input type="number" name="jueves" id="jueves" class="form-control p-2" required>
            </div>

            <div class="mb-3">
                <label for="viernes" class="form-label fs-5">Viernes</label>
                <input type="number" name="viernes" id="viernes" class="form-control p-2" required>
            </div>

            <input type="submit" class="btn btn-success w-100 fs-5" value="Enviar">
            <a href="../" class="mt-3 btn btn-secondary fs-5 w-100 mb-2">Volver</a>
        </form>
    </div>
</div>
</body>
</html>