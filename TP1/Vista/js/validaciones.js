
// VALIDACION PARA EL FORMULARIO 2
$(document).ready(function() {
    $("#miFormulario-2").submit(function(event) {
        let valid = true;
        let mensajeError = "";
        const dias = ["lunes", "martes", "miercoles", "jueves", "viernes"];
        
        dias.forEach(function(dia) {
            let value = $("#" + dia).val();
            if (value === "" || value < 0 || value > 24) {
                mensajeError += "Por favor, ingrese un número válido para " + dia + ".\n";
                valid = false;
            }
        });

        if (!valid) {
            alert(mensajeError);
            event.preventDefault();
        }
    });
});

//VALIDACION PARA EL FORMULARIO 3
$(document).ready(function() {
    $("#miFormulario-3").submit(function(event) {
        let validacion = true;
        let mensajeError = "";

        const nameRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
        let nombre = $("#nombre").val().trim();
        let apellido = $("#apellido").val().trim();
        let edad = $("#edad").val().trim();

        if (nombre === "" || !nameRegex.test(nombre)) {
            validacion = false;
            mensajeError += "Nombre ingresado no válido.\n";
        }
        if (apellido === "" || !nameRegex.test(apellido)) {
            validacion = false;
            mensajeError += "Apellido ingresado no válido.\n";
        }
        if (edad === "" || edad <= 0 || edad > 105) {
            validacion = false;
            mensajeError += "Edad ingresada no válida.\n";
        }
        
        if (!validacion) {
            alert(mensajeError);
            event.preventDefault();
        }
    });
});

// VALIDACION PARA EL FORMULARIO 4
$(document).ready(function() {
    $("#miFormulario-4").submit(function(event) {
        let validacion = true;
        let mensajeError = "";

        const nameRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
        let nombre = $("#nombre").val().trim();
        let apellido = $("#apellido").val().trim();
        let edad = $("#edad").val().trim();

        if (nombre === "" || !nameRegex.test(nombre)) {
            validacion = false;
            mensajeError += "Nombre ingresado no válido.\n";
        }
        if (apellido === "" || !nameRegex.test(apellido)) {
            validacion = false;
            mensajeError += "Apellido ingresado no válido.\n";
        }
        if (edad === "" || edad <= 0 || edad > 105) {
            validacion = false;
            mensajeError += "Edad ingresada no válida.\n";
        }
        
        if (!validacion) {
            alert(mensajeError);
            event.preventDefault(); // Previene el envío del formulario si hay errores
        }
    });
});

// VALIDACION PARA EL FORMULARIO 5
$(document).ready(function() {
    $("#miFormulario-5").submit(function(event) {
        let errores = [];
        const nameRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
        let nombre = $("#nombre").val().trim();
        let apellido = $("#apellido").val().trim();
        let edad = $("#edad").val().trim();

        // Validar nombre
        if (nombre === "" || !nameRegex.test(nombre)) {
            errores.push("Nombre ingresado no válido");
        }

        // Validar apellido
        if (apellido === "" || !nameRegex.test(apellido)) {
            errores.push("Apellido ingresado no válido");
        }

        // Validar edad
        if (edad === "" || edad <= 0 || edad > 105) {
            errores.push("Edad ingresada no válida");
        }

        // Validar nivel de estudios
        if (!$("input[name='estudios']:checked").val()) {
            errores.push("Por favor, seleccione un nivel de estudios.");
        }

        // Validar género
        if (!$("input[name='genero']:checked").val()) {
            errores.push("Por favor, seleccione un género.");
        }

        if (errores.length > 0) {
            alert(errores.join("\n")); // Muestra todos los errores juntos en un solo alert
            event.preventDefault(); // Previene el envío del formulario si hay errores
        }
    });
});

// VALIDACION PARA EL FORMULARIO 6

$(document).ready(function() {
    $('#miFormulario-6').submit(function(event) {
        let valid = true;
        let mensajeError = "";

        $('#mensaje-error').text('');

        $('input[required]').each(function() {
            if ($(this).val().trim() === '') {
                valid = false;
                mensajeError += "Por favor, complete todos los campos obligatorios.\n";
                return false;
            }
        });

        if (!$('input[name="estudios"]:checked').val()) {
            valid = false;
            mensajeError += "Por favor, seleccione su nivel de estudios.\n";
        }

        if (!$('input[name="genero"]:checked').val()) {
            valid = false;
            mensajeError += "Por favor, seleccione su género.\n";
        }

        let deportesSeleccionados = $('input[name="deportes[]"]:checked');
        if (deportesSeleccionados.length === 0) {
            valid = false;
            mensajeError += "Por favor, seleccione al menos un deporte.\n";
        }

        // Check if "Ningún deporte" is selected alone
        if ($('#ningun').is(':checked') && deportesSeleccionados.length > 1) {
            valid = false;
            mensajeError += "No se puede seleccionar 'Ningún deporte' junto con otros deportes.\n";
        }

        if (!valid) {
            $('#mensaje-error').text(mensajeError);
            event.preventDefault(); // Prevent form submission
        }
    });

    // Handle "Ningún deporte" checkbox behavior
    $('input[name="deportes[]"]').change(function() {
        if ($('#ningun').is(':checked')) {
            $('input[name="deportes[]"]').not('#ningun').prop('disabled', true);
        } else {
            $('input[name="deportes[]"]').not('#ningun').prop('disabled', false);
        }
    });
});