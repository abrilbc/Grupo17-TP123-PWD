
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - TP 1</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="header"></div>
    <div class="container">
        <div class="centrar">
        <h2>CONSIGNA</h2>
        <p class="texto-normal">
        Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script 
        –vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. 
        Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.
        </p>
        <form action="./Action/action_ej1.php" method="post" id="miFormulario">
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