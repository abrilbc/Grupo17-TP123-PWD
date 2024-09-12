function validar() {
    let verificacion = true;
    let patente = document.getElementById("Patente");
    let msj = document.getElementById("msjErrorPatente");

    limpiarValidacion(patente, msj);

    if (patente.value.trim() === "") {
        agregarError(patente, msj, "La patente es obligatoria");
        verificacion = false;
    } else if (!/^[A-Z]{3} ?\d{3}$/.test(patente.value.trim())) {
        agregarError(patente, msj, "El formato de la patente es incorrecto (Ej: ADC 152)");
        verificacion = false;
    }
    return verificacion;
}

function agregarError(campoInput, campoMensaje, mensaje) {
    campoMensaje.textContent = mensaje;
    campoInput.classList.add("is-invalid");
}

function limpiarValidacion(campoInput, campoMensaje) {
    campoMensaje.textContent = '';
    campoInput.classList.remove("is-invalid");
    campoInput.classList.remove("is-valid");
}
