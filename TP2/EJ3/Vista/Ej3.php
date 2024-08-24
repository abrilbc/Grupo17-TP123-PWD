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
            <form action="../Vista/Action/verificaPass.php" method="post" name="miFormulario" id="miFormulario">
            <h1 class="text-center text-secondary h2 mb-4 mt-3">Member Login</h1>
            <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>
                    </span>
                    <input name="usuario" id="usuario" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v2h4v11H2V5h4V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v2h2V3a1 1 0 0 0-1-1z"/>
                        </svg>
                    </span>
                    <input name="contrasenia" id="contrasenia" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" required>
                </div>
                <button type="submit" class="btn btn-success w-100 mb-3">Ingresar</button>
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
                var tieneLetra = /[a-zA-Z]/.test(contrasenia);
                var tieneNumero = /[0-9]/.test(contrasenia);

                if (!tieneLetra || !tieneNumero) {
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