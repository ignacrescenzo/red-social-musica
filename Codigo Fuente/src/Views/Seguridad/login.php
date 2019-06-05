<script>
    const pathAccionLoguear = "<?php echo getBaseAddress() . "Seguridad/loguearUsuario"; ?>";
</script>

<div class="">
    <div class="header d-flex justify-content-between p-3 align-items-center">
        <div class="d-flex invisible">
            <div class="mr-2">
            </div>
            <div style="cursor:pointer;">
                <input type="text" placeholder="BUSCAR">
            </div>
        </div>
        <div class="d-flex text-white mr-5">
            <h1>
                RED SOCIAL MÚSICA
            </h1>
        </div>
        <div class="d-flex invisible">
            <div class="mr-3">
                Login
            </div>
            <div class="text-white">
                Registrarse
            </div>
        </div>
    </div>
    <div class="container container-login p-4 mt-5">
        <div class="w-50 mx-auto text-center mb-4   ">
            <h1>
                Log in
            </h1>
        </div>
        <div class="w-50 mx-auto p-1">
            <input type="text" placeholder="Usuario" name="emailOrNick" class="mb-4" id="inputEmailOrNick">
            <input type="password" name="password" placeholder="Contraseña" id="inputPassword">
        </div>
        <div class="w-50 mx-auto text-center mt-4">
            <button id="btnIngresar">Iniciar sesión</button>
        </div>
    </div>
</div>

<script src="<?php echo getBaseAddress() . "Webroot/js/seguridad/validacionLogin.js" ?>"></script>
