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
    <!-- ESE INIT ES PARA PODER VER LAS LETRAS PORQUE ESTABAN EN BLANCO sjsjs -->
</head>

<body>
    <?php
    include_once('../../Estructura/header.php');
    include_once('../../Estructura/menu/menuAction.php');
    ?>

    <main class="container">
        <div class="bg-dark text-white">
            <div class="d-flex justify-content-center align-items-center" style="height: 450px;">
                <div class="bg-light p-4" style="width: 80%;">

                    <h3 class="text-center" style="color:black">Autos encontrados</h3>

                    <?php

                    $datos = darDatosSubmitted1();

                    $resp = "";
                    if (isset($datos['Patente'])) {
                        $patente = $datos['Patente'];

                        $abmAuto = new AbmAuto();
                        $abmPersona = new AbmPersona();

                        $auto = $abmAuto->obtenerDatosAuto($patente);

                        if ($auto !== null) {

                            $duenio = $auto->getObjDuenio();
                            $duenio->buscar();
                            $resp = <<<HTML
                            <table class="table table-striped table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">Patente</th>
                                        <th class="text-center">Marca</th>
                                        <th class="text-center">Modelo</th>
                                        <th class="text-center">Dueño</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{$auto->getPatente()}</td>
                                        <td>{$auto->getMarca()}</td>
                                        <td>{$auto->getModelo()}</td>
                                        <td>{$duenio->getNombre()} {$duenio->getApellido()}</td>
                                    </tr>
                                </tbody>
                            </table>
                            HTML;
                        } else {
                            $resp = "<p>No se encontró auto.</p>";
                        }
                    } else {
                        $resp = "<p>No patente.</p>";
                    }
                    echo $resp;
                    ?>
                </div>
            </div>
            <a href="../buscarAuto.php" class="btn btn-primary">Volver</a>
        </div>
    </main>
</body>

</html>