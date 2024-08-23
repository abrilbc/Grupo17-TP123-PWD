
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - TP 1</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/js/form_validation"></script>
</head>
<body>
    <div class="header"></div>
    <div class="container">
        <div class="centrar">
        <h2>CONSIGNA</h2>
        <p class="texto-normal">
        Ejercicio 2
        Seleccionar una de las librerias e implementar la validación de los siguientes ejercicios:
        Realizar la validación de los formularios creados en el TP 2: HTML-PHP. Chequear
        que se hayan cargado todos los datos necesarios antes de ser enviados al servidor
        y que sean del tipo correcto.
        </p>
        <h3>INFORMACIÓN PERSONAL</h3>
        <form action="Action/action_ej1.php" method="post" name="miForm" id="miForm" onSubmit="return validar()">
            <label for="number">Ingrese el número a comparar </label>
            <input type="text" id="number" name="number" class="form-input" required>
            <input type="submit" class="btn">
        </form>
        </div>
    </div>
    <script>
        function validar() {
            let retorna = false
            let num = $('#number').val()
            if ($.isNumeric(num)) {
                retorna = true
            } else {
                alert("Por favor, ingrese un número válido.")
            }
            return retorna
        }
    </script>
</body>
</html>