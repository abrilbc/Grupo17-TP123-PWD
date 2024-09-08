$(document).ready(function () {
    window.validacion = function (event) {
        let patenteCod = $('#Patente').val()

        let esValida = true

        const expresionRegular = /^[A-Z]{3}\s\d{3}$/ // para que contenga valores alfanumericos de la patente

        if (!expresionRegular.test(patenteCod)) {
            $('#msjErrorPatente').text('Ocurrió un error. Ingrese un formato de patente válido.')
            $('#Patente').addClass('error')
            event.preventDefault()
            esValida = false
        } else {
            $("#msjErrorPatente").text("");
            $("#Patente").removeClass("error");

        }

        return esValida
    }
})