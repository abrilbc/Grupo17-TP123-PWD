<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Auto</title>
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
                <div class="bg-light p-4" style="width: 100%; max-width: 600px">
                    <h3 class="text-center" style="color:black">Buscar Auto por código de Patente</h3>
                    <form action="./Action/actionBuscarAuto.php" method="POST" id="form" onsubmit="return validacion(event)">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg rounded" placeholder="Ej: ADC 152" id="Patente" name="Patente">
                            <button class="btn btn-info btn-lg" type="submit">Buscar</button>
                        </div>
                        <span class="text-danger" id="msjErrorPatente"></span>
                    </form>
                </div>
            </div>
            <a href="../../index.php" class="btn btn-primary">Volver</a>
        </div>
    </main>
    <script src="./Js/jquery-v3_7_1.js"></script>
    <script src="./Js/validarPatente.js"></script>
</body>

</html>