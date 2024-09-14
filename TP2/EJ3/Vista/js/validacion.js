function validar() {
    let valid = true;
    let errores = [];

    // Limpiar estados previos
    $("input").css("border", "1px solid #ced4da"); // Restaura los bordes anteriores

    // Obtener los valores de los campos
    const usuario = $("#usuario");
    const contrasenia = $("#contrasenia");

    // Validar usuario
    if (!usuario.val().trim()) {
        errores.push("El campo de usuario no puede estar vacío.");
        usuario.css("border", "1px solid red");
        valid = false;
    }

    // Validar contraseña
    if (!contrasenia.val().trim()) {
        errores.push("El campo de contraseña no puede estar vacío.");
        contrasenia.css("border", "1px solid red");
        valid = false;
    } else if (contrasenia.val().length < 8) {
        errores.push("La contraseña debe tener al menos 8 caracteres.");
        contrasenia.css("border", "1px solid red");
        valid = false;
    } else if (contrasenia.val() === usuario.val().trim()) {
        errores.push("La contraseña no puede ser igual al nombre de usuario.");
        contrasenia.css("border", "1px solid red");
        valid = false;
    } else if (!/[a-z]/i.test(contrasenia.val()) || !/\d/.test(contrasenia.val())) {
        errores.push("La contraseña debe contener letras y números.");
        contrasenia.css("border", "1px solid red");
        valid = false;
    }

    // Mostrar errores
    if (!valid) {
        alert(errores.join("\n")); // Unir todos los errores en una sola alerta
    }

    return valid;
}
