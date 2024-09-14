<?php
    include_once('../Vista/Estructura/header.php');
    ?>
    <main class="container">
        <div class="card col-12 text-center m-5 shadow">
            <div class="container text-center ">
                <div class="col d-flex text-center flex-column align-items-center justify-content-center ">

                    <form onsubmit="return validar()" action="./Action/actionNuevaPersona.php" class="d-flex flex-column gap-3" style="width:80%" method="POST" id="miFormulario">
                        <h3 class="pt-5">Agregar una nueva persona</h3>

                        <input class="form-control p-3" type="text" id="NroDni" name="NroDni" placeholder="Número de DNI">
                        <span id="personaDNI"></span>

                        <input class="form-control p-3" type="text" id="Apellido" name="Apellido" placeholder="Apellido">
                        <span id="personaApellido"></span>

                        <input class="form-control p-3" type="text" id="Nombre" name="Nombre" placeholder="Nombre">

                        <span id="personaNombre"></span>
                        <input class="form-control p-3" type="text" id="fechaNac" name="fechaNac" placeholder="Fecha de nacimiento (DD/MM/YYYY)">
                        <span id="personaFechaNac"></span>

                        <input class="form-control p-3" type="text" id="Telefono" name="Telefono" placeholder="Teléfono (sin el 15)">
                        <span id="personaTelefono"></span>

                        <input class="form-control p-3" type="text" id="Domicilio" name="Domicilio" placeholder="Domicilio">
                        <span id="personaDomicilio"></span>
                        <div class="d-flex flex-column align-items-center">
                            <input class="btn btn-success p-2 fs-5 w-50 m-2" type="submit" style="width:20%" value="Agregar">
                            <a onclick="history.back()" class="btn btn-secondary fs-5 w-50 m-2 mb-5">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="./Js/validarPersona.js"></script>
</body>

</html>