<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - TP 1</title>
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
        Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar esos datos a otra página en donde se muestren mensajes distintos dependiendo si la persona es mayor de edad o no; (si la edad es mayor o igual a 18).
        Enviar los datos usando el método GET y luego probar de modificar los datos directamente en la url para ver los dos posibles mensajes.
        </p>
        <form action="./Action/action_persona.php" method="post" id="miFormulario" onSubmit="return validar()">
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
            let nombre = $("#nombre").val().trim();
            let apellido = $("#apellido").val().trim();
            let edad = $("#edad").val();

            if (nombre === "" || !nameRegex.test(nombre)) {
                validacion = false;
                alert("Nombre ingresado no válido");
            }
            if (apellido === "" || !nameRegex.test(apellido)) {
                validacion = false;
                alert("Apellido ingresado no válido");
            }
            if (edad === "" || edad < 0 || edad > 105) {
                validacion = false;
                alert("Edad ingresada no válida");
            }
            return validacion;
        }
    </script>
</body>
</html>