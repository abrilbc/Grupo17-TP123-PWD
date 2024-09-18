<?php
    include_once('../../../configuracion.php');
    include_once '../Estructura/header.php';
?>

    <main class="container">
        <div class="card col-12 text-center m-5 shadow">
            <div class="container text-center">
                <div class="col d-flex text-center flex-column align-items-center justify-content-center">
                    <div class="d-flex flex-column gap-3 p-5" style="width:80%">
                        <h3 class="text-center">Agregar Nuevo Auto</h3>

                        <?php
                        include_once('../../Model/Connector/BaseDatos.php');
                        include_once('../../Model/Auto.php');
                        include_once('../../Control/AbmAuto.php');
                        include_once('../../Model/Persona.php');
                        include_once('../../Control/AbmPersona.php');

                        $mensaje = ""; // Para almacenar el mensaje de éxito o error
                        $datos = darDatosSubmitted1();

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $patente = $datos['Patente'];
                            $marca = $datos['Marca'];
                            $modelo = $datos['Modelo'];
                            $dniDuenio = $datos['DniDuenio'];

                            $ambObjPersona = new AbmPersona();
                            $banderaAmbObjPersona = $ambObjPersona->obtenerDatosObjPersona($dniDuenio);

                            if ($banderaAmbObjPersona !== null) {
                                $ambObjAuto = new AbmAuto();
                                $query = $ambObjAuto->agregarObjAutoNuevo($patente, $marca, $modelo, $dniDuenio);
                                if ($query === "el auto está"){
                                    $mensaje = "<p class='alert alert-warning fw-bold fs-5'>El auto ya se encuentra registrado</p>";
                                } else {
                                $mensaje = "<p class='alert alert-success fw-bold fs-5'>¡Auto registrado con éxito!</p>";
                                }
                            } else {
                                // Mostrar mensaje de error con link para registrar a la persona
                                $mensaje = "<p class='alert alert-warning fw-bold fs-5'>La persona no está registrada. Haga click <a href='../nuevaPersona.php'>acá</a> para registrar a la persona.</p>";
                            }
                        } else {
                            header("Location: nuevoAuto.php");
                            exit();
                        }
                        ?>

                        <!-- Mostrar mensaje de éxito o error -->
                        <?php echo $mensaje; ?>

                        <div class="w-100 d-flex flex-column align-items-center">
                            <a onclick="window.location='../../index.php';" class="btn btn-secondary fs-5 mt-2 w-50">Volver</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
