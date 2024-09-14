<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Persona</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/init.css">
</head>

<body>
    <?php
    include_once('../../../configuracion.php');
    ?>

    <main class="container">
        <div class="bg-dark text-white">
            <div class="d-flex justify-content-center align-items-center" style="height: 450px;">
                <div class="bg-dark p-4" style="width: 80%;">
                    <h3 class="text-center">Cambio dueño de auto</h3>

                    <?php
                    include_once('../../Model/Connector/BaseDatos.php');
                    include_once('../../Model/Auto.php');
                    include_once('../../Control/AbmAuto.php');
                    include_once('../../Model/Persona.php');
                    include_once('../../Control/AbmPersona.php');

                    $datos = darDatosSubmitted1();
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $patente = $datos['Patente'];
                        $dniDuenio = $datos['DniDuenio'];

                        $abmObjAuto = new AbmAuto();
                        $abmObjPersona = new AbmPersona();

                        $verificacionAuto = $abmObjAuto->obtenerDatosObjAuto($patente);
                        $verificacionPersona = $abmObjPersona->obtenerDatosObjPersona($dniDuenio);

                        if ($verificacionAuto && $verificacionPersona) {
                            $cambiazo = $abmObjAuto->cambiarDuenioAuto($patente, $dniDuenio);

                            if ($cambiazo['estado'] === 0) {
                                echo $cambiazo['msj']; // exito
                            } else {
                                echo $cambiazo['msj']; // fallo pdoException
                            }
                        } else {
                            echo "No se encuentra la persona o el auto, verifique por favor."; // no se encontró
                        }
                    }
                    ?>
                </div>
            </div>
            <a onclick="window.location='../../index.php';" class="btn btn-primary">Volver</a>
        </div>
    </main>
</body>

</html>