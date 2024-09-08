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
    include_once('../Estructura/menu/menu.php');
    include_once('../Estructura/header.php');
    ?>
    <main class="container">
        <div class="card col-12 text-center">
            <div class="container text-center">
                <div class="col d-flex text-center flex-column align-items-center justify-content-center p-5 ">

                    <form action="./Action/actionNuevaPersona.php" class="d-flex flex-column gap-3" style="width:80%" method="POST" id="miFormulario">
                        <h3>Agregar una nueva persona</h3>

                        <input class="form-control p-3" type="text" id="NroDni" name="NroDni" placeholder="Número de DNI">
                        <span id="personaDNI"></span>

                        <input class="form-control p-3" type="text" id="Apellido" name="Apellido" placeholder="Apellido">
                        <span id="personaApellido"></span>

                        <input class="form-control p-3" type="text" id="Nombre" name="Nombre" placeholder="Nombre">

                        <span id="personaNombre"></span>
                        <input class="form-control p-3" type="text" id="fechaNac" name="fechaNac" placeholder="Fecha de nacimiento (DD/MM/YYYY)">
                        <span id="personaFechaNac"></span>

                        <input class="form-control p-3" type="text" id="Telefono" name="Telefono" placeholder="Teléfono (sin el 15)">
                        <span id="personaTelefono"></span>

                        <input class="form-control p-3" type="text" id="Domicilio" name="Domicilio" placeholder="Domicilio">
                        <span id="personaDomicilio"></span>
                        <input class="btn btn-success p-2" type="submit" style="width:20%" onsubmit="return validar();" value="Agregar">
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="Js/validarPersona.js"></script>
</body>

</html>