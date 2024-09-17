<?php
require_once('../../../configuracion.php');
include_once '../Estructura/header.php';
?>
<main class="container my-5">
    <div class="p-4 border rounded-3 shadow-sm d-flex flex-column align-items-center">
        <h3 class="text-center mb-4"><<< Persona Encontrada >>></h3>
        
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
                    <h4 class="mb-4">Buscar y Actualizar Persona</h4>
                    <form onsubmit="return validar()" action="ActualizarDatosPersona.php" class="d-flex flex-column gap-3 w-75" method="POST">
                        <input type="hidden" id="NroDni" name="NroDni" value="{$verificacionPersona->getNroDni()}">           
                        <div class="form-group">
                            <label for="nombre" class="fs-5 fw-bold">Nombre</label>
                            <input class="form-control p-2 mb-3 fs-6 bg-light" type="text" id="Nombre" name="Nombre" placeholder="Nombre" value="{$verificacionPersona->getNombre()}">
                            <span class="text-danger" id="actNombre"></span>
                        </div>
                        <div class="form-group">
                            <label for="apellido" class="fs-5 fw-bold">Apellido</label>
                            <input class="form-control p-2 mb-3 fs-6 bg-light" type="text" id="Apellido" name="Apellido" placeholder="Apellido" value="{$verificacionPersona->getApellido()}">
                            <span class="text-danger" id="actApellido"></span>
                        </div>
                        <div class="form-group">
                            <label for="fechaNac" class="fs-5 fw-bold">Fecha Nacimiento</label>
                            <input class="form-control p-2 mb-3 fs-6 bg-light" type="text" id="fechaNac" name="fechaNac" placeholder="Fecha Nacimiento" value="{$fechaFormateada}">
                            <span class="text-danger" id="actFecha"></span>
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="fs-5 fw-bold">Teléfono</label>
                            <input class="form-control p-2 mb-3 fs-6 bg-light" type="text" id="Telefono" name="Telefono" placeholder="Teléfono" value="{$verificacionPersona->getTel()}">
                            <span class="text-danger" id="actTel"></span>
                        </div>
                        <div class="form-group">
                            <label for="domicilio" class="fs-5 fw-bold">Domicilio</label>
                            <input class="form-control p-2 mb-3 fs-6 bg-light" type="text" id="Domicilio" name="Domicilio" placeholder="Domicilio" value="{$verificacionPersona->getDomicilio()}">
                            <span class="text-danger" id="actDom"></span>
                        </div>
                        <div class="d-flex flex-column gap-3 w-100">
                            <button class="btn btn-success fs-5" type="submit">Actualizar</button>
                            <a onclick="history.back()" class="btn btn-secondary fs-5" style="text-align: center;">Volver</a>
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
    </div>
</main>
<script src="../Js/jquery-v3_7_1.js"></script>
<script src="../Js/validarActPersona.js"></script>
</body>
</html>
