<?php
require_once('../../../configuracion.php');
include_once '../Estructura/header.php';
?>
<main class="container my-5">
    <div class="bg-light p-4 border rounded-3 shadow d-flex flex-column align-items-center">
        <h3 class="text-center mb-4">Persona Encontrada</h3>
        
        <?php
        include_once('../../Model/Connector/BaseDatos.php');
        include_once('../../Model/Persona.php');
        include_once('../../Control/AbmPersona.php');

        $datos = darDatosSubmitted1();
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($datos['NroDni'])) {
            $nroDni = $datos['NroDni'];

            $abmObjPersona = new AbmPersona();
            $verificacionPersona = $abmObjPersona->obtenerDatosObjPersona($nroDni);

            if ($verificacionPersona) {
                $fechaNac = $verificacionPersona->getFechaNacimiento();
                $fechaFormateada = DateTime::createFromFormat('Y-m-d', $fechaNac)->format('d/m/Y');

                $rpta = '';
                $rpta = <<<HTML
                    <h4 class="mb-4">ACTUALIZAR PERSONA</h4>
                    <div id="cambios"></div>
                    <form onsubmit="return validar()" action="ActualizarDatosPersona.php" class="d-flex flex-column align-items-center gap-3 w-75" method="POST">
                        <input type="hidden" id="NroDni" name="NroDni" value="{$verificacionPersona->getNroDni()}">           
                        <div class="form-group w-100 text-center">
                            <label for="Nombre" class="fs-5 fw-bold">Nombre</label>
                            <input class="form-control p-2 mb-3 fs-6 bg-white mx-auto w-75" type="text" id="Nombre" name="Nombre" placeholder="Nombre" value="{$verificacionPersona->getNombre()}" data-original="{$verificacionPersona->getNombre()}">
                            <span class="text-danger" id="actNombre"></span>
                        </div>
                        <div class="form-group w-100 text-center">
                            <label for="Apellido" class="fs-5 fw-bold">Apellido</label>
                            <input class="form-control p-2 mb-3 fs-6 bg-white mx-auto w-75" type="text" id="Apellido" name="Apellido" placeholder="Apellido" value="{$verificacionPersona->getApellido()}" data-original="{$verificacionPersona->getApellido()}">
                            <span class="text-danger" id="actApellido"></span>
                        </div>
                        <div class="form-group w-100 text-center">
                            <label for="fechaNac" class="fs-5 fw-bold">Fecha Nacimiento</label>
                            <input class="form-control p-2 mb-3 fs-6 bg-white mx-auto w-75" type="text" id="fechaNac" name="fechaNac" placeholder="Fecha Nacimiento" value="$fechaFormateada" data-original="$fechaFormateada">
                            <span class="text-danger" id="actFecha"></span>
                        </div>
                        <div class="form-group w-100 text-center">
                            <label for="Telefono" class="fs-5 fw-bold">Teléfono</label>
                            <input class="form-control p-2 mb-3 fs-6 bg-white mx-auto w-75" type="text" id="Telefono" name="Telefono" placeholder="Teléfono" value="{$verificacionPersona->getTel()}" data-original="{$verificacionPersona->getTel()}">
                            <span class="text-danger" id="actTel"></span>
                        </div>
                        <div class="form-group w-100 text-center">
                            <label for="Domicilio" class="fs-5 fw-bold">Domicilio</label>
                            <input class="form-control p-2 mb-3 fs-6 bg-white mx-auto w-75" type="text" id="Domicilio" name="Domicilio" placeholder="Domicilio" value="{$verificacionPersona->getDomicilio()}" data-original="{$verificacionPersona->getDomicilio()}">
                            <span class="text-danger" id="actDom"></span>
                        </div>
                        <div class="d-flex flex-column align-items-center gap-3 w-100">
                            <button id="btnActualizar" class="btn btn-success fs-5 w-50" type="submit">Actualizar</button>
                        </div>
                    </form>
                HTML;
                echo $rpta;
            } else {
                echo "<p>No se encontró a la persona con el $nroDni ingresado</p>";
            }
        } else {
            echo "<p>Completa el formulario</p>";
        }
        ?>
        
        <div class="d-flex flex-column align-items-center pt-3 w-75">
            <a onclick="history.back()" class="btn btn-secondary fs-5 w-50 text-center" style="text-decoration: none;">Volver</a>
        </div>
    </div>
</main>
<script src="../Js/jquery-v3_7_1.js"></script>
<script src="../Js/validarActPersona.js"></script>
</body>
</html>