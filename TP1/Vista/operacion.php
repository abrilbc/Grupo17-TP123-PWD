<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <form action="./Action/mostrarOperacion.php" method="get">
        <label for="numero1" required>Numero 1: </label>
        <input type="text" name="numero1" id="numero1"> <br>
        <label for="numero2" required>Numero 2: </label>
        <input type="text" name="numero2" id="numero2"> <br>
        <select name="operacion" id="operacion">
            <option value="">Seleccione una Operación</option>
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACIÓN</option>
        </select>
        <input type="submit" value="enviar">
    </form>
</body>
</html>