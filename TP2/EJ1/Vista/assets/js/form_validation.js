
$(function() {
    $("#miForm']").validate({
      rules: {
        nombre: "required",
        apellido: "required",
        email: {
          required: true,
          email: true
        },
        contrasenia: {
          required: true,
          minlength: 5
        }
      },
      messages: {
        nombre: "Por favor ingrese su nombre",
        apellido: "Por favor ingrese su apellido",
        contrasenia: {
          required: "Por favor ingrese iuna contraseña",
          minlength: "La contraseña debe tener mínimo 5 caracteres"
        },
        email: "Ingrese un formato de email válido"
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });