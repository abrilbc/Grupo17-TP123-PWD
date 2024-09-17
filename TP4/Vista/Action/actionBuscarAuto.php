<?php
require_once('../../../configuracion.php');
    include_once('../Estructura/header.php');
    include_once('../Estructura/menu/menuAction.php');
    ?>

<main class="container">
    <div class="card col-12 text-center m-5 shadow">
        <div class="container text-center">
            <div class="col d-flex text-center flex-column align-items-center justify-content-center p-5">
                
                <h3 class="pt-3">Autos encontrados</h3>

                <div class="w-100 text-start">
                    <?php
                    include_once('../../Model/Connector/BaseDatos.php');
                    include_once('../../Model/Auto.php');
                    include_once('../../Control/AbmAuto.php');
                    include_once('../../Model/Persona.php');
                    include_once('../../Control/AbmPersona.php');

                    $datos = darDatosSubmitted1();

                    $resp = "";
                    if (isset($datos['Patente'])) {
                        $patente = $datos['Patente'];

                        $abmAuto = new AbmAuto();
                        $abmPersona = new AbmPersona();

                        $auto = $abmAuto->obtenerDatosObjAuto($patente);

                        if ($auto !== null) {

                            $duenio = $auto->getObjDuenio();
                            $duenio->buscar();
                            $resp = <<<HTML
                            <table class="table table-striped table-bordered rounded">
                                <thead class="table-success">
                                    <tr>
                                        <th class="text-center">Patente</th>
                                        <th class="text-center">Marca</th>
                                        <th class="text-center">Modelo</th>
                                        <th class="text-center">Dueño</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">{$auto->getPatente()}</td>
                                        <td class="text-center">{$auto->getMarca()}</td>
                                        <td class="text-center">{$auto->getModelo()}</td>
                                        <td class="text-center">{$duenio->getNombre()} {$duenio->getApellido()}</td>
                                    </tr>
                                </tbody>
                            </table>
                            HTML;
                        } else {
                            $resp = "<p class='text-center text-danger'>No se encontró auto.</p>";
                        }
                    } else {
                        $resp = "<p class='text-center text-danger'>No se ingresó patente.</p>";
                    }
                    echo $resp;
                    ?>
                </div>
                    <a onclick="history.back()" class="btn btn-success fs-5 w-25 mb-3">Volver</a>
            </div>
        </div>
    </div>
</main>
