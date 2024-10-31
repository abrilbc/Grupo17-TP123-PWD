<?php
include_once 'EJ2/Vista/Estructura/header.php';
?>

<div class="container my-5">
    <div class="text-center mb-4">
        <h2 class="text-success">Trabajos Prácticos</h2>
        <p class="text-muted">Selecciona un ejercicio para ver los detalles y trabajar en ellos.</p>
    </div>
    <div class="row d-flex justify-content-center">
        <?php 
        $ejercicios = [
            ["Ejercicio 1", "Investigue y pruebe la validación de formularios usando alguna librería o framework JavaScript (JQuery, Mootools, Dojo, Prototype, etc).", "#"],
            ["Ejercicio 2", "Seleccionar una de las librerías e implementar la validación de los siguientes ejercicios. Realizar la validación de los formularios creados en el TP 2, chequear que se hayan cargado todos los datos necesarios antes de ser enviados al servidor y que sean del tipo correcto.", "EJ2/"],
            ["Ejercicio 3", "Crear una nueva página PHP con un formulario HTML de login que solicite el usuario y la contraseña para loguearse. Los datos del formulario son enviados a un script verificaPass.php que contiene un arreglo asociativo.", "EJ3/Vista/Ej3.php"],
            ["Ejercicio 4", "Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista de géneros incluye: Comedia, Drama, Terror, Románticas, Suspenso, Otras. Aplicar Bootstrap y validar.", "EJ4/Vista/Ej4.php"]
        ];

        foreach ($ejercicios as $ejercicio) {
            echo '
            <div class="col-md-6 mb-4 fs-5">  <!-- Adjusted for two cards per row -->
                <div class="card border-0 shadow h-100">
                    <div class="card-header bg-success text-white text-center">
                        <h5 class="my-1">'.$ejercicio[0].'</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text">'.$ejercicio[1].'</p>
                        <a href="'.$ejercicio[2].'" class="btn btn-outline-success w-75 fs-6 fw-bold">Ir</a>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
    <div class="text-center mt-4">
        <a href="../" class="w-25">
            <button class="btn btn-secondary ps-5 pe-5 fs-5">Volver</button>
        </a>
    </div>
</div>

<?php
include_once '../Vista/Estructura/footer.php';
?>
