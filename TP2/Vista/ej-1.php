
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - TP 1</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="../Utils/JQuery/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="header"></div>
    <div class="container">
        <div class="centrar">
        <h2>CONSIGNA</h2>
        <p class="texto-normal">
        Investigue y pruebe la validación de formularios usando alguna librería o framework
        javaScript (JQuery, Mootools, Dojo, Prototype, etc).
        </p>
        <form class="centrar" action="./Action/action_ej1.php" method="post" id="miFormulario">
            <label for="number">Ingrese el número a comparar </label>
            <input type="number" id="number" name="number" class="input-text" required>
            <input type="submit" class="btn">
        </form>
        </div>
    </div>
    <script>
    </script>
</body>
</html>