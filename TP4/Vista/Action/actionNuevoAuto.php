<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Auto - Action</title>
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
                    <h3 class="text-center" style="color:black">AUTO AGREGAR ACTION</h3>

                    <?php
                    include_once('../../Model/Connector/BaseDatos.php');
                    include_once('../../Model/Auto.php');
                    include_once('../../Control/AbmAuto.php');
                    include_once('../../Model/Persona.php');
                    include_once('../../Control/AbmPersona.php');

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
                            echo "<p>$query</p>";
                        } else {
                            echo "La persona no está. Haga click <a href='../nuevaPersona.php'>acá</a> para registrar a la persona.";
                        }
                    } else {
                        header("Location: nuevoAuto.php");
                        exit();
                    }
                    ?>
                </div>
            </div>
            <a onclick="window.location='../../index.php';" class="btn btn-primary">Volver</a>
        </div>
    </main>

</body>

</html>