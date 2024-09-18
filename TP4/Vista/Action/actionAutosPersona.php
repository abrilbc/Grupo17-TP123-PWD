<?php
    include_once('../Estructura/header.php');
    include_once('../../Model/Connector/BaseDatos.php');
    include_once('../../Model/Persona.php');
    include_once('../../Model/Auto.php');
    include_once('../../Control/AbmPersona.php');
    include_once('../../Control/AbmAuto.php');
?>
    <main class="container mb-5">
    <div class="p-4 border rounded-3 shadow-sm bg-light">
        <h2 class="mb-4 text-center">Datos personales</h2>

        <?php
        $dniPersona = $_POST['NroDni'];

        $ambObjPersona = new AbmPersona();
        $datosPersona = $ambObjPersona->obtenerDatosObjPersona($dniPersona);

        $abmObjAuto = new AbmAuto();
        $autos = $abmObjAuto->obtenerAutoPorDNI($dniPersona);

        if ($datosPersona !== null){
            $resp = <<<HTML
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center fs-5">DNI</th>
                        <th class="text-center fs-5">Nombre</th>
                        <th class="text-center fs-5">Apellido</th>
                        <th class="text-center fs-5">Fecha Nacimiento</th>
                        <th class="text-center fs-5">Teléfono</th>
                        <th class="text-center fs-5">Domicilio</th>
                    </tr>
                </thead>
                <tbody>
            HTML;
            $resp .= <<<FILA
                <tr>
                    <td class="text-center">{$datosPersona->getNroDni()}</td>
                    <td class="text-center">{$datosPersona->getNombre()}</td>
                    <td class="text-center">{$datosPersona->getApellido()}</td>
                    <td class="text-center">{$datosPersona->getFechaNacimiento()}</td>
                    <td class="text-center">{$datosPersona->getTel()}</td>
                    <td class="text-center">{$datosPersona->getDomicilio()}</td>
                </tr>
            FILA;
            $resp .= <<<HTML
                </tbody>
            </table>
            HTML;
            if (count($autos)>0){
                $resp .= <<<HTML
                    <h3 class="mb-4 text-center">Vehiculos registrados</h3>
                        <table class="table table-striped table-bordered rounded">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">Patente</th>
                                    <th class="text-center">Marca</th>
                                    <th class="text-center">Modelo</th>
                                </tr>
                            </thead>
                            <tbody>
            HTML;
            foreach ($autos as $auto){
                $resp .= <<<FILA
                    <tr>
                        <td class="text-center">{$auto->getPatente()}</td>
                        <td class="text-center">{$auto->getMarca()}</td>
                        <td class="text-center">{$auto->getModelo()}</td>
                    </tr>
            FILA;
            }
            $resp .= <<<HTML
                </tbody>
            </table>
            HTML;  
            } else {
                $resp .="<p class='text-center fs-5 fw-bold'>Esta persona no tiene vehiculos registrados.</p>";
            }
        } else {
            $resp = "<p class='text-center fs-5'>No hay persona cargada con ese numero de documento</p>";
        }
        echo $resp;
        ?>
        <div class="d-flex justify-content-center mt-4">
            <a onclick="history.back()" class="btn btn-secondary fs-5 w-50">Volver</a>
        </div>
    </div>
</main>
</body>
</html>