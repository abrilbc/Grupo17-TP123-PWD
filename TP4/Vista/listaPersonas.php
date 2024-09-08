<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body>
    <?php
    include_once('../Estructura/menu/menu.php');
    include_once('../Estructura/header.php');
    ?>
    <main class="container">
        <div class="bg-dark text-white p-3">
            <?php
            include_once('../Model/Connector/BaseDatos.php');
            include_once('../Model/Persona.php');
            include_once('../Control/AbmPersona.php');

            $ambObjPersona = new AbmPersona();
            $colPersonas = $ambObjPersona->obtenerTodasLasPersonas();

            if (count($colPersonas) > 0) {
                $resp = <<<HTML
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">DNI</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Apellido</th>
                            <th class="text-center">Fecha Nacimiento</th>
                            <th class="text-center">Telefono</th>
                            <th class="text-center">Domicilio</th>
                        </tr>
                    </thead>
                    <tbody>
                HTML;

                foreach ($colPersonas as $persona) {
                    $resp .= <<<FILA
                    <tr>
                        <td><a href="autosPersona.php?dni={$persona->getNroDni()}">{$persona->getNroDni()}</a></td>
                        <td>{$persona->getNombre()}</td>
                        <td>{$persona->getApellido()}</td>
                        <td>{$persona->getFechaNacimiento()}</td>
                        <td>{$persona->getTel()}</td>
                        <td>{$persona->getDomicilio()}</td>
                    </tr>
                    FILA;
                }

                $resp .= <<<HTML
                    </tbody>
                </table>
                HTML;
            } else {
                $resp = "<p>No hay personas cargadas</p>";
            }
            echo $resp;
            ?>
            <!-- poner para ir al menu acá -->
            <a href="#" class="btn btn-primary">Volver</a>
        </div>
    </main>
</body>

</html>