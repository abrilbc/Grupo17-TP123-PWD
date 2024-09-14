function validar() {
    let verificacion = true
    let nroDni = $("#NroDni")
    let msjPersona = $("#msjErrorDNI")
    const expreReg = /^[A-Z]{3} ?\d{3}$/

    if (nroDni.val().trim() === "") {
        agregarError(nroDni, msjPersona, "El DNI es obligatorio")
        verificacion = false
    } else if (!expreReg.test(nroDni.val().trim())) {
        agregarError(nroDni, msjPersona, "El DNI debe tener 7 u 8 dígitos")
        verificacion = false
    } else {
        limpiarValidacion(nroDni, msjPersona)
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
