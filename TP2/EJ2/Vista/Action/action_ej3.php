<?php
include_once '../../Control/Persona.php';
include_once '../../Utils/funciones.php';
include '../Estructura/header.php';

    $datos = darDatosSubmitted();
    if (!empty($datos)) {
        $persona = new Persona();
        $persona->setNombre($datos['nombre']);
        $persona->setApellido($datos['apellido']);
        $persona->setEdad($datos['edad']);
        $persona->setDireccion($datos['dire']);
    }
?>
    <div class="header"></div>
    <div class="container">
        <div class="centrar">
        <h2>RESULTADO</h2>
        <p class="fs-5">
            <?php
            echo "Hola, soy " . $persona->getNombre() . " " . $persona->getApellido() . 
            "<br>Tengo " . $persona->getEdad() . " años y vivo en " . $persona->getDireccion(); 
            ?>
        </p>
        <button type="button" class="btn btn-success fs-5 text-white" onclick="history.back()">Volver</button>
        </div>
    </div>
    <script>
    </script>
</body>
</html>