const regexEmail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
const regexSoloLetras = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;
const regexLetrasYNumeros = /^[0-9a-zA-Z]+$/;

var inputNombre = $('#inputNombre');
var inputApellido = $('#inputApellido');
var inputNickname = $('#inputNickname');
var inputPassword = $('#inputPassword');
var inputRePassword = $('#inputRePassword');
var inputEmail = $('#inputEmail');
var inputFechaNacimiento = $('#inputFechaNacimiento');
var selectGenero = $("#selectGenero");
var selectProvincia = $("#selectProvincia");
var selectPartido = $("#selectPartido");
var selectLocalidad = $("#selectLocalidad");
var btnRegistrar = $("#btnRegistrar");
var btnCancelar = $("#btnCancelar");

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

    if (!moment(fechaNacimiento, "DD/MM/YYYY").isValid()) {
        $("#errorFechaNacimiento").fadeIn("slow");
    } else if (Math.round(moment.duration(moment().diff(moment(fechaNacimiento, "DD/MM/YYYY"))).asYears()) < 18) {
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
    return validarNombre()
        && validarApellido()
        && validarFechaNacimiento()
        && validarNickname()
        && validarEmail()
        && validarPassword()
        && validarGenero()
        && validarProvincia()
        && validarPartido()
        && validarLocalidad();
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
    setTimeout(function () {
        window.location.href = pathHome;
    }, 5000);
}

function mostrarModalError(err) {
    $("input").prop('disabled', false);
    btnRegistrar.prop('disabled', false);
}

btnCancelar.click(function () {
    window.location.href = pathHome;
});