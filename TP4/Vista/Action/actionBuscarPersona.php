<!DOCTYPE html>
<html lang="es">

<?php
require_once('../../../configuracion.php');
require_once('../../Estructura/menu/menuAction.php');
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
    include_once('../../Estructura/header.php');
    include_once('../../Estructura/menu/menuAction.php');
    ?>

    <main class="container">
        <div class="bg-dark text-white">
            <div class="d-flex justify-content-center align-items-center" style="height: 450px;">
                <div>

                    <h3 class="text-center" style="color:black">Persona EncontradACTION</h3>

                    <?php
                    $datos = darDatosSubmitted1();
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($datos['NroDni'])) {
                        $nroDni = $datos['NroDni'];

                        $abmObjPersona = new AbmPersona();
                        $verificacionPersona = $abmObjPersona->obtenerDatosObjPersona($nroDni);

                        if ($verificacionPersona) {
                            $rpta = '';
                            $rpta = <<<HTML
                                <h4>Buscar y Actualizar Persona</h4>
                                <form action="ActualizarDatosPersona.php" class="d-flex flex-column gap-3" style="width:60%" method="POST">
                                    <input type="hidden" id="NroDni" name="NroDni" value="{$verificacionPersona->getNroDni()}">           
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input class="form-control p-3" type="text" id="Nombre" name="Nombre" placeholder="Nombre" value="{$verificacionPersona->getNombre()}">
                                    </div>
                                    <div class="form-group">
                                        <label for="apellido">Apellido</label>
                                        <input class="form-control p-3" type="text" id="Apellido" name="Apellido" placeholder="Apellido" value="{$verificacionPersona->getApellido()}">
                                    </div>
                                    <div class="form-group">
                                        <label for="fechaNac">Fecha Nacimiento</label>
                                        <input class="form-control p-3" type="text" id="fechaNac" name="fechaNac" placeholder="Fecha Nacimiento" value="{$verificacionPersona->getFechaNacimiento()}">
                                    </div>
                                    <div class="form-group">
                                        <label for="telefono">Teléfono</label>
                                        <input class="form-control p-3" type="text" id="Telefono" name="Telefono" placeholder="Teléfono" value="{$verificacionPersona->getTel()}">
                                    </div>
                                    <div class="form-group">
                                        <label for="domicilio">Domicilio</label>
                                        <input class="form-control p-3" type="text" id="Domicilio" name="Domicilio" placeholder="Domicilio" value="{$verificacionPersona->getDomicilio()}">
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
            <a href="../buscarPersona.php" class="btn btn-primary">Volver</a>
        </div>
    </main>
</body>

</html>