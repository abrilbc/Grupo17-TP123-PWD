<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Mark</title>
</head>
<body>
    <form action="./Action/mostrar.php" method="GET">
    <label for="">EDAD: </label>
    <input type="text" name="edad" id="edad"> <br>
    <label for="">¿Sos Estudiante?</label> <br>
    <input type="radio" name="estudiante" id="estudiante" value="si"> Si <br>
    <input type="radio" name="estudiante" id="estudiante" value="no"> No  <br>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
    </form>
</body>
</html>