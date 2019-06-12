var inputFechaNacimiento = $("#inputFechaNacimiento");
var btnInputFechaNacimiento = $("#btnInputFechaNacimiento");
var selectProvincia = $("#selectProvincia");
var selectPartido = $("#selectPartido");
var selectLocalidad = $("#selectLocalidad");

function inicializarSelectPartido(provinciaId) {
    var obj = {};
    obj.provinciaId = parseInt(provinciaId, 10);
    llamadaAjax(pathGetPartidosByProvinciaId, JSON.stringify(obj), true, "cargarSelectPartido", "dummy");
}

function inicializarSelectLocalidad(partidoId) {
    var obj = {};
    obj.partidoId = parseInt(partidoId, 10);
    llamadaAjax(pathGetLocalidadesByPartidoId, JSON.stringify(obj), true, "cargarSelectLocalidad", "dummy");
}

function cargarSelectLocalidad(localidades) {
    limpiarSelect(selectLocalidad);
    $.each(localidades, function (i, localidad) {
        var option = $("<option>");
        option.val(localidad.id);
        option.text(localidad.nombre);
        selectLocalidad.append(option);
    });
    selectLocalidad.prop('disabled', false);
    btnRegistrar.prop('disabled', false);
}

function cargarSelectPartido(partidos) {
    limpiarSelect(selectPartido);
    $.each(partidos, function (i, partido) {
        var option = $("<option>");
        option.val(partido.id);
        option.text(partido.nombre);
        selectPartido.append(option);
    });
    inicializarSelectLocalidad(selectPartido.val());
    selectPartido.prop('disabled', false);
}

selectPartido.change(function () {
    btnRegistrar.prop('disabled', true);
    selectLocalidad.prop('disabled', true);
    inicializarSelectLocalidad($(this).val());
});

function limpiarSelect(select) {
    select.find('option').remove().end();
}

selectProvincia.change(function () {
    btnRegistrar.prop('disabled', true);
    selectPartido.prop('disabled', true);
    selectLocalidad.prop('disabled', true);
    inicializarSelectPartido($(this).val());
});

btnInputFechaNacimiento.click(function () {
    inputFechaNacimiento.data("daterangepicker").toggle();
});

//Oculta el spinner de los input number
$(document).ready(function ($) {

    // Disable scroll when focused on a number input.
    $('form').on('focus', 'input[type=number]', function (e) {
        $(this).on('wheel', function (e) {
            e.preventDefault();
        });
    });

    // Restore scroll on number inputs.
    $('form').on('blur', 'input[type=number]', function (e) {
        $(this).off('wheel');
    });

    // Disable up and down keys.
    $('form').on('keydown', 'input[type=number]', function (e) {
        if (e.which == 38 || e.which == 40)
            e.preventDefault();
    });

});

