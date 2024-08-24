<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - TP 2</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: 'Jost';
            font-size: 13px;
            background-color: #FAF6ED;
        }

        .header {
            margin-bottom: 20px;
            width: 100%;
            height: 8em;
            background: url(assets/img/banner_tp2.png) no-repeat center center;
            background-size: contain;
            border-bottom: 1.5px solid #5C5B63;
            background-color: #FAF6ED; /* Este es el color de fondo */
        }
    </style>
</head>
<body>
<div class="header" style="background-color: white;"></div>
    <div name="box" class="d-flex justify-content-center align-items-center vh-100 w-100 p-3">
        <div class="all-form-box w-75 shadow mb-5 bg-white rounded">
            <div name="title-box" class="w-100 bg-light bg-gradient px-2">
            <svg width="12" height="12" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#00eeff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                <path d="M11 4H7.2C6.0799 4 5.51984 4 5.09202 4.21799C4.71569 4.40974 4.40973 4.7157 4.21799 5.09202C4 5.51985 4 6.0799 4 7.2V16.8C4 17.9201 4 18.4802 4.21799 18.908C4.40973 19.2843 4.71569 19.5903 5.09202 19.782C5.51984 20 6.0799 20 7.2 20H16.8C17.9201 20 18.4802 20 18.908 19.782C19.2843 19.5903 19.5903 19.2843 19.782 18.908C20 18.4802 20 17.9201 20 16.8V12.5M15.5 5.5L18.3284 8.32843M10.7627 10.2373L17.411 3.58902C18.192 2.80797 19.4584 2.80797 20.2394 3.58902C21.0205 4.37007 21.0205 5.6364 20.2394 6.41745L13.3774 13.2794C12.6158 14.0411 12.235 14.4219 11.8012 14.7247C11.4162 14.9936 11.0009 15.2162 10.564 15.3882C10.0717 15.582 9.54378 15.6885 8.48793 15.9016L8 16L8.04745 15.6678C8.21536 14.4925 8.29932 13.9048 8.49029 13.3561C8.65975 12.8692" stroke="#00eeff" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <span class="text-info">Cinem@s</span>
            </div>
            <div class="bg-white w-100 p-3 h-75 form-box">
                <form action="Action/action_ej4.php" method="post" onSubmit="return validar()" id="miFormulario">
                    <div name="form-box-row-1" class="d-flex justify-content-between mb-3">
                        <div name="input-titulo" class="w-50 ms-2 me-3">
                            <label for="titulo" class="fw-semibold">Título</label><br>
                            <input type="text" placeholder="Titulo" name="titulo" id="titulo" class="form-control" required>
                        </div>
                        <div name="input-actores" class="w-50 ms-3 me-2">
                            <label for="actores" class="fw-semibold">Actores</label><br>
                            <input type="text" placeholder="Actores" name="actores" id="actores" class="form-control" required>
                        </div>
                    </div>
                    <div name="form-box-row-2" class="d-flex justify-content-between mb-3">
                        <div name="input-director" class="w-50 ms-2 me-3">
                            <label for="director" class="fw-semibold">Director</label><br>
                            <input type="text" placeholder="Director" name="director" id="director" class="form-control" required>
                        </div>
                        <div name="input-guion" class="w-50 ms-3 me-2">
                            <label for="guion" class="fw-semibold">Guión</label><br>
                            <input type="text" placeholder="Guion" name="guion" id="guion" class="form-control" required>
                        </div>
                    </div>
                    <div name="form-box-row-3" class="d-flex justify-content-between mb-3">
                        <div name="input-produccion" class="w-50 ms-2 me-3">
                            <label for="produccion" class="fw-semibold">Producción</label><br>
                            <input type="text" name="produccion" id="produccion" class="form-control" required>
                        </div>
                        <div name="input-anio" class="w-50 ms-3 me-2">
                            <label for="anio" class="fw-semibold">A&ntilde;o</label><br>
                            <input type="number" name="anio" id="anio" class="form-control w-25" required>
                        </div>
                    </div>
                    <div name="form-box-row-4" class="d-flex justify-content-between mb-3">
                        <div name="input-nacionalidad" class="w-50 ms-2 me-3">
                            <label for="nacionalidad" class="fw-semibold">Nacionalidad</label><br>
                            <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" required>
                        </div>
                        <div name="input-nacionalidad" class="w-50 ms-3 me-2">
                            <label for="genero" class="fw-semibold">G&eacute;nero</label><br>
                            <select name="genero" id="genero" class="form-control w-50" required>
                                <option value="">G&eacute;nero</option>
                                <option value="Accion">Accion</option>
                                <option value="Comedia">Comedia</option>
                                <option value="Terror">Terror</option>
                                <option value="Sci-fi">Ciencia Ficci&oacute;n</option>
                                <option value="Fantasia">Fantasia</option>
                            </select>
                        </div>
                    </div>
                    <div name="form-box-row-5" class="d-flex mb-3">
                        <div name="input-duracion" class="w-50 ms-2 me-3">
                            <label for="duracion" class="fw-semibold">Duraci&oacute;n</label><br>
                            <input type="number" name="duracion" id="duracion" class="form-control" required>
                            <p>(minutos)</p>
                        </div>
                        <div name="input-edad" class="w-75 ms-3 me-2">
                            <label for="edad" class="fw-semibold">Restricciones de edad</label><br>
                            <div class="w-75 p-2 d-flex justify-content-between">
                            <input class="form-check-input" type="radio" name="edad-radio" id="todo_publico" value="Todos" checked>Todo Público
                            <input class="form-check-input" type="radio" name="edad-radio" id="mayores_siete" value="+7">Mayores de 7 años
                            <input class="form-check-input" type="radio" name="edad-radio" id="mayor_edad" value="+18">Mayores de 18 años
                            </div>
                        </div>
                    </div>
                    <div name="sinopsis-box" class="ms-2 me-2">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea name="sinopsis" id="sinopsis" class="form-control"></textarea>
                    </div>
                    <div class="pt-3 w-100 d-flex justify-content-end mb-3 mt-3">
                        <input type="submit" value="Enviar" class="btn bg-info bg-gradient text-white p-1 pe-3 ps-3">
                        <input type="reset" value="Borrar" class="btn bg-light bg-gradient ms-2 p-1.5 pe-3 ps-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function validar() {
            let validacion = true;
            let errores = [];

            // Array con los ids de los campos a validar (arreglo con formato JSON)
            const campos = [
                { id: "titulo", tipo: "texto" },
                { id: "actores", tipo: "texto" },
                { id: "director", tipo: "texto" },
                { id: "guion", tipo: "texto" },
                { id: "produccion", tipo: "texto" },
                { id: "anio", tipo: "numero", maxLength: 4 },
                { id: "nacionalidad", tipo: "texto" },
                { id: "genero", tipo: "texto" },
                { id: "duracion", tipo: "numero", maxLength: 3 },
                { id: "sinopsis", tipo: "texto" }
            ];

            // Limpiar estados previos
            $("input, textarea, select").css("border", "1px solid #ced4da"); // Restaurar bordes originales

            //Recorremos cada campo y se les da las alertas si es necesario
            campos.forEach(campo => {
                let valor = $("#" + campo.id).val();
                if (campo.tipo === "texto" && !valor) {
                    errores.push("El campo '" + campo.id + "' es obligatorio.");
                    $("#" + campo.id).css("border", "1px solid red");
                } else if (campo.tipo === "numero" && valor.length !== campo.maxLength) {
                    errores.push("Ingrese un valor válido para el campo '" + campo.id + "' (" + campo.maxLength + " caracteres).");
                    $("#" + campo.id).css("border", "1px solid red");
                }
            });

            if (errores.length > 0) {
                alert(errores.join("\n")); //Unimos todos los errores en una sola alerta
                validacion = false;
            }

            return validacion;
        }
    </script>
</body>
</html>