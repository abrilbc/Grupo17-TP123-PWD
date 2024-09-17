<?php
    include_once('../../../configuracion.php');
    include_once '../Estructura/header.php';
?>

    <main class="container">
        <div class="card col-12 text-center m-5 shadow">
            <div class="container text-center">
                <div class="col d-flex text-center flex-column align-items-center justify-content-center">
                    <div class="d-flex flex-column gap-3 p-5" style="width:80%">
                        <h3 class="text-center">Cambio dueño de auto</h3>

                        <?php
                        include_once('../../Model/Connector/BaseDatos.php');
                        include_once('../../Model/Auto.php');
                        include_once('../../Control/AbmAuto.php');
                        include_once('../../Model/Persona.php');
                        include_once('../../Control/AbmPersona.php');

                        $mensaje = ""; // Para almacenar el mensaje de éxito o error
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
                                    $mensaje = "<p class='alert alert-success fw-bold fs-5'>¡Cambio de dueño realizado con éxito!</p>";
                                } else {
                                    $mensaje = "<p class='alert alert-danger fw-bold fs-5'>Hubo un error al intentar cambiar el dueño: " . $cambiazo['msj'] . "</p>";
                                }
                            } else {
                                $mensaje = "<p class='alert alert-warning fw-bold fs-5'>No se encuentra la persona o el auto, verifique los datos ingresados.</p>";
                            }
                        }
                        ?>

                        <?php echo $mensaje; ?>

                        <div class="w-100 d-flex flex-column align-items-center">
                            <a onclick="window.location='../../index.php';" class="btn btn-success fs-5 mt-2 w-150">Volver</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
