const regexLetrasYEspacio = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;

var selectProvincia = $("#selectProvincia");
var selectPartido = $("#selectPartido");
var selectLocalidad = $("#selectLocalidad");
var btnGuardar = $('#btnGuardar');
var btnCancelar = $('#btnCancelar');
var inputNombreBanda = $('#inputNombreBanda');
var inputGeneroMusical = $('#inputGeneroMusical');
var formCrearBanda = $('#formCrearBanda');

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

function inicializarUbicacion() {
    selectProvincia.val($('#selectProvincia option[value="' + window.provinciaId + '"]').val());
    inicializarSelectPartido(selectProvincia.val());
    selectPartido.val($('#selectPartido option[value="' + window.partidoId + '"]').val());
    inicializarSelectLocalidad(selectPartido.val());
    selectLocalidad.val($('#selectLocalidad option[value="' + window.localidadId + '"]').val());
}

inicializarUbicacion();

function validarNombreBanda() {
    var nombreBanda = inputNombreBanda.val();
    var validacion = false;

    if (nombreBanda === null || nombreBanda.length === 0 || nombreBanda === "") {
        $('#errorNombreBanda').addClass('d-flex').removeClass('d-none').find('span').text('Ingrese un nombre');
    } else if (nombreBanda.length < 3 || nombreBanda.length > 30) {
        $('#errorNombreBanda').addClass('d-flex').removeClass('d-none').find('span').text('Entre 3 y 30 caracteres');
    } else {
        validacion = true;
    }

    return validacion;
}

function validarGeneroMusical() {
    var generoMusical = inputGeneroMusical.val();
    var validacion = false;

    if (generoMusical === null || generoMusical.length === 0 || generoMusical === "") {
        $('#errorGeneroMusical').addClass('d-flex').removeClass('d-none').find('span').text('Ingrese un género musical');
    } else {
        validacion = true;
    }

    return validacion;
}

function validarBanda() {
    return validarNombreBanda() && validarGeneroMusical();
}

function limpiarErrores() {
    $('.error').addClass('d-none').removeClass('d-flex').find('span').text('');
}

btnCancelar.click(function () {
    limpiarErrores();
});

btnGuardar.click(function (e) {
    e.preventDefault();
    e.stopPropagation();

    limpiarErrores();

    if (validarBanda()) {
        var obj = {};
        formCrearBanda.submit();
    }
});