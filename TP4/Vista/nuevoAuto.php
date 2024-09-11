<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Auto</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/init.css">
</head>

<body>
    <?php
    include_once('../Estructura/menu/menu.php');
    include_once('../Estructura/header.php');
    ?>
    <main class="container">
        <div class="card col-12 text-center">
            <div class="container text-center">
                <div class="col d-flex text-center flex-column align-items-center justify-content-center p-5 ">

                    <form action="./Action/actionNuevoAuto.php" class="d-flex flex-column gap-3" style="width:80%" method="POST" id="miForm">
                        <h3>Agregar un auto nuevo</h3>

                        <input class="form-control p-3" type="text" id="Patente" name="Patente" placeholder="Patente (ADC 153)">
                        <span id="autoPatente"></span>

                        <input class="form-control p-3" type="text" id="Marca" name="Marca" placeholder="Marca (Honda)">
                        <span id="autoMarca"></span>

                        <input class="form-control p-3" type="text" id="Modelo" name="Modelo" placeholder="Año">
                        <span id="autoModelo"></span>

                        <input class="form-control p-3" type="text" id="DniDuenio" name="DniDuenio" placeholder="12345678">
                        <span id="dniPersona"></span>
                        <input class="btn btn-success p-2" type="submit" style="width:20%" onsubmit="return validar()" value="Agregar">
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="./Js/jquery-v3_7_1.js"></script>
    <script src="./Js/validacionNuevoAuto.js"></script>
</body>

</html>