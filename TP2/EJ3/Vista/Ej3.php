<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3-TP 2</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .header {
        margin-bottom: 0px;
        width: 100%;
        height: 8em;
        background: url(assets/img/banner_tp2.png) no-repeat center center;
        background-size: contain;
        border-bottom: 1.5px solid #5C5B63;
        }
    </style>

</head>
<body>
<div class="header" style="position: absolute; background-color: white;"></div>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-dark">
        <div class="shadow-lg rounded p-4 bg-light w-25 w-md-50 min-vh-50"> <!-- Modificado aquí -->
            <form action="../Vista/Action/verificaPass.php" method="post" name="miFormulario" id="miFormulario" onSubmit="return validar()">
            <h1 class="text-center text-secondary h2 mb-4 mt-3">Member Login</h1>
                <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 7a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 0 0-4 4v1h8v-1a4 4 0 0 0-4-4z"/>
                        </svg>
                    </span>
                    <input name="usuario" id="usuario" type="text" class="form-control rounded-0" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                            <path d="M11 6V4a3 3 0 0 0-6 0v2H2v9h12V6h-3zm-5-2a2 2 0 0 1 4 0v2H6V4z"/>
                        </svg>
                    </span>
                    <input name="contrasenia" id="contrasenia" type="password" class="form-control rounded-0" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
                </div>
                <button type="submit" class="btn btn-success w-100 mb-3">Login</button>
            </form>
        </div>
    </div>
    

    <script>
        function validar() {
            let valid = true;
            let errores = [];

            // Limpiar estados previos
            $("input").css("border", "1px solid #ced4da"); // Restaura los bordes anteriores

            // Obtener los valores de los campos
            const usuario = $("#usuario");
            const contrasenia = $("#contrasenia");

            // Validar usuario
            if (!usuario.val().trim()) {
                errores.push("El campo de usuario no puede estar vacío.");
                usuario.css("border", "1px solid red");
                valid = false;
            }

            // Validar contraseña
            if (!contrasenia.val().trim()) {
                errores.push("El campo de contraseña no puede estar vacío.");
                contrasenia.css("border", "1px solid red");
                valid = false;
            } else if (contrasenia.val().length < 8) {
                errores.push("La contraseña debe tener al menos 8 caracteres.");
                contrasenia.css("border", "1px solid red");
                valid = false;
            } else if (contrasenia.val() === usuario.val().trim()) {
                errores.push("La contraseña no puede ser igual al nombre de usuario.");
                contrasenia.css("border", "1px solid red");
                valid = false;
            } else if (!/[a-z]/i.test(contrasenia.val()) || !/\d/.test(contrasenia.val())) {
                errores.push("La contraseña debe contener letras y números.");
                contrasenia.css("border", "1px solid red");
                valid = false;
            }

            // Mostrar errores
            if (!valid) {
                alert(errores.join("\n")); // Unir todos los errores en una sola alerta
            }

            return valid;
        }

    </script>
</body>
</html>