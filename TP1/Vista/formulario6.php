<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <div>
        <form id="formulario" action="./../Control/deporte.php" method="GET">
            Nombre:
            <input type="text" name="nombre" id="nombre"> <br>
            Apellido:
            <input type="text" name="apellido" id="apellido"> <br>
            Edad:
            <input type="text" name="edad" id="edad"> <br>
            Direccion: 
            <input type="text" name="direccion" id="direccion"> <br>
            Deporte: <br>
            <input type="checkbox" id="futbol" name="futbol" value="futbol">Futbol <br>
            <input type="checkbox" id="basket" name="basket" value="basket">Basket <br>
            
                
            <input type="submit" value="enviar">
        </form>
    </div>
</body>
</html>