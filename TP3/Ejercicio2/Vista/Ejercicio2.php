
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - TP 3</title>
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
        Ejercicio 2 - Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
        que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
        contenido en un textarea.
        (OBS: Referencia a funciones para trabajar con archivos http://php.net/manual/en/ref.filesystem.php)
        </p>
        <form action="./Action/subirArchivo.php" method="post" id="miFormulario" enctype="multipart/form-data">
            <label for="archivo">Ingrese el archivo <span>.txt</span> para visualizarlo:</label>
            <input type="file" name="archivo" id="archivo" required>
        <input type="submit" class="btn">
        </form>
        </div>

    </div>
    <script>
    </script>
</body>
</html>