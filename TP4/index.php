<?php
include_once './Vista/Estructura/header.php';
?>

<div class="container mb-5">
    <div class="p-4 border rounded-3 shadow-sm">
        <h2 class="mb-4">Menú de Ejercicios - TP 4</h2>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center fs-5">
                Ver lista de AUTOS
                <a href="./Vista/verAutos.php" class="btn btn-success fs-5" style="width: 80px">Ir</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center fs-5">
                Ver lista de PERSONAS
                <a href="./Vista/listaPersonas.php" class="btn btn-success fs-5" style="width: 80px">Ir</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center fs-5">
                BUSCAR AUTO
                <a href="./Vista/buscarAuto.php" class="btn btn-success fs-5" style="width: 80px">Ir</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center fs-5">
                AGREGAR PERSONA
                <a href="./Vista/nuevaPersona.php" class="btn btn-success fs-5" style="width: 80px">Ir</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center fs-5">
                AGREGAR AUTO
                <a href="./Vista/nuevoAuto.php" class="btn btn-success fs-5" style="width: 80px">Ir</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center fs-5">
                Cambiar dueño de un AUTO
                <a href="./Vista/cambioDuenio.php" class="btn btn-success fs-5" style="width: 80px">Ir</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center fs-5">
                Actualizar los datos de una PERSONA
                <a href="./Vista/buscarPersona.php" class="btn btn-success fs-5" style="width: 80px">Ir</a>
            </li>
        </ul>
        <div class="mt-4 d-flex flex-column align-items-center w-100">
            <a href="../" class="w-25"><button class="btn btn-secondary w-100 fs-5">Volver</button></a>
        </div>
    </div>
</div>