function validarNombre() {
    var nombre = inputNombre.val();

    var validacion = false;

    if (nombre == null || nombre.length === 0 || nombre === "") {
        $("#errorNombre").fadeIn("slow");
    } else if (nombre.length < 3) {
        $("#errorNombre2").fadeIn("slow");
    } else if (nombre.length > 15) {
        $("#errorNombre3").fadeIn("slow");
    } else if (!regexSoloLetras.test(nombre)) {
        $("#errorNombre4").fadeIn("slow");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarApellido() {
    var apellido = inputApellido.val();

    var validacion = false;

    if (apellido == null || apellido.length === 0 || apellido === "") {
        $("#errorApellido").fadeIn("slow");
    } else if (apellido.length < 3) {
        $("#errorApellido2").fadeIn("slow");
    } else if (apellido.length > 15) {
        $("#errorApellido3").fadeIn("slow");
    } else if (!regexSoloLetras.test(apellido)) {
        $("#errorApellido4").fadeIn("slow");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarNickname() {
    var nickname = inputNickname.val();

    var validacion = false;

    if (nickname == null || nickname.length === 0 || nickname === "") {
        $("#errorNickname").fadeIn("slow");
    } else if (nickname.length < 5) {
        $("#errorNickname2").fadeIn("slow");
    } else if (nickname.length > 15) {
        $("#errorNickname3").fadeIn("slow");
    } else if (!regexLetrasYNumeros.test(nickname)) {
        $("#errorNickname4").fadeIn("slow");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarPassword() {
    var password = inputPassword.val();
    var rePassword = inputRePassword.val();

    var validacion = false;

    if (password == null || password.length === 0 || password === "") {
        $("#errorPassword").fadeIn("slow");
    } else if (password.length < 6 || password.length > 15) {
        $("#errorPassword2").fadeIn("slow");
    } else if (!regexLetrasYNumeros.test(password)) {
        $("#errorPassword3").fadeIn("slow");
    }

    if (rePassword == null || rePassword.length === 0 || rePassword === "") {
        $("#errorRePassword").fadeIn("slow");
    } else if (password !== rePassword) {
        $("#errorRePassword2").fadeIn("slow");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarEmail() {
    var email = inputEmail.val();

    var validacion = false;

    if (email == null || email.length === 0 || email === "") {
        $("#errorEmail").fadeIn("slow");
    } else if (!regexEmail.test(email)) {
        $("#errorEmail2").fadeIn("slow");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarFechaNacimiento() {
    var fechaNacimiento = inputFechaNacimiento.val();

    var validacion = false;

    if (!moment(fechaNacimiento, "YYYY-MM-DD").isValid()) {
        $("#errorFechaNacimiento").fadeIn("slow");
    } else if (Math.round(moment.duration(moment().diff(moment(fechaNacimiento, "YYYY-MM-DD"))).asYears()) < 18) {
        $("#errorFechaNacimiento2").fadeIn("slow");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarProvincia() {
    var provincia = selectProvincia.val();
    var validacion = false;

    if (provincia === null || provincia === 0) {
        $("#errorProvincia").fadeIn("slow");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarPartido() {
    var partido = selectPartido.val();
    var validacion = false;

    if (partido === null || partido === 0) {
        $("#errorPartido").fadeIn("slow");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarLocalidad() {
    var localidad = selectLocalidad.val();
    var validacion = false;

    if (localidad === null || localidad === 0) {
        $("#errorLocalidad").fadeIn("slow");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarGenero() {
    var genero = selectGenero.val();
    var validacion = false;

    if (genero === null || genero === 0) {
        $("#errorGenero").fadeIn("slow");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarFormularioRegistracion() {
    return validarNombre() &&
        validarApellido() &&
        validarFechaNacimiento() &&
        validarNickname() &&
        validarEmail() &&
        validarPassword() &&
        validarGenero() &&
        validarProvincia() &&
        validarPartido() &&
        validarLocalidad();
}

function realizarRegistracion() {
    $("input").prop('disabled', true);
    btnRegistrar.prop('disabled', true);
    var obj = {};
    obj.nombre = inputNombre.val();
    obj.apellido = inputApellido.val();
    obj.nickname = inputNickname.val();
    obj.email = inputEmail.val();
    obj.password = inputPassword.val();
    obj.fechaNacimiento = inputFechaNacimiento.val();
    obj.generoId = $("#selectGenero").val();
    obj.provinciaId = $("#selectProvincia").val();
    obj.partidoId = $("#selectPartido").val();
    obj.localidadId = $("#selectLocalidad").val();
    llamadaAjax(pathRegistrarUsuario, JSON.stringify(obj), true, "mostrarModalRegistracionExitosa", "mostrarModalError");
}

btnRegistrar.click(function () {

    $(".error").fadeOut();

    var validacion = validarFormularioRegistracion();

    if (validacion) {
        realizarRegistracion();
    }
});

function mostrarModalRegistracionExitosa(dummy) {
    alertify.alert("¡Registración Exitosa!", "Espere unos segundos y será redireccionado a la pantalla de inicio");
    setTimeout(function () {
        window.location.href = pathHome;
    }, 5000);
}

function mostrarModalError(err) {
    alertify.alert("Fallo en la Registración", err);
    $("input").prop('disabled', false);
    btnRegistrar.prop('disabled', false);
}