<?php
include_once '../configuracion.php';
include_once './view/Estructura/header.php';
?>
<div class="container mt-4">
    <h1 class="text-center">Gestión de Personas</h1>
    <div class="list-group mt-4 shadow">

        <a href="./view/agregarPersona.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-1">Agregar Persona</h5>
                <p class="mb-1">Inserta una nueva persona al sistema.</p>
            </div>
            <span class="badge bg-success text-white">Agregar</span>
        </a>

        <a href="view/listarPersonas.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-1">Listar Personas</h5>
                <p class="mb-1">Mostrar todas las personas registradas.</p>
            </div>
            <span class="badge bg-success text-white">Listar</span>
        </a>

        <a href="./view/buscarPersona.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-1">Buscar Persona</h5>
                <h6 class="mb-1 text-success">Modificar/Eliminar</h6>
                <p class="mb-1">Encuentra personas registradas en el sistema</p>
            </div>
            <span class="badge bg-success text-white">Buscar</span>
        </a>
        
    </div>
    <div class="d-flex justify-content-center mt-4">
        <a href="../" class="btn btn-secondary fs-5">Volver</a>
    </div>
</div>
<?php
include_once '../Vista/Estructura/footer.php';
?>
