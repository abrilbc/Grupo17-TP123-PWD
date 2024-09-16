<?php
include_once('../Vista/Estructura/header.php');
?>
<main class="container">
    <div class="card col-12 text-center m-5 shadow">
        <div class="container text-center">
            <div class="col d-flex text-center flex-column align-items-center justify-content-center ">

                <form onsubmit="return validar()" action="./Action/actionNuevaPersona.php" class="d-flex flex-column gap-3" style="width:80%" method="POST" id="miFormulario">
                    <h3 class="pt-5">Agregar una nueva persona</h3>

                    <div class="w-100 text-start">
                        <label for="NroDni" class="fs-5">Número de DNI</label>
                        <input class="form-control p-3" type="text" id="NroDni" name="NroDni" placeholder="Ej: 12345678">
                        <span class="text-danger" id="personaDNI"></span>
                    </div>

                    <div class="w-100 text-start">
                        <label for="Apellido" class="fs-5">Apellido</label>
                        <input class="form-control p-3" type="text" id="Apellido" name="Apellido" placeholder="Ej: García">
                        <span class="text-danger" id="personaApellido"></span>
                    </div>

                    <div class="w-100 text-start">
                        <label for="Nombre" class="fs-5">Nombre</label>
                        <input class="form-control p-3" type="text" id="Nombre" name="Nombre" placeholder="Ej: Juan">
                        <span class="text-danger" id="personaNombre"></span>
                    </div>

                    <div class="w-100 text-start">
                        <label for="fechaNac" class="fs-5">Fecha de nacimiento</label>
                        <input class="form-control p-3" type="text" id="fechaNac" name="fechaNac" placeholder="DD/MM/YYYY">
                        <span class="text-danger" id="personaFechaNac"></span>
                    </div>

                    <div class="w-100 text-start">
                        <label for="Telefono" class="fs-5">Teléfono (sin el 15)</label>
                        <input class="form-control p-3" type="text" id="Telefono" name="Telefono" placeholder="Ej: 1123456789">
                        <span class="text-danger" id="personaTelefono"></span>
                    </div>

                    <div class="w-100 text-start">
                        <label for="Domicilio" class="fs-5">Domicilio</label>
                        <input class="form-control p-3" type="text" id="Domicilio" name="Domicilio" placeholder="Ej: Calle Falsa 123">
                        <span class="text-danger" id="personaDomicilio"></span>
                    </div>

                    <div class="d-flex flex-column gap-3 align-items-center">
                        <input class="btn btn-success p-2 fs-5 w-25" type="submit" style="width:20%" value="Agregar">
                        <a onclick="history.back()" class="btn btn-secondary fs-5 w-25 mb-3">Volver</a>
                    </div>
                </form>
            </div>
