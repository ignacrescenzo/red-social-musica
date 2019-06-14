const regexEmail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
const regexLetrasYNumeros = /^[0-9a-zA-Z]+$/;

var inputEmailOrNick = $('#inputEmailOrNick');
var inputPassword = $('#inputPassword');
var btnIngresar = $("#btnIngresar");
var errorNick = $("#errorNick");

function validarEmailOrNick() {
    var validacion = false;
    var emailOrNick = inputEmailOrNick.val();

    if (emailOrNick === null || emailOrNick.length === 0 || emailOrNick === "") {
        $("#errorEmailOrNick").removeClass("d-none").addClass("d-flex").find("span").text("Ingrese su Nick/Email");
        errorNick.fadeIn("slow");
    } else if (!regexEmail.test(emailOrNick) && !regexLetrasYNumeros.test(emailOrNick)) {
        $("#errorEmailOrNick").removeClass("d-none").addClass("d-flex").find("span").text("Nick o Email inválido");
    } else {
        validacion = true;
    }

    return validacion;
}

function validarPassword() {
    var validacion = false;
    var pass = inputPassword.val();

    if (pass === null || pass.length === 0 || pass === "") {
        $("#errorPassword").removeClass("d-none").addClass("d-flex").find("span").text("Ingrese su contraseña");
    } else if (pass.length < 6 || pass.length > 15 || !regexLetrasYNumeros.test(pass)) {
        $("#errorPassword").removeClass("d-none").addClass("d-flex").find("span").text("Contraseña inválida");
    } else {
        validacion = true;
    }

    return validacion;
}
$("input").keypress(function (e) {
    if (e.keyCode == 13) {
        $(".error").fadeOut();

        var validacion = validarEmailOrNick() && validarPassword();

        if (validacion) {
            $("input").prop("disabled", true);
            btnIngresar.prop("disabled", true);
            var obj = {};
            obj.emailOrNick = inputEmailOrNick.val();
            obj.password = inputPassword.val();
            llamadaAjax(pathAccionLoguear, JSON.stringify(obj), true, "loginExitoso", "loginFallido");
        }
    }
});
btnIngresar.click(function () {

    $(".error").removeClass("d-flex").addClass("d-none").find("span").text("");

    var validacion = validarEmailOrNick() && validarPassword();

    if (validacion) {
        $("input").prop("disabled", true);
        btnIngresar.prop("disabled", true);
        var obj = {};
        obj.emailOrNick = inputEmailOrNick.val();
        obj.password = inputPassword.val();
        llamadaAjax(pathAccionLoguear, JSON.stringify(obj), true, "loginExitoso", "loginFallido");
    }
});

function loginExitoso(dummy) {
    window.location.href = pathHome;
}

function loginFallido(err) {
    $("input").prop("disabled", false);
    btnIngresar.prop("disabled", false);
    alertify.alert("Error de Logueo", err);
}