<?php
include_once('../../../configuracion.php');
include_once '../Estructura/header.php';
include_once('../../Model/Connector/BaseDatos.php');
include_once('../../Model/Persona.php');
include_once('../../Control/AbmPersona.php');

$mensaje = "";  // Para almacenar el mensaje de éxito o error

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Asignación de los datos
    $datos = darDatosSubmitted1();
    $nroDni = $datos['NroDni'];
    $apellido = $datos['Apellido'];
    $nombre = $datos['Nombre'];
    $fechaNac = $datos['fechaNac'];
    $queryFecha = date('Y-m-d', strtotime(str_replace('/', '-', $fechaNac)));
    $telefono = $datos['Telefono'];
    $domicilio = $datos['Domicilio'];

    // Objeto y consulta
    $ambObjPersona = new AbmPersona();
    $resultado = $ambObjPersona->agregarObjPersonaNueva($nroDni, $nombre, $apellido, $queryFecha, $telefono, $domicilio);

    // Acá verifica el resultado y se fija que sea adecuado
    if ($resultado == 'Exito') {
        $mensaje = "<p class='alert alert-success fw-bold fs-5'>¡Persona añadida con éxito!</p>";
    } elseif ($resultado == 'PERSONA AGREGADA CORRECTAMENTE') {
        $mensaje = "<p class='alert alert-warning fw-bold fs-5'>La persona ya estaba registrada anteriormente.</p>";
    } else {
        $mensaje = "<p class='alert alert-danger fw-bold fs-5'>Hubo un error: $resultado</p>";
    }
} else {
    header("Location: nuevaPersona.php");
    exit();
}
?>

<main class="container">
    <div class="card col-12 text-center m-5 shadow">
        <div class="container text-center">
            <div class="col d-flex text-center flex-column align-items-center justify-content-center">

                <div class="d-flex flex-column gap-3 p-5" style="width:80%">
                    <!-- Mostrar mensaje de éxito o error -->
                    <?php echo $mensaje; ?>

                    <?php if ($resultado == 'Exito'): // Si la operación fue exitosa, mostrar los datos de la persona ?>
                    <h4 class="pt-1">DATOS DE LA PERSONA AÑADIDA</h4>

                    <div class="text-start fs-5">
                        <p><strong>Número de DNI:</strong> <?php echo $nroDni; ?></p>
                        <p><strong>Apellido:</strong> <?php echo $apellido; ?></p>
                        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
                        <p><strong>Fecha de nacimiento:</strong> <?php echo $fechaNac; ?></p>
                        <p><strong>Teléfono:</strong> <?php echo $telefono; ?></p>
                        <p><strong>Domicilio:</strong> <?php echo $domicilio; ?></p>
                    </div>

                    <div class="w-100 d-flex flex-column align-items-center">
                        <a href="../buscarPersona.php" class="btn btn-success fs-5 mt-2 w-100">Cambiar Datos</a>
                        <?php endif; // Fin del bloque de datos ?>
                        <a onclick="history.back()" class="btn btn-secondary fs-5 mt-2 w-100">Volver</a>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</main>

</body>
</html>