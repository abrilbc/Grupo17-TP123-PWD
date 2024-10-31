<?php
include_once 'Vista/Estructura/header.php';
?>
<div class="container my-5">
    <div class="text-center mb-4">
        <h2 class="text-success">Trabajo Pr&aacute;ctico N°1</h2>
        <p class="text-muted fs-5">Seleccionar el ejercicio que desea probar</p>
    </div>
    <div class="row d-flex justify-content-center">
        <?php 
        $ejercicios = [
            ["Ejercicio 1", "Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo...", "Vista/Ejercicio1.php"],
            ["Ejercicio 2", "Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada de la materia Programación Web Dinámica por cada día de la semana...", "Vista/Ejercicio2.php"],
            ["Ejercicio 3", "Crear una página php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php...", "Vista/Ejercicio3.php"],
            ["Ejercicio 4", "Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar esos datos a otra página en donde se muestren mensajes distintos dependiendo si la persona es mayor de edad o no...", "Vista/Ejercicio4.php"],
            ["Ejercicio 5", "Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radio buttons” se ingrese el nivel de estudio de la persona...", "Vista/Ejercicio5.php"],
            ["Ejercicio 6", "Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes deportes que practica un alumno...", "Vista/Ejercicio6.php"],
            ["Ejercicio 7", "Crear una página con un formulario que contenga dos inputs de tipo texto y un select. En los inputs se ingresarán números y el select debe dar la opción de una operación matemática...", "Vista/Ejercicio7.php"],
            ["Ejercicio 8", "La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente...", "Vista/Ejercicio8.php"]
        ];

        foreach ($ejercicios as $ejercicio) {
            echo '
            <div class="col-md-5 col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-header bg-success text-white text-center">
                        <h5 class="my-1">'.$ejercicio[0].'</h5>
                    </div>
                    <div class="card-body d-flex flex-column align-items-center bg-white text-center rounded">
                        <p class="card-text" style="font-size: 16px;">'.$ejercicio[1].'</p>
                        <a href="'.$ejercicio[2].'" class="btn btn-outline-success w-75 fs-6 fw-bold mt-auto">Ir</a>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
    <div class="text-center mt-4">
        <a href="../" class="w-25">
            <button class="btn btn-secondary pe-4 ps-4 fs-4">Volver</button>
        </a>
    </div>
</div>
<?php
include_once '../Vista/Estructura/footer.php';
?>
