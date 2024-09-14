<?php
include_once('./Estructura/header.php');
?>
        <div class="container">
        <div class="p-4 border rounded-3 shadow-sm">
            <h2>CONSIGNA - Ejercicio 1</h2>
            <p class="fs-5">
                Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script 
                –vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. 
                Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.
            </p>
            <div class="mt-5">
                <form action="./Action/action_ej1.php" method="post" id="miFormulario" class="w-50 mx-auto">
                    <div class="mb-3">
                        <label for="number" class="fs-4 form-label">Ingrese el número a comparar:</label>
                        <input type="number" id="number" name="number" class="form-control p-3 fs-5" required>
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-success fs-5" value="Enviar">
                        <a href="../" class="mt-3 btn btn-secondary fs-5 w-100 mb-2">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    </script>
</body>
</html>