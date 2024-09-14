<?php

include_once '../../Control/ControlUsuario.php';
include_once '../../Utils/funciones.php';
include_once '../Estructura/header.php';

$loginExitoso = false;

$datos= darDatosSubmitted();
$usuarios = [
    ["usuario" => "Rodrigo", "clave" => "rodri123"],
    ["usuario" => "Martincho", "clave" => "Nomerentielquehiciste1"],
    ["usuario" => "Brisa", "clave" => "loveskzlove1"]
];
$objControl= new ControlUsuario($usuarios);   

$loginResultado = $objControl->verificarUsuario($datos);

?>
<div class="container mt-5">
    <div class="p-4 border rounded-3 shadow-sm centrar">
        <h2 class="mb-4 text-center">Resultado de la Autenticación</h2>
        <p class="texto-normal mb-5 fs-5 text-center">
            <h2 class="text-dark text-center">
                <?php  
                    echo $loginResultado;
                ?>
            </h2>
        </p>
        <div class="w-100 d-flex align-items-center justify-content-center flex-column">
            <button type="button" class="btn btn-success fs-5 text-white w-25" onclick="history.back()">Volver</button>
        </div>
    </div>
</div>
</body>
</html>
