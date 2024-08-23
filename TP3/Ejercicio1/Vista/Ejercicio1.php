
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - TP 3</title>
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
        Ejercicio 1 - Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
        controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
        máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
        cargado, en caso contrario mostrar un mensaje indicando el problema.
        </p>
        <form action="./Action/subirArchivo.php" method="post" id="miFormulario" enctype="multipart/form-data">
            <label for="archivo">Ingrese el archivo <span>doc</span> o <span>pdf</span>:</label>
            <input type="file" name="archivo" id="archivo" required>
        <input type="submit" class="btn">
        </form>
        </div>

    </div>
    <script>
    </script>
</body>
</html>