<?php
include_once '../../Control/Calculadora.php';
include_once '../../Utils/funciones.php';
include '../Estructura/header.php';

$datos = darDatosSubmitted();
$objCalculadora = new Calculadora($datos);

$resultado = $objCalculadora->operar();
?>
<div class="container mb-5">
        <div class="p-4 border rounded-3 shadow-sm centrar">
            <h2 class="mb-4">RESOLUCIÓN</h2>
            <p class="texto-normal mb-5 fs-5">
                Crear una página con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación.
            </p>
            <form action="./Action/action_operacion.php" method="post" id="miFormulario" class="w-50 mx-auto">
                <div class="mb-3">
                    <label for="num1" class="form-label fs-5">Primer número:</label>
                    <input type="number" id="num1" name="num1" class="form-control p-2" disabled value="<?php echo $objCalculadora->getNumero1()?>">
                </div>
                <div class="mb-3">
                    <label for="num2" class="form-label fs-5">Segundo número:</label>
                    <input type="number" id="num2" name="num2" class="form-control p-2" disabled value="<?php echo $objCalculadora->getNumero2()?>">
                </div>
                <div class="mb-4">
                    <label for="operacion" class="form-label fs-5">Operación:</label>
                    <input type="text" value="<?php echo $objCalculadora->getOperacion()?>" class="form-select p-2 fs-5" disabled>
                </div>
                <div class="w-100 d-flex align-items-center flex-column">
                    <p class="fs-5">Resultado:</p>
                    <p class="fs-3 text-dark text-align-center mb-2">
                        <?php
                            echo $resultado;
                        ?>
                    </p>
                    <button type="button" class="mt-2 btn btn-success fs-5 text-white w-25" onclick="history.back()">Volver</button>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>