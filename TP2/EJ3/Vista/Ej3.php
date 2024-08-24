<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3-TP 2</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<div class="header"></div>
    <div class="container">
        <div class="centrar">
        <h2>CONSIGNA</h2>
        <p class="texto-normal">
            Crear una nueva página PHP con un formulario HTML de login en la que solicitan el usuario
            y la contraseña para loguearse. Los datos del formulario son enviados a un script
            verificaPass.php, donde se verifica con un arreglo asociativo que contiene los usuarios registrados.
            Si los datos ingresados coinciden con alguno de los almacenados en el arreglo, se muestra un mensaje
            de bienvenida. De lo contrario, se muestra un mensaje de error.
        </p>
        
        <form action="../Vista/Action/verificaPass.php" method="post" name="miFormulario" id="miFormulario">
            <label for="usuario">Ingrese su usuario:</label> <br>
            <input type="text" name="usuario" id="usuario" class="form-input" required> <br>
            <label for="contrasenia">Ingrese su contraseña:</label> <br>
            <input type="password" name="contrasenia" id="contrasenia" class="form-input" required> <br>
            <input type="submit" class="btn" value="Ingresar">
        </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#miFormulario').on('submit', function(event) {
                var usuario = ($('#usuario').val()).toLowerCase();
                var contrasenia = ($('#contrasenia').val()).toLowerCase();
                
                // Validar que los campos no estén vacíos
                if (!usuario || !contrasenia) {
                    alert("Debes ingresar un nombre de usuario y una contraseña.");
                    event.preventDefault();
                    return;
                }

                // Validar la longitud de la contraseña
                if (contrasenia.length < 8) {
                    alert("La contraseña debe tener al menos 8 caracteres.");
                    event.preventDefault();
                    return;
                }

                // Validar que la contraseña no sea igual al nombre de usuario o que no contenga al nombre de usuario
                if (contrasenia.includes(usuario) || usuario.includes(contrasenia)) {
                    alert("La contraseña no puede ser igual ni contener el nombre de usuario, ni viceversa.");
                    event.preventDefault();
                    return;
}

                // Validar que la contraseña contenga al menos una letra y un número
                var hasLetter = /[a-zA-Z]/.test(contrasenia);
                var hasNumber = /[0-9]/.test(contrasenia);

                if (!hasLetter || !hasNumber) {
                    alert("La contraseña debe contener al menos una letra y un número.");
                    event.preventDefault();
                    return;
                }

                // Si todo está bien, se puede enviar el formulario
            });
        });
    </script>
</body>
</html>