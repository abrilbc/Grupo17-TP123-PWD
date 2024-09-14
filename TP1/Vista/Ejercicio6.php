<?php
include_once('./Estructura/header.php');
?>
<div class="container my-5">
    <div class="p-4 border rounded-3 shadow-sm">
        <h2 class="mb-4">CONSIGNA - Ejercicio 6</h2>
        <p class="fs-5">
            Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-estudios primarios, 3-estudios secundarios. Agregar el componente que crea más apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además un mensaje que indique el tipo de estudios que posee y su sexo.
        </p>
        <form action="./Action/action_persona.php" method="post" id="miFormulario-6">
            <label for="nombre" class="fs-5">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control p-2 mb-3 fs-6" required><br>
            <label for="apellido" class="fs-5">Apellido:</label>
            <input type="text" id="apellido" name="apellido" class="form-control p-2 mb-3 fs-6" required><br>
            <label for="edad" class="fs-5">Edad:</label>
            <input type="number" id="edad" name="edad" class="form-control p-2 mb-3 fs-6" required><br>
            <label for="dire" class="fs-5">Dirección:</label>
            <input type="text" id="dire" name="dire" class="form-control p-2 mb-3 fs-6" required><br>
            <label for="radio" class="fs-5">¿Cuál es su nivel de estudios?</label><br>
            <div class="selecciones mb-3">
                <label for="ninguno" class="fs-5"><input type="radio" name="estudios" id="ninguno" value="ninguno"> No tiene estudios</label><br>
                <label for="primario" class="fs-5"><input type="radio" name="estudios" id="primario" value="primario"> Estudios Primarios</label><br>
                <label for="secundario" class="fs-5"><input type="radio" name="estudios" id="secundario" value="secundario"> Estudios secundarios</label><br>
            </div>
            <label for="radio" class="fs-5">Género:</label><br>
            <div class="selecciones mb-3">
                <label for="mujer" class="fs-5"><input type="radio" name="genero" id="mujer" value="mujer"> Mujer</label><br>
                <label for="hombre" class="fs-5"><input type="radio" name="genero" id="hombre" value="hombre"> Hombre</label><br>
                <label for="nobinario" class="fs-5"><input type="radio" name="genero" id="nobinario" value="nobinario"> No binario</label><br>
                <label for="otro" class="fs-5"><input type="radio" name="genero" id="otro" value="otro"> Prefiero no decir</label><br>
            </div>
            <label for="radio" class="fs-5">¿Qué deporte practica?</label><br>
            <div class="d-grid mb-3">
                <label for="futbol" class="fs-5"><input type="checkbox" name="deportes[]" id="futbol" value="futbol"> Fútbol</label>
                <label for="basket" class="fs-5"><input type="checkbox" name="deportes[]" id="basket" value="basket"> Basketball</label>
                <label for="voley" class="fs-5"><input type="checkbox" name="deportes[]" id="voley" value="voley"> Voleyball</label>
                <label for="tenis" class="fs-5"><input type="checkbox" name="deportes[]" id="tenis" value="tenis"> Tenis</label>
                <label for="ningun" class="fs-5"><input type="checkbox" name="deportes[]" id="ningun" value="ningun" class="ningun-deporte"> Ningún deporte</label>
            </div>
            <div class="d-flex">
                <input type="submit" class="m-3 btn btn-success fs-5" value="Enviar">
                <a href="../" class="m-3 btn btn-secondary fs-5">Volver</a>
        </form>
    </div>
</div>
</body>
</html>