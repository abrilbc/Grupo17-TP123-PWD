<?php
include_once '../configuracion.php';
include_once './view/Estructura/header.php';
?>
<div class="container mt-4">
    <h1 class="text-center">Gestión de Datos</h1>
    <div class="row mt-4">

        <!-- Card para Gestión de Personas -->
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Gestión de Personas</h5>
                    <p class="card-text">Administra las personas registradas en el sistema.</p>
                    <a href="./view/agregarPersona.php" class="btn btn-success mb-2 w-100">Agregar Persona</a>
                    <a href="./view/listarPersonas.php" class="btn btn-primary mb-2 w-100">Listar Personas</a>
                    <a href="./view/buscarPersona.php" class="btn btn-warning w-100">Buscar Persona</a>
                </div>
            </div>
        </div>

        <!-- Card para Gestión de Roles -->
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Gestión de Roles</h5>
                    <p class="card-text">Administra los roles disponibles en el sistema.</p>
                    <a href="./view/agregarRol.php" class="btn btn-success mb-2 w-100">Agregar Rol</a>
                    <a href="./view/listarRoles.php" class="btn btn-primary mb-2 w-100">Listar Roles</a>
                    <a href="./view/buscarRol.php" class="btn btn-warning w-100">Buscar Rol</a>
                </div>
            </div>
        </div>

        <!-- Card para Gestión de Carreras -->
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Gestión de Carreras</h5>
                    <p class="card-text">Administra las carreras registradas en el sistema.</p>
                    <a href="./view/agregarCarrera.php" class="btn btn-success mb-2 w-100">Agregar Carrera</a>
                    <a href="./view/listarCarreras.php" class="btn btn-primary mb-2 w-100">Listar Carreras</a>
                    <a href="./view/buscarCarrera.php" class="btn btn-warning w-100">Buscar Carrera</a>
                </div>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center mt-4">
        <a href="../" class="btn btn-secondary fs-5">Volver</a>
    </div>
</div>
<?php
include_once '../Vista/Estructura/footer.php';
?>
