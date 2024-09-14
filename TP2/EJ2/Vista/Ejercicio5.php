<?php
include_once('./Estructura/header.php');
?>
<div class="container mb-5">
    <div class="p-4 border rounded-3 shadow-sm">
        <h2 class="mb-4">CONSIGNA - Ejercicio 5</h2>
        <p class="mb-5 fs-5">
            Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-estudios primarios, 3-estudios secundarios. Agregar el componente que crea más apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además un mensaje que indique el tipo de estudios que posee y su sexo.
        </p>
        <form action="./Action/action_persona.php" method="post" id="miFormulario-5" class="w-100 mx-auto">
            <div class="mb-3">
                <label for="nombre" class="form-label fs-5">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control p-2" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label fs-5">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control p-2" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label fs-5">Edad:</label>
                <input type="number" id="edad" name="edad" class="form-control p-2" required>
            </div>
            <div class="mb-3">
                <label for="dire" class="form-label fs-5">Dirección:</label>
                <input type="text" id="dire" name="dire" class="form-control p-2" required>
            </div>
            <div class="d-flex justify-content-between mb-4">
                <div class="me-4 w-50 p-4">
                    <label for="radio" class="form-label fs-5">¿Cuál es su nivel de estudios?</label><br>
                    <div class="selecciones">
                        <label for="ninguno" class="fs-5"><input type="radio" name="estudios" id="ninguno" value="ninguno"> No tiene estudios</label><br>
                        <label for="primario" class="fs-5"><input type="radio" name="estudios" id="primario" value="primario"> Estudios Primarios</label><br>
                        <label for="secundario" class="fs-5"><input type="radio" name="estudios" id="secundario" value="secundario"> Estudios secundarios</label><br>
                    </div>
                </div>
                <div class="w-50 p-4">
                    <label for="radio" class="form-label fs-5">Género:</label><br>
                    <div class="selecciones">
                        <label for="mujer" class="fs-5"><input type="radio" name="genero" id="mujer" value="mujer"> Mujer</label><br>
                        <label for="hombre" class="fs-5"><input type="radio" name="genero" id="hombre" value="hombre"> Hombre</label><br>
                        <label for="nobinario" class="fs-5"><input type="radio" name="genero" id="nobinario" value="nobinario"> No binario</label><br>
                        <label for="otro" class="fs-5"><input type="radio" name="genero" id="otro" value="otro"> Prefiero no decir</label><br>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <input type="submit" class="m-3 btn btn-success fs-5" value="Enviar">
                <a href="../" class="m-3 btn btn-secondary fs-5">Volver</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>