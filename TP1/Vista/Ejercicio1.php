<?php
include_once '../Control/Numero.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="TP1/Utils/JQuery/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="header"></div>
    <div class="container">
        <div class="centrar">
        <h1>CONSIGNA</h1>
        <p class="texto-normal">
        Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script 
        –vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. 
        Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.
        </p>
        <form class="centrar" action="./Action/action_numero.php" method="post" id="miFormulario">
            <label for="number">Ingrese el número a comparar </label>
            <input type="text" id="number" name="number" class="input-text" required>
            <span id="error" style="color:red; display:none;">Por favor, ingresa un número válido.</span>
            <input type="submit">
        </form>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('#miFormulario').on('submit', function(e) {
            var numero = $('#number').val();

            // Validar si el valor es un número
            if (!$.isNumeric(numero)) {
                e.preventDefault(); // Prevenir el envío del formulario si el número no es válido
                $('#error').show(); // Mostrar mensaje de error
            } else {
            $('#error').hide(); // Ocultar mensaje de error
            // Permitir el envío del formulario si el número es válido
            }
            });
        });
    </script>
</body>
</html>