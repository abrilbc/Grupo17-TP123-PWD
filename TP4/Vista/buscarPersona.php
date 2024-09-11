<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Persona</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body>
    <?php
    include_once('../Estructura/menu/menu.php');
    include_once('../Estructura/header.php');
    ?>
    <main class="container">
        <div class="bg-dark text-white">
            <div class="d-flex justify-content-center align-items-center" style="height: 450px;">
                <div>
                    <h3 class="text-center">Buscar persona por DNI</h3>
                    <form onsubmit="return validar()" action="./Action/actionBuscarPersona.php" method="POST" id="form">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg rounded" placeholder="Ej: 12345678"
                                id="NroDni" name="NroDni">
                            <span class="text-danger" id="msjErrorDNI"></span>
                        </div>
                        <button class="btn btn-info" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
            <a href="../../index.php" class="btn btn-primary">Volver</a>
        </div>
    </main>
    <script src="./Js/validarBusquedaPersona.js"></script>
</body>

</html>