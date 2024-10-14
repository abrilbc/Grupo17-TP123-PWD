<?php 
    include_once '../../configuracion.php';
    include_once 'Estructura/header.php';
?>
<div class="container d-flex justify-content-center mt-5 mb-10">
    <div class="card shadow-lg p-5" style="width: 40rem;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Agregar Persona</h3>
            <form onsubmit="return validar()" action="./action/actionAgregarPersona.php" method="POST">
                <div class="mb-3">
                    <label for="legajo" class="form-label">Legajo:</label>
                    <input type="text" class="form-control" name="legajo" id="legajo" placeholder="5097">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre y Apellido:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Rodrigo Villablanca">
                </div>
                <div class="mb-3">
                    <label for="idcarrera" class="form-label">Carrera:</label>
                    <select class="form-control" name="id_carrera" id="idcarrera">
                        <option value="">Selecciona una carrera</option>
                        <option value="1">Tec. Desarrollo Web</option>
                        <option value="2">Tec. Software Libre y Adm. en Sistemas</option>
                        <option value="3">Licenciatura en Ciencias de la Computación</option>
                        <option value="4">Licenciatura en Sistemas de Información</option>
                        <option value="5">Profesorado de Informática</option>
                        <option value="6">Maestría en Ciencias de la Computación</option>
                        <option value="7">Maestría en Enseñanza en Escenarios Digitales</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="rol" class="form-label">Rol:</label>
                    <select class="form-control" name="rol" id="rol">
                        <option value="">Selecciona un rol</option>
                        <option value="1">Profesor</option>
                        <option value="2">Alumno</option>
                    </select>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success">Agregar</button>
                    <a href="../" class="btn btn-secondary"><< Volver >></a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
?>