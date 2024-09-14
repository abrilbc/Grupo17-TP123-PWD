<?php 
include_once './Estructura/header.php';
?>
    <div class="d-flex justify-content-center align-items-center bg-dark" style="height: 555px">
        <div class="shadow-lg rounded p-4 bg-light w-25 w-md-50 min-vh-50">
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
                <a href="../../" class="btn btn-secondary w-100 mb-3">Volver</a>
            </form>
        </div>
    </div>
    

    <script src="./js/validacion.js"></script>
</body>
</html>