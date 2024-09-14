function validar() {
    let verificacion = true
    let patente = $("#Patente")
    let dniDuenio = $("#DniDuenio")
    const expreRegPatente = /^[A-Z]{3} ?\d{3}$/
    const expreRegDNI = /^\d{7,8}$/

    //spans
    let msjPatente = $("#aPatente")
    let msjPersona = $("#personaDNI")

    if (patente.val().trim() === "") {
        agregarError(patente, msjPatente, "Requiere patente")
        verificacion = false
    } else if (!expreRegPatente.test(patente.val().trim())) {
        agregarError(patente, msjPatente, "Formato de patente incorrecto")
        verificacion = false
    } else {
        limpiarValidacion(patente, msjPatente)
    }

    if (dniDuenio.val().trim() === "") {
        agregarError(dniDuenio, msjPersona, "Requiere DNI")
        verificacion = false
    } else if (!expreRegDNI.test(dniDuenio.val().trim())) {
        agregarError(dniDuenio, msjPersona, "El DNI debe tener 7 u 8 dígitos")
        verificacion = false
    } else {
        limpiarValidacion(dniDuenio, msjPersona)
    }

    return verificacion
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
