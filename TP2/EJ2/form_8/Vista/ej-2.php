
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - TP 1</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="..\Utils\JQuery\jquery-validation-1.19.1\dist\jquery.validate.min.js"></script>
    <script src="assets/js/form_validation"></script>
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
        <h3>INFORMACIÓN PERSONAL</h3>
        <form class="centrar" action="" method="post" name="miForm" id="miForm">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" class="form-input">
            <label for="apellido">Apellido: </label>
            <input type="text" name="apellido" id="apellido" class="form-input">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" class="form-input" placeholder="john@doe.com">
            <label for="edad">Edad: </label>
            <input type="number" name="edad" id="edad" class="form-input">
            <label for="contrasenia">Password</label>
            <input type="password" name="contrasenia" class="form-input" id="contrasenia" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"/>
            <input type="submit" class="btn">
        </form>
        </div>
    </div>
    <script>
    </script>
</body>
</html>