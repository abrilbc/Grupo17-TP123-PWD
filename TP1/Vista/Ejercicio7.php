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
        <h2>CONSIGNA</h2>
        <p class="texto-normal">
        Crear una página con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del formulario:
        </p>
        <form action="./Action/action_ej7.php" method="post" id="miFormulario">
            <label for="num1">Ingrese el primer número: </label>
            <input type="number" id="num1" name="num1" required>
            <label for="num2">Ingrese el segundo número: </label>
            <input type="number" id="num2" name="num2" required>
            <select name="operacion" id="operacion" required>
                <option value="">Operación</option>
                <option value="suma">SUMA</option>
                <option value="resta">RESTA</option>
                <option value="multiplicacion">MULTIPLICACION</option>
            </select>
            <input type="submit" class="btn">
        </form>
        </div>
    </div>
    <script>
    </script>
</body>
</html>