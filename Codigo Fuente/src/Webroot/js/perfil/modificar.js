const regexEmail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
const regexSoloLetras = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;
const regexLetrasYNumeros = /^[0-9a-zA-Z]+$/;

var inputNombre = $('#inputNombre');
var inputApellido = $('#inputApellido');
var inputPassword = $('#inputPassword');
var inputRePassword = $('#inputRePassword');
var inputEmail = $('#inputEmail');
var inputFechaNacimiento = $('#inputFechaDeNacimiento');
var selectGenero = $("#selectGenero");
var selectProvincia = $("#selectProvincia");
var selectPartido = $("#selectPartido");
var selectLocalidad = $("#selectLocalidad");
var btnGuardar = $("#btnGuardar");
var btnCancelar = $("#btnCancelar");

var selectProvincia = $("#selectProvincia");
var selectPartido = $("#selectPartido");
var selectLocalidad = $("#selectLocalidad");



function inicializarSelectPartido(provinciaId) {
    var obj = {};
    obj.provinciaId = parseInt(provinciaId, 10);
    llamadaAjax(pathGetPartidosByProvinciaId, JSON.stringify(obj), false, "cargarSelectPartido", "dummy");
}

function inicializarSelectLocalidad(partidoId) {
    var obj = {};
    obj.partidoId = parseInt(partidoId, 10);
    llamadaAjax(pathGetLocalidadesByPartidoId, JSON.stringify(obj), false, "cargarSelectLocalidad", "dummy");
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
    btnGuardar.prop('disabled', false);
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
    btnGuardar.prop('disabled', true);
    selectLocalidad.prop('disabled', true);
    inicializarSelectLocalidad($(this).val());
});

function limpiarSelect(select) {
    select.find('option').remove().end();
}

selectProvincia.change(function () {
    btnGuardar.prop('disabled', true);
    selectPartido.prop('disabled', true);
    selectLocalidad.prop('disabled', true);
    inicializarSelectPartido($(this).val());
});

inputFechaNacimiento.click(function () {
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

btnCancelar.click(function () {
    window.location.href = pathHome;
});

function validarNombre() {
    var nombre = inputNombre.val();

    var validacion = false;

    if (nombre == null || nombre.length === 0 || nombre === "") {
        $("#errorNombre").removeClass("d-none").addClass("d-flex").find("span").text("Debe insertar un nombre");
    } else if (nombre.length < 3) {
        $("#errorNombre").removeClass("d-none").addClass("d-flex").find("span").text("Debe tener mínimo 3 letras");
    } else if (nombre.length > 15) {
        $("#errorNombre").removeClass("d-none").addClass("d-flex").find("span").text("Debe tener máximo 15 letras");
    } else if (!regexSoloLetras.test(nombre)) {
        $("#errorNombre").removeClass("d-none").addClass("d-flex").find("span").text("Solo se permiten letras");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarApellido() {
    var apellido = inputApellido.val();

    var validacion = false;

    if (apellido == null || apellido.length === 0 || apellido === "") {
        $("#errorApellido").removeClass("d-none").addClass("d-flex").find("span").text("Debe insertar un apellido");
    } else if (apellido.length < 3) {
        $("#errorApellido").removeClass("d-none").addClass("d-flex").find("span").text("Debe tener mínimo 3 letras");
    } else if (apellido.length > 15) {
        $("#errorApellido").removeClass("d-none").addClass("d-flex").find("span").text("Debe tener máximo 15 letras");
    } else if (!regexSoloLetras.test(apellido)) {
        $("#errorApellido").removeClass("d-none").addClass("d-flex").find("span").text("Solo se permiten letras");
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
        $("#errorPassword").removeClass("d-none").addClass("d-flex").find("span").text("Inserte una contraseña");
    } else if (password.length < 6 || password.length > 15) {
        $("#errorPassword").removeClass("d-none").addClass("d-flex").find("span").text("Debe tener entre 6 y 15 letras");
    } else if (!regexLetrasYNumeros.test(password)) {
        $("#errorPassword").removeClass("d-none").addClass("d-flex").find("span").text("Formato de password inválido");
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
        $("#errorEmail").removeClass("d-none").addClass("d-flex").find("span").text("Debe insertar un email");
    } else if (!regexEmail.test(email)) {
        $("#errorEmail").removeClass("d-none").addClass("d-flex").find("span").text("Formato de Email Inválido");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarFechaNacimiento() {
    var fechaNacimiento = inputFechaNacimiento.val();

    var validacion = false;

    if (!moment(fechaNacimiento, "YYYY-MM-DD").isValid()) {
        $("#errorFechaNacimiento").removeClass("d-none").addClass("d-flex").find("span").text("Formato de Fecha Inválido");
    } else if (Math.round(moment.duration(moment().diff(moment(fechaNacimiento, "YYYY-MM-DD"))).asYears()) < 18) {
        $("#errorFechaNacimiento").removeClass("d-none").addClass("d-flex").find("span").text("Debe ser mayor de 18 años");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarProvincia() {
    var provincia = selectProvincia.val();
    var validacion = false;

    if (provincia === null || provincia === 0) {
        $("#errorProvincia").removeClass("d-none").addClass("d-flex").find("span").text("Debe seleccionar una provincia");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarPartido() {
    var partido = selectPartido.val();
    var validacion = false;

    if (partido === null || partido === 0) {
        $("#errorPartido").removeClass("d-none").addClass("d-flex").find("span").text("Debe seleccionar un partido");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarLocalidad() {
    var localidad = selectLocalidad.val();
    var validacion = false;

    if (localidad === null || localidad === 0) {
        $("#errorLocalidad").removeClass("d-none").addClass("d-flex").find("span").text("Debe seleccionar una localidad");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarGenero() {
    var genero = selectGenero.val();
    var validacion = false;

    if (genero === null || genero === 0) {
        $("#errorGenero").removeClass("d-none").addClass("d-flex").find("span").text("Debe seleccionar su género");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarFormularioModificacion() {
    return validarNombre() &&
        validarApellido() &&
        validarFechaNacimiento() &&
        validarEmail() &&
        validarPassword() &&
        validarGenero() &&
        validarProvincia() &&
        validarPartido() &&
        validarLocalidad();
}

btnGuardar.click(function (e) {

    $(".error").removeClass("d-flex").addClass("d-none").find("span").text("");

    var validacion = validarFormularioModificacion();

    if (validacion) {
        realizarModificacion();
    }
});

function realizarModificacion() {
    btnGuardar.submit();
}

function inicializarUbicacionYGenero() {
    selectProvincia.val($('#selectProvincia option[value="' + window.provinciaId + '"]').val());
    inicializarSelectPartido(selectProvincia.val());
    selectPartido.val($('#selectPartido option[value="' + window.partidoId + '"]').val());
    inicializarSelectLocalidad(selectPartido.val());
    selectLocalidad.val($('#selectLocalidad option[value="' + window.localidadId + '"]').val());
    selectGenero.val(window.generoId);
}

inicializarUbicacionYGenero();