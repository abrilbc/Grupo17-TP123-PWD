<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - TP 1</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="TP1/Utils/JQuery/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="header"></div>
    <div class="container">
        <div class="centrar">
        <h2>CONSIGNA</h2>
        <p class="texto-normal">
        Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programación Web Dinámica, por cada día de la semana. Enviar los datos del formulario por el método Get a otra página php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana.
        </p>
        
        <form action="Action/action_ej2.php" method="get" id="miFormulario" onclick="">
            <h4>Ingrese las horas de cursada de PWD por día de semana:</h4>
            <label for="lunes">Lunes</label>
            <input type="number" name="lunes" id="lunes" class="form-input" required>
            <label for="martes">Martes</label>
            <input type="number" name="martes" id="martes" class="form-input" required>
            <label for="miercoles">Miercoles</label>
            <input type="number" name="miercoles" id="miercoles" class="form-input" required>
            <label for="jueves">Jueves</label>
            <input type="number" name="jueves" id="jueves" class="form-input" required>
            <label for="viernes">Viernes</label>
            <input type="number" name="viernes" id="viernes" class="form-input" required>
            <input type="submit" class="btn">
        </form>
        </div>

    </div>
    <script>
        function validar() {
            $('input[type="number"]').each(function() {
                var valor = $(this).val();
                if (!$.isNumeric(valor) || valor < 0) {
                    mensajes.push("Por favor, ingrese un número válido y no negativo en " + $(this).prev('label').text());
                    valid = false;
                }
            });

            if (mensajes.length > 0) {
                alert(mensajes.join("\n"));
            }

            return valid;
        }

        }
    </script>
</body>
</html>