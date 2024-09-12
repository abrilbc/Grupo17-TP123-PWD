$(document).ready(function () {
    window.validacion = function (event) {
        let patenteCod = $('#Patente').val();
        let esValida = true;

        const expresionRegular = /^[A-Z]{3}\s\d{3}$/;

        if (!expresionRegular.test(patenteCod)) {
            $('#msjErrorPatente').text('Error: Ingrese un formato de patente válido. Ej: ABC 123');
            $('#Patente').addClass('is-invalid');
            esValida = false;
        } else {
            $("#msjErrorPatente").text("");
            $("#Patente").removeClass("is-invalid").addClass('is-valid');
        }

        if (!esValida) {
            event.preventDefault();
        }

        return esValida;
    }
});
