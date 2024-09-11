/**
 * Validación con Bootstrap
 */

function validar() {
    let verificacion = true
    let nroDni = document.getElementById("NroDni")

    limpiarValidacion(nroDni)

    if (nroDni.value.trim() === "") {
        agregarError(nroDni, "El DNI es obligatorio")
        verificacion = false
    } else if (!/^\d{7,8}$/.test(nroDni.value.trim())) {
        agregarError(nroDni, "El DNI debe tener 7 u 8 dígitos")
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