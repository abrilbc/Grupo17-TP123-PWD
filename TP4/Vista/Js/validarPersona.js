const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    dni: /^\d{1,8}$/,
    telefono: /^\d{10}$/,
    domicilio: /^[a-zA-Z0-9À-ÿ\s.,-]{1,100}$/,
    fechaNac: /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/
};

function anioBisiesto(anio) {
    return (anio % 4 === 0 && (anio % 100 !== 0 || anio % 400 === 0));
}

function fechaValida(dia, mes, anio) {
    // https://stackoverflow.com/questions/6177975/how-to-validate-date-with-format-mm-dd-yyyy-in-javascript
    // array de maximo de dias SEGUN el mes
    // enero 31, febrero dependiendo de bisiesto, marzo 31, abril 30, etcetc
    const cantDiasMaxEnMes = [31, anioBisiesto(anio) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    return mes >= 1 && mes <= 12 && dia >= 1 && dia <= cantDiasMaxEnMes[mes - 1];
}

function validar() {
    let verificacion = true; // bandera

    let nroDni = document.getElementById('NroDni');
    let apellido = document.getElementById('Apellido');
    let nombre = document.getElementById('Nombre');
    let fechaNac = document.getElementById('fechaNac');
    let telefono = document.getElementById('Telefono');
    let domicilio = document.getElementById('Domicilio');

    function printearInput(id) {
        let inputAColorear = document.getElementById(id);
        inputAColorear.style.borderColor = 'red';
        inputAColorear.style.backgroundColor = '#d9dede';
    }

    function desPrintearInput(id) {
        let inputSinColor = document.getElementById(id);
        inputSinColor.style.borderColor = '';
        inputSinColor.style.backgroundColor = '';
    }

    if (!expresiones.dni.test(nroDni.value)) {
        printearInput('NroDni');
        verificacion = false;
    } else {
        desPrintearInput('NroDni');
    }

    if (!expresiones.apellido.test(apellido.value)) {
        printearInput('Apellido');
        verificacion = false;
    } else {
        desPrintearInput('Apellido');
    }

    if (!expresiones.nombre.test(nombre.value)) {
        printearInput('Nombre');
        verificacion = false;
    } else {
        desPrintearInput('Nombre');
    }

    if (!expresiones.telefono.test(telefono.value)) {
        printearInput('Telefono');
        verificacion = false;
    } else {
        desPrintearInput('Telefono');
    }

    if (!expresiones.domicilio.test(domicilio.value)) {
        printearInput('Domicilio');
        verificacion = false;
    } else {
        desPrintearInput('Domicilio');
    }

    if (!expresiones.fechaNac.test(fechaNac.value)) {
        printearInput('fechaNac');
        verificacion = false;
    } else {
        const [dia, mes, anio] = fechaNac.value.split('/').map(num => parseInt(num, 10));
        if (!fechaValida(dia, mes, anio)) {
            printearInput('fechaNac');
            verificacion = false;
        } else {
            desPrintearInput('fechaNac');
        }
    }

    return verificacion;
}

document.addEventListener('DOMContentLoaded', function () {
    let form = document.getElementById('miFormulario');

    form.addEventListener('submit', function (event) {
        if (!validar()) {
            event.preventDefault();
        }
    });
});