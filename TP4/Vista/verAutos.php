<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body class="bg-dark">
    <main class="container">
        <div class="bg-dark text-white p-3">
            <h3>Lista de Autos</h3>

            <?php
            include_once('../Model/Connector/BaseDatos.php');
            include_once('../Model/Auto.php');
            include_once('../Model/Persona.php');
            include_once('../Control/AbmAuto.php');
            $abmAuto = new AbmAuto();

            $autos = $abmAuto->obtenerColAutos();

            if (count($autos) > 0) {
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
            HTML;

                foreach ($autos as $auto) {
                    $duenio = $auto->getObjDuenio();
                    $duenio->buscar();
                    $resp .= <<<FILA
                    <tr>
                        <td class="text-center">{$auto->getPatente()}</td>
                        <td class="text-center">{$auto->getMarca()}</td>
                        <td class="text-center">{$auto->getModelo()}</td>
                        <td class="text-center">{$duenio->getNombre()} {$duenio->getApellido()}</td>
                    </tr>
                FILA;
                }

                $resp .= <<<HTML
                </tbody>
            </table>
            HTML;
            } else {
                $resp = "<p>No hay autos.</p>";
            }

            echo $resp;
            ?>
            <a href="../../index.php" class="btn btn-primary">Volver</a>
        </div>
    </main>
</body>

</html>