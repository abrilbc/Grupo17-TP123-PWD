<?php
    include_once('../Vista/Estructura/header.php');
    include_once('../Model/Connector/BaseDatos.php');
    include_once('../Model/Persona.php');
    include_once('../Control/AbmPersona.php');
?>
    <main class="container mb-5">
    <div class="p-4 border rounded-3 shadow-sm bg-light">
        <h2 class="mb-4 text-center">Lista de Personas</h2>
        
        <?php
        $ambObjPersona = new AbmPersona();
        $colPersonas = $ambObjPersona->obtenerColeccionPersonas();

        if (count($colPersonas) > 0) {
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

            foreach ($colPersonas as $persona) {
                $resp .= <<<FILA
                <tr>
                    <td class="text-center">{$persona->getNroDni()}</td>
                    <td class="text-center">{$persona->getNombre()}</td>
                    <td class="text-center">{$persona->getApellido()}</td>
                    <td class="text-center">{$persona->getFechaNacimiento()}</td>
                    <td class="text-center">{$persona->getTel()}</td>
                    <td class="text-center">{$persona->getDomicilio()}</td>
                </tr>
                FILA;
            }
            $resp .= <<<HTML
                </tbody>
            </table>
            HTML;
        } else {
            $resp = "<p class='text-center fs-5'>No hay personas cargadas</p>";
        }
        echo $resp;
        ?>
        
        <!-- Botón para regresar -->
        <div class="d-flex justify-content-center mt-4">
            <a onclick="history.back()" class="btn btn-success fs-5 w-50">Volver</a>
        </div>
    </div>
</main>
</body>
</html>