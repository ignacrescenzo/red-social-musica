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
        $("#errorNombre").removeClass("d-none").addClass("d-flex").find("span").text("Ingrese su nombre");
    } else if (nombre.length < 3 || nombre.length > 15) {
        $("#errorNombre").removeClass("d-none").addClass("d-flex").find("span").text("Entre 3 y 15 letras");
    } else if (!regexSoloLetras.test(nombre)) {
        $("#errorNombre").removeClass("d-none").addClass("d-flex").find("span").text("Nombre inválido");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarApellido() {
    var apellido = inputApellido.val();

    var validacion = false;

    if (apellido == null || apellido.length === 0 || apellido === "") {
        $("#errorApellido").removeClass("d-none").addClass("d-flex").find("span").text("Ingrese su apellido");
    } else if (apellido.length < 3 || apellido.length > 15) {
        $("#errorApellido").removeClass("d-none").addClass("d-flex").find("span").text("Entre 3 y 15 letras");
    } else if (!regexSoloLetras.test(apellido)) {
        $("#errorApellido").removeClass("d-none").addClass("d-flex").find("span").text("Apellido inválido");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarNickname() {
    var nickname = inputNickname.val();

    var validacion = false;

    if (nickname == null || nickname.length === 0 || nickname === "") {
        $("#errorNickname").removeClass("d-none").addClass("d-flex").find("span").text("Ingrese su nickname");
    } else if (nickname.length < 5) {
        $("#errorNickname").removeClass("d-none").addClass("d-flex").find("span").text("Nick menor a 5 caracteres");
    } else if (nickname.length > 15) {
        $("#errorNickname").removeClass("d-none").addClass("d-flex").find("span").text("Nick mayor a 15 caracteres");
    } else if (!regexLetrasYNumeros.test(nickname)) {
        $("#errorNickname").removeClass("d-none").addClass("d-flex").find("span").text("Nickname inválido");
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
        $("#errorPassword").removeClass("d-none").addClass("d-flex").find("span").text("Ingrese su contraseña");
    } else if (password.length < 6 || password.length > 15) {
        $("#errorPassword").removeClass("d-none").addClass("d-flex").find("span").text("De 6 a 15 caracteres");
    } else if (!regexLetrasYNumeros.test(password)) {
        $("#errorPassword").removeClass("d-none").addClass("d-flex").find("span").text("Contraseña inválida");
    }

    if (rePassword == null || rePassword.length === 0 || rePassword === "") {
        $("#errorRePassword").removeClass("d-none").addClass("d-flex").find("span").text("Confirme su contraseña");
    } else if (password !== rePassword) {
        $("#errorRePassword").removeClass("d-none").addClass("d-flex").find("span").text("Las contraseñas no coinciden");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarEmail() {
    var email = inputEmail.val();

    var validacion = false;

    if (email == null || email.length === 0 || email === "") {
        $("#errorEmail").removeClass("d-none").addClass("d-flex").find("span").text("Ingrese su email");
    } else if (!regexEmail.test(email)) {
        $("#errorEmail").removeClass("d-none").addClass("d-flex").find("span").text("Email inválido");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarFechaNacimiento() {
    var fechaNacimiento = inputFechaNacimiento.val();

    var validacion = false;

    if (!moment(fechaNacimiento, "YYYY-MM-DD").isValid()) {
        $("#errorFechaNacimiento").removeClass("d-none").addClass("d-flex").find("span").text("Formato de fecha inválido");
    } else if (Math.round(moment.duration(moment().diff(moment(fechaNacimiento, "YYYY-MM-DD"))).asYears()) < 18) {
        $("#errorFechaNacimiento").removeClass("d-none").addClass("d-flex").find("span").text("Debe ser mayor de 18");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarProvincia() {
    var provincia = selectProvincia.val();
    var validacion = false;

    if (provincia === null || provincia === 0) {
        $("#errorProvincia").removeClass("d-none").addClass("d-flex").find("span").text("Seleccione una provincia");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarPartido() {
    var partido = selectPartido.val();
    var validacion = false;

    if (partido === null || partido === 0) {
        $("#errorPartido").removeClass("d-none").addClass("d-flex").find("span").text("Seleccione un partido");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarLocalidad() {
    var localidad = selectLocalidad.val();
    var validacion = false;

    if (localidad === null || localidad === 0) {
        $("#errorLocalidad").removeClass("d-none").addClass("d-flex").find("span").text("Seleccione una localidad");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarGenero() {
    var genero = selectGenero.val();
    var validacion = false;

    if (genero === null || genero === 0) {
        $("#errorGenero").removeClass("d-none").addClass("d-flex").find("span").text("Seleccione su género");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarFormularioRegistracion() {
    return validarNickname()
        && validarPassword()
        && validarEmail()
        && validarNombre()
        && validarApellido()
        && validarFechaNacimiento()
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

    $(".error").removeClass("d-flex").addClass("d-none").find("span").text("");

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

btnCancelar.click(function () {
    window.location.href = pathHome;
});