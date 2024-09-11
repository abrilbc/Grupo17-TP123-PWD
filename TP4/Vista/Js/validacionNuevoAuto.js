function validar() {

    let validacion = true // bandera

    let patente = $("#Patente").val()
    let marca = $("#Marca").val()
    let modelo = $("#Modelo").val()
    let dniDuenio = $("#DniDuenio").val()

    const expresionRegularPatente = /^[A-Z]{3}\s\d{3}$/
    const expresionRegularDNI = /^\d{1,8}$/

    $("span[id^='auto'], span[id^='dni']").text("") // para limpiar

    if (patente.trim() === '') {
        $("#autoPatente").text("Se requiere patente")
        validacion = false
    } else if (!expresionRegularPatente.test(patente)) {
        $("#autoPatente").text("El formato de patente no es válido. Recuerde que son tres letras mayúsculas y tres números.'.")
        validacion = false
    }

    if (marca.trim() === '') {
        $("#autoMarca").text("Se requiere marca")
        validacion = false
    }

    if (modelo.trim() === '') {
        $("#autoModelo").text("Se requiere modelo")
        validacion = false
    }

    if (dniDuenio.trim() === '') {
        $("#dniPersona").text("DNI requerido")
        validacion = false
    } else if (!expresionRegularDNI.test(dniDuenio)) {
        $("#dniPersona").text("Recuerde que el limite es hasta 8 digitos y NO se permiten letras")
        validacion = false
    }

    return validacion
}

document.addEventListener('DOMContentLoaded', function () {
    let form = document.getElementById('miForm')

    form.addEventListener('submit', function (event) {
        if (!validar()) {
            event.preventDefault()
        }
    })
})