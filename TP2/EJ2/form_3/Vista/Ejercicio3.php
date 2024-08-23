<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - TP 1</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="header"></div>
    <div class="container">
        <div class="centrar">
        <h2>CONSIGNA</h2>
        <p class="texto-normal">
        Crear una página php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
        Cambiar el método Post por Get y analizar las diferencias.
        </p>
        <form action="./Action/action_ej3.php" method="post" id="miFormulario" onSubmit="validar()">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-input" required><br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" class="form-input" required><br>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" class="form-input" required><br>
            <label for="dire">Direcci&oacute;n</label>
            <input type="text" id="dire" name="dire" class="form-input" required><br>
            <input type="submit" class="btn">
        </form>
        </div>
    </div>
    <script>
        function validar() {
            let validacion = true;
            const nameRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
            let nombre = $("#nombre").val().trim()
            let apellido = $("#apellido").val().trim()
            let edad = $("#edad").val().trim()

            if(nombre == "" || !nameRegex.test(nombre).trim()) {
                validacion = false;
                alert("Nombre ingresado no válido")
            }
            if (apellido == "" || !nameRegex.test(apellido).trim()) {
                validacion = false;
                alert("Apellido ingresado no válido")
            }
            if (edad == "" || edad < 0 || edad > 105) {
                validacion =false
                alert("Edad ingresada no válida")
            }
        }
    </script>
</body>
</html>