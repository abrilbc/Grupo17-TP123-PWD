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
                <div class="bg-light p-4" style="width: 80%;">
                    <h3 class="text-center" style="color:black">Holaaaa</h3>

                    <?php
                    include_once('../../Model/Connector/BaseDatos.php');
                    include_once('../../Model/Persona.php');
                    include_once('../../Control/AbmPersona.php');

                    $datos = darDatosSubmitted1();
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $nroDni = $datos['NroDni'];
                        $apellido = $datos['Apellido'];
                        $nombre = $datos['Nombre'];
                        $fechaNac = $datos['fechaNac'];
                        $queryFecha = date('Y-m-d', strtotime(str_replace('/', '-', $fechaNac)));
                        $telefono = $datos['Telefono'];
                        $domicilio = $datos['Domicilio'];

                        $ambObjPersona = new AbmPersona();
                        $query = $ambObjPersona->agregarObjPersonaNueva($nroDni, $nombre, $apellido,  $queryFecha, $telefono, $domicilio);
                        echo "<p>$query</p>";
                    } else {
                        header("Location: nuevaPersona.php");
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