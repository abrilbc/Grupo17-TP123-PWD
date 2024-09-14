$(document).ready(function () {
    // Array con los ids de los campos a validar
    const campos = [
        { id: "titulo", tipo: "texto" },
        { id: "actores", tipo: "texto" },
        { id: "director", tipo: "texto" },
        { id: "guion", tipo: "texto" },
        { id: "produccion", tipo: "texto" },
        { id: "anio", tipo: "numero", maxLength: 4 },
        { id: "nacionalidad", tipo: "texto" },
        { id: "genero", tipo: "texto" },
        { id: "duracion", tipo: "numero", minLength: 2, maxLength: 3 },
        { id: "sinopsis", tipo: "texto" }
    ];

    // Iterar sobre los campos y agregar eventos de validación
    campos.forEach(function (campo) {
        $("#" + campo.id).on("input blur", function () {
            validarCampo(campo);
        });
    });

    // Función para validar cada campo en tiempo real
    function validarCampo(campo) {
        let valor = $("#" + campo.id).val();
        let esValido = true;

        // Restablecer los estilos
        $("#" + campo.id).css("border", "1px solid #ced4da");

        // Validar campos de texto
        if (campo.tipo === "texto" && !valor) {
            mostrarError(campo.id, "Este campo es obligatorio.");
            esValido = false;
        } 
        // Validar campos de número
        else if (campo.tipo === "numero") {
            if (campo.id === "duracion" && (valor.length < campo.minLength || valor.length > campo.maxLength)) {
                mostrarError(campo.id, "Debe tener entre " + campo.minLength + " y " + campo.maxLength + " dígitos.");
                esValido = false;
            } else if (valor.length !== campo.maxLength && campo.id !== "duracion") {
                mostrarError(campo.id, "Debe tener " + campo.maxLength + " caracteres.");
                esValido = false;
            }
        }

        // Limpiar errores si es válido
        if (esValido) {
            $("#" + campo.id).next(".error").remove();
        }
    }

    // Función para mostrar mensajes de error
    function mostrarError(id, mensaje) {
        let campo = $("#" + id);
        campo.css("border", "1px solid red");
        
        // Mostrar mensaje de error solo si no existe ya
        if (campo.next(".error").length === 0) {
            campo.after("<span class='error text-danger'>" + mensaje + "</span>");
        }
    }
});

$(document).ready(function() {
    $('#custom-file-button').click(function(e) {
        e.preventDefault();  // Evitar el comportamiento predeterminado del botón
        $('#archivo').click();  // Simular un clic en el input file real
    });

    // Cambiar el texto cuando se seleccione un archivo
    $('#archivo').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $('#custom-file-label').text(fileName ? fileName : 'No se ha seleccionado ningún archivo');
    });
});