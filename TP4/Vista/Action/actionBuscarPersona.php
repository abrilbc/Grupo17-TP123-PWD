<!DOCTYPE html>
<html lang="es">

<?php
require_once('../../../configuracion.php');
// require_once('../../Estructura/menu/menuAction.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/init.css">
</head>

<body>
    <?php
    ?>

    <main class="container">
        <div class="bg-dark text-white">
            <div class="d-flex justify-content-center align-items-center" style="height: 450px;">
                <div>

                    <h3 class="text-center" style="color:black">Persona EncontradACTION</h3>

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
                                <h4>Buscar y Actualizar Persona</h4>
                                <form onsubmit="return validar()" action="ActualizarDatosPersona.php" class="d-flex flex-column gap-3" style="width:60%" method="POST">
                                    <input type="hidden" id="NroDni" name="NroDni" value="{$verificacionPersona->getNroDni()}">           
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input class="form-control p-3" type="text" id="Nombre" name="Nombre" placeholder="Nombre" value="{$verificacionPersona->getNombre()}">
                                        <span class="text-danger" id="actNombre"></span>

                                    </div>
                                    <div class="form-group">
                                        <label for="apellido">Apellido</label>
                                        <input class="form-control p-3" type="text" id="Apellido" name="Apellido" placeholder="Apellido" value="{$verificacionPersona->getApellido()}">
                                        <span class="text-danger" id="actApellido"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="fechaNac">Fecha Nacimiento</label>
                                        <input class="form-control p-3" type="text" id="fechaNac" name="fechaNac" placeholder="Fecha Nacimiento" value="{$fechaFormateada}">
                                        <span class="text-danger" id="actFecha"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="telefono">Teléfono</label>
                                        <input class="form-control p-3" type="text" id="Telefono" name="Telefono" placeholder="Teléfono" value="{$verificacionPersona->getTel()}">
                                        <span class="text-danger" id="actTel"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="domicilio">Domicilio</label>
                                        <input class="form-control p-3" type="text" id="Domicilio" name="Domicilio" placeholder="Domicilio" value="{$verificacionPersona->getDomicilio()}">
                                        <span class="text-danger" id="actDom"></span>
                                    </div>
                                    <button class="btn btn-light p-3" type="submit">Actualizar</button>
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
            </div>
            <a onclick="history.back()" class="btn btn-primary">Volver</a>
        </div>
    </main>
    <script src="../Js/jquery-v3_7_1.js"></script>
    <script src="../Js/validarActPersona.js"></script>
</body>

</html>