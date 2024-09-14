<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Persona</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/init.css">
</head>

<body>
    <?php
    include_once('../Vista/Estructura/header.php');
    ?>
    <main class="container">
        <div class="card col-12 text-center">
            <div class="container text-center">
                <div class="col d-flex text-center flex-column align-items-center justify-content-center p-5 ">

                    <form onsubmit="return validar()" action="./Action/actionNuevaPersona.php" class="d-flex flex-column gap-3" style="width:80%" method="POST" id="miFormulario">
                        <h3>Agregar una nueva persona</h3>

                        <input class="form-control p-3" type="text" id="NroDni" name="NroDni" placeholder="Número de DNI">
                        <span class="text-danger" id="personaDNI"></span>

                        <input class="form-control p-3" type="text" id="Apellido" name="Apellido" placeholder="Apellido">
                        <span class="text-danger" id="personaApellido"></span>

                        <input class="form-control p-3" type="text" id="Nombre" name="Nombre" placeholder="Nombre">
                        <span class="text-danger" id="personaNombre"></span>

                        <input class="form-control p-3" type="text" id="fechaNac" name="fechaNac" placeholder="Fecha de nacimiento (DD/MM/YYYY)">
                        <span class="text-danger" id="personaFechaNac"></span>

                        <input class="form-control p-3" type="text" id="Telefono" name="Telefono" placeholder="Teléfono (sin el 15)">
                        <span class="text-danger" id="personaTelefono"></span>

                        <input class="form-control p-3" type="text" id="Domicilio" name="Domicilio" placeholder="Domicilio">
                        <span class="text-danger" id="personaDomicilio"></span>

                        <input class="btn btn-success p-2" type="submit" style="width:20%" value="Agregar">
                        <a onclick="history.back()" class="btn btn-success fs-5 w-50">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="./Js/jquery-v3_7_1.js"></script>
    <script src="./Js/validarPersona.js"></script>
</body>

</html>