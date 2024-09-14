<?php
    include_once 'EJ1/Vista/Estructura/header.php'
?>

<div class="container my-4">
        <div class="h-100 w-100">
            <div class="box mb-3 d-flex align-items-center border rounded overflow-hidden" style="height: 80px;">
                <div class="col-2 bg-success text-white d-flex align-items-center justify-content-center" style="height: 100%;">
                    <p class="m-1 fs-5 font-weight-bold">Ejercicio 1</p>
                </div>
                <div class="col-10 d-flex align-items-center justify-content-between px-3">
                    <p class="m-1 fs-5">Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
cargado, en caso contrario mostrar un mensaje indicando el problema.</p>
                    <a href="EJ1/Vista/Ejercicio1.php" class="btn btn-success col-1 ms-5 h-50 fs-5">Ir</a>
                </div>
            </div>
            <div class="box mb-3 d-flex align-items-center border rounded overflow-hidden" style="height: 80px;">
                <div class="col-2 bg-success text-white d-flex align-items-center justify-content-center" style="height: 100%;">
                    <p class="m-1 fs-5 font-weight-bold">Ejercicio 2</p>
                </div>
                <div class="col-10 d-flex align-items-center justify-content-between px-3">
                    <p class="m-1 fs-5">Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
contenido en un textarea</p>
                    <a href="EJ2/Vista/Ejercicio2.php" class="btn btn-success col-1 ms-5 h-50 fs-5">Ir</a>
                </div>
            </div>
            <div class="box mb-3 d-flex align-items-center border rounded overflow-hidden" style="height: 80px;">
                <div class="col-2 bg-success text-white d-flex align-items-center justify-content-center" style="height: 100%;">
                    <p class="m-1 fs-5 font-weight-bold">Ejercicio 3</p>
                </div>
                <div class="col-10 d-flex align-items-center justify-content-between px-3">
                    <p class="m-1 fs-5">Agregue al formulario creado en el ejercicio 10 del práctico 2 un input file que les
permita adjuntar la imagen de película que se está cargando. Cuando se envía el formulario se
deberá guardar la imagen y luego mostrarla junto con la información cargada en el formulario.</p>
                    <a href="EJ3/Vista/Ejercicio3.php" class="btn btn-success col-1 ms-5 h-50 fs-5">Ir</a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>