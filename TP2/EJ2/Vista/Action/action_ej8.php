<?php
include_once '../../Control/Entrada.php';
include_once '../../Utils/funciones.php';
include '../Estructura/header.php';

$datos = darDatosSubmitted();

$objEntrada = new Entrada($datos);

$precio = $objEntrada->calcularPrecio();
$edad = $objEntrada->getEdad();
$estudiante = $objEntrada->getEstudiante();

?>
<div class="container mb-5">
    <div class="p-4 border rounded-3 shadow-sm centrar">
        <h2 class="mb-4">CONSIGNA y RESOLUCIÓN</h2>
        <p class="texto-normal mb-5 fs-5">
            La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente. Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una página web. Si es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. Agregar un botón para limpiar el formulario y volver a consultar.
        </p>
        <h3 class="mb-4">Precio Calculado</h3>
        <form action="" method="" id="miFormulario" class="w-50 mx-auto">
            <div class="mb-3">
                <label for="edad" class="form-label fs-5">Edad:</label>
                <input type="number" id="edad" name="edad" class="form-control p-2" value="<?php echo $edad; ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="estudiante" class="form-label fs-5">¿Es estudiante?</label>
                <input type="text" id="estudiante" name="estudiante" class="form-control p-2" value="<?php echo $estudiante; ?>" disabled>
            </div>
            <h3 class="fs-5 mt-4">El precio de su entrada sería de:</h3>
            <h2 class="mt-2 mb-4"><span>$<?php echo $precio; ?></span></h2>
            <div class="d-flex align-items-center flex-column">
                <button type="button" class="mt-2 btn btn-success fs-5 text-white w-25" onclick="history.back()">Volver</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>