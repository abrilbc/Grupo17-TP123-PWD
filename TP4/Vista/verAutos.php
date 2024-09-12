<?php
include_once 'Estructura/header.php';
?>
    <main class="container my-5">
        <div class="bg-light text-dark p-3 rounded shadow">
            <h3 class="text-center">Lista de Autos</h3>

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
            <div class="w-100 d-flex justify-content-center">
            <a href="../../index.php" class="btn btn-success fs-5 w-50">Volver</a>
            </div>
        </div>
    </main>
</body>

</html>