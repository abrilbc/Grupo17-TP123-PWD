const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    dni: /^\d{7,8}$/,
    telefono: /^(\+?\d{1,3}[-.\s]?)?(\(?\d{1,4}\)?[-.\s]?)?[\d\s.-]{7,10}$/,
    domicilio: /^[a-zA-Z0-9À-ÿ\s.,-]{1,100}$/,
    fechaNac: /^([1-9]|0[1-9]|[12][0-9]|3[01])\/([1-9]|0[1-9]|1[0-2])\/\d{4}$/

}

function anioBisiesto(anio) {
    return (anio % 4 === 0 && (anio % 100 !== 0 || anio % 400 === 0))
}

function fechaValida(dia, mes, anio) {
    // https://stackoverflow.com/questions/6177975/how-to-validate-date-with-format-mm-dd-yyyy-in-javascript
    // array de maximo de dias SEGUN el mes
    // enero 31, febrero dependiendo de bisiesto, marzo 31, abril 30, etcetc
    const cantDiasMaxEnMes = [31, anioBisiesto(anio) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

    let fechaValida = true

    if (mes < 1 || mes > 12 || dia < 1 || dia > cantDiasMaxEnMes[mes - 1]) { // restar uno, el mes viene de 0
        fechaValida = false
    } else {
        const fecha = new Date(anio, mes - 1, dia)
        fechaValida = fecha.getFullYear() === anio && fecha.getMonth() === mes - 1 && fecha.getDate() === dia
    }

    return fechaValida
}

function validar() {
    let verificacion = true

    let nroDni = $("#NroDni")
    let apellido = $("#Apellido")
    let nombre = $("#Nombre")
    let fechaNac = $("#fechaNac")
    let telefono = $("#Telefono")
    let domicilio = $("#Domicilio")

    // spans
    let msjDni = $("#personaDNI")
    let msjApellido = $("#personaApellido")
    let msjNombre = $("#personaNombre")
    let msjFechaNac = $("#personaFechaNac")
    let msjTel = $("#personaTelefono")
    let msjDomicilio = $("#personaDomicilio")

    if (nroDni.val().trim() === '') {
        agregarError(nroDni, msjDni, "Rellene este campo")
        verificacion = false
    } else if (!expresiones.dni.test(nroDni.val())) {
        agregarError(nroDni, msjDni, "DNI inválido")
        verificacion = false
    } else {
        limpiarValidacion(nroDni, msjDni)
    }

    if (apellido.val().trim() === "") {
        agregarError(apellido, msjApellido, "Relleno este campo")
        verificacion = false
    } else if (!expresiones.apellido.test(apellido.val())) {
        agregarError(apellido, msjApellido, "Apellido inválido")
        verificacion = false
    } else {
        limpiarValidacion(apellido, msjApellido)
    }

    if (nombre.val().trim() === "") {
        agregarError(nombre, msjNombre, "Relleno este campo")
        verificacion = false
    } else if (!expresiones.nombre.test(nombre.val())) {
        agregarError(nombre, msjNombre, "Nombre inválido")
        verificacion = false
    } else {
        limpiarValidacion(nombre, msjNombre)
    }

    if (telefono.val().trim() === "") {
        agregarError(telefono, msjTel, "Relleno este campo")
        verificacion = false
    } else if (!expresiones.telefono.test(telefono.val())) {
        agregarError(telefono, msjTel, "Teléfono inválido")
        verificacion = false
    } else {
        limpiarValidacion(telefono, msjTel)
    }

    if (domicilio.val().trim() === "") {
        agregarError(domicilio, msjDomicilio, "Relleno este campo")
        verificacion = false
    } else if (!expresiones.domicilio.test(domicilio.val())) {
        agregarError(domicilio, msjDomicilio, "Domicilio inválido")
        verificacion = false
    } else {
        limpiarValidacion(domicilio, msjDomicilio)
    }

    if (fechaNac.val().trim() === "") {
        agregarError(fechaNac, msjFechaNac, "Rellene este campo")
        verificacion = false
    } else if (!expresiones.fechaNac.test(fechaNac.val().trim())) {
        agregarError(fechaNac, msjFechaNac, "Fecha de nacimiento inválida")
        verificacion = false
    } else {
        let [dia, mes, anio] = fechaNac.val().trim().split('/').map(num => parseInt(num, 10)) // base decimal
        if (!fechaValida(dia, mes, anio)) {
            agregarError(fechaNac, msjFechaNac, "Fecha de nacimiento no válida")
            verificacion = false
        } else {
            limpiarValidacion(fechaNac, msjFechaNac)
            let limiteAnio = 1920
            let fechaIngresada = new Date(anio, mes - 1, dia)
            let fechaActual = new Date()
            let fechaDiff = new Date(fechaActual.getFullYear() - 18, fechaActual.getMonth(), fechaActual.getDate()) // para menbores de 18 años
            console.log(fechaDiff)
            if (fechaIngresada > fechaActual || anio < limiteAnio || fechaIngresada > fechaDiff) {
                agregarError(fechaNac, msjFechaNac, "Rango de fecha invalida, debe ser mayor de edad")
                verificacion = false
            }
        }
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
