/**
 * Validación con Bootstrap
 */

function validar() {
    let verificacion = true
    let patente = document.getElementById("Patente")
    let dniDuenio = document.getElementById("DniDuenio")

    limpiarValidacion(patente)
    limpiarValidacion(dniDuenio)

    if (patente.value.trim() === "") {
        agregarError(patente, "Requiere patente")
        verificacion = false
    } else if (!/^[A-Z]{3} ?\d{3}$/.test(patente.value.trim())) {
        agregarError(patente, "Formato de patente incorrecto")
        verificacion = false
    }

    if (dniDuenio.value.trim() === "") {
        agregarError(dniDuenio, "El DNI es obligatorio")
        verificacion = false
    } else if (!/^\d{7,8}$/.test(dniDuenio.value.trim())) {
        agregarError(dniDuenio, "El DNI debe tener 7 u 8 dígitos")
        verificacion = false
    }

    return verificacion
}

function agregarError(campo, mensaje) {
    campo.classList.add("is-invalid")
    let span = campo.nextElementSibling
    span.textContent = mensaje
    span.classList.add("invalid-feedback")
}

function limpiarValidacion(campo) {
    campo.classList.remove("is-invalid")
    campo.classList.remove("is-valid")
    let span = campo.nextElementSibling
    span.textContent = ''
    span.classList.remove("invalid-feedback")
    span.classList.remove("valid-feedback")
}