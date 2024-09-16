function validar() {

    let validacion = true // bandera

    let patente = $("#Patente")
    let marca = $("#Marca")
    let modelo = $("#Modelo")
    let dniDuenio = $("#DniDuenio")

    const expresionRegularPatente = /^[A-Z]{3}\s\d{3}$/
    const expresionRegularDNI = /^\d{1,8}$/
    const expresionRegularNombres = /^[a-zA-Z0-9]+$/
    const expresionRegularNumeros = /^\d+$/

    //spans
    let msjPatente = $("#autoPatente")
    let msjMarca = $("#autoMarca")
    let msjModelo = $("#autoModelo")
    let msjDniDuenio = $("#dniPersona")

    if (patente.val().trim() === '') {
        agregarError(patente, msjPatente, "Requiere patente")
        validacion = false
    } else if (!expresionRegularPatente.test(patente.val().trim())) {
        agregarError(patente, msjPatente, "Formato de patente inválido")
        validacion = false
    } else {
        limpiarValidacion(patente, msjPatente)
    }

    if (marca.val().trim() === "") {
        agregarError(marca, msjMarca, "Requiere marca")
        validacion = false
    } else if (!expresionRegularNombres.test(marca.val().trim())) {
        agregarError(marca, msjMarca, "Requiere un nombre válido")
        validacion = false
    } else {
        limpiarValidacion(marca, msjMarca)
    }

    if (modelo.val().trim() === "") {
        agregarError(modelo, msjModelo, "Requiere marca")
        validacion = false
    } else if (!expresionRegularNumeros.test(modelo.val().trim())) {
        agregarError(modelo, msjModelo, "Requiere un año válido")
        validacion = false
    } else {
        limpiarValidacion(modelo, msjModelo)

        let fecha = new Date()
        let fechaActual = fecha.getFullYear()
        let fechaIngresada = modelo.val().trim()
        let limiteFecha = 1920

        if (fechaIngresada > fechaActual || fechaIngresada < limiteFecha) {
            agregarError(modelo, msjModelo, "La fecha ingresada no es válida. Recuerde que el límite es hasta 1920 a la fecha.")
            validacion = false
        }
    }

    if (dniDuenio.val().trim() === "") {
        agregarError(dniDuenio, msjDniDuenio, "Requiere documento")
        validacion = false
    } else if (!expresionRegularDNI.test(dniDuenio.val().trim())) {
        agregarError(dniDuenio, msjDniDuenio, "Formato inválido")
        validacion = false
    } else {
        limpiarValidacion(dniDuenio, msjDniDuenio)
    }

    return validacion
}

function agregarError(campo, campoMsj, msj) {
    campoMsj.text(msj)
    campo.addClass("is-invalid")
}

function limpiarValidacion(campo, campoMsj) {
    campoMsj.text('')
    campo.removeClass("is-invalid")
    campo.addClass("is-valid")
}
