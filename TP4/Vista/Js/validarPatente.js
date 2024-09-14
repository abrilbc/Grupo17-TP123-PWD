function validar() {
    let verificacion = true

    let patente = $("#Patente").val()
    let msj = $("#msjErrorPatente")
    const expreReg = /^[A-Z]{3} ?\d{3}$/

    limpiarValidacion(patente, msj)

    if (patente.trim() === "") {
        agregarError(patente, msj, "La patente es obligatoria")
        verificacion = false
    } else if (!expreReg.test(patente.trim())) {
        agregarError(patente, msj, "El formato de la patente es incorrecto (Ej: ADC 152)")
        verificacion = false
    }

    return verificacion
}

function agregarError(campo, campoMsj, msj) {
    $(campoMsj).text(msj)
    $(campo).addClass("is-invalid")
}

function limpiarValidacion(campo, campoMsj) {
    $(campoMsj).text('')
    $(campo).removeClass("is-invalid")
    $(campo).removeClass("is-valid")
}
