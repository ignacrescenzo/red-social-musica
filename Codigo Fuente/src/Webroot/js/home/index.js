$(document).ready(function () {
    var btnCerrarSesion = $("#btnCerrarSesion");

    $('.dropdown-toggle').dropdown();
    btnCerrarSesion.click(function () {
        window.location.href = window.pathCerrarSesion;
    });
});