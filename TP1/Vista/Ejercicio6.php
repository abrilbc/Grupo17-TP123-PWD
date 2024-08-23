<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - TP 1</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="TP1/Utils/JQuery/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="header"></div>
    <div class="container">
        <div class="centrar">
        <h2>CONSIGNA</h2>
        <p class="texto-normal">
        Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-estudios primarios, 3-estudios secundarios. Agregar el componente que crea más apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además un mensaje que indique el tipo de estudios que posee y su sexo.
        </p>
        <form action="./Action/action_persona.php" method="post" id="miFormulario">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required><br>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required><br>
            <label for="dire">Direcci&oacute;n</label>
            <input type="text" id="dire" name="dire" required><br>
            <label for="radio">¿Cuál es su nivel de estudios?</label><br>
            <div class="selecciones">
            <label for="ninguno"><input type="radio" name="estudios" id="ninguno" value="ninguno">No tiene estudios</label><br>
            <label for="primario"><input type="radio" name="estudios" id="primario" value="primario">Estudios Primarios</label><br>
            <label for="secundario"><input type="radio" name="estudios" id="secundario" value="secundario">Estudios secundarios</label><br>
            </div>
            <label for="radio">Genero:</label><br>
            <div class="selecciones">
            <label for="mujer"><input type="radio" name="genero" id="mujer" value="mujer">Mujer</label><br>
            <label for="hombre"><input type="radio" name="genero" id="hombre" value="hombre">Hombre</label><br>
            <label for="nobinario"><input type="radio" name="genero" id="nobinario" value="nobinario">No binario</label><br>
            <label for="otro"><input type="radio" name="genero" id="otro" value="otro">Prefiero no decir</label><br>
            </div>
            <label for="radio">¿Qué deporte practica?</label>
            <div class="selecciones">
                <label for="futbol"><input type="checkbox" name="deportes[]" id="futbol" value="futbol">Futbol</label>
                <label for="basket"><input type="checkbox" name="deportes[]" id="basket" value="basket">Basketball</label>
                <label for="voley"><input type="checkbox" name="deportes[]" id="voley" value="voley">Voleyball</label>
                <label for="tenis"><input type="checkbox" name="deportes[]" id="tenis" value="tenis">Tenis</label>
            </div>
            <input type="submit" class="btn">
        </form>
        </div>
    </div>
    <script>
    </script>
</body>
</html>