<script>
    const pathRegistrarUsuario = "<?php echo getBaseAddress() . "Seguridad/registrarUsuario"; ?>";
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
    <div class="bloque mx-auto mt-5">
        <div class="d-flex justify-content-between align-items-center header-bloque px-3">
            <div class="p-1">
                Registro
            </div>
        </div>
        <div class="inputs p-2">
            <div class="d-flex justify-content-between p-2">
                <div class="mr-3 w-50">
                    <input type="text" name="nickname" placeholder="Usuario" id="inputNickname">
                </div>
                <div class="w-50">
                    <input type="password" name="password" placeholder="Contraseña" id="inputPassword">
                </div>
            </div>

            <div class="d-flex justify-content-between p-2">
                <div class="mr-3 w-50">
                    <input type="password" name="rePassword" placeholder="Confirmar contraseña" id="inputRePassword">
                </div>
                <div class="w-50">
                    <input type="email" name="email" placeholder="Email" id="inputEmail">
                </div>
            </div>

            <div class="d-flex justify-content-between p-2">
                <div class="mr-3 w-50">
                    <input type="text" name="nombre" placeholder="Nombre" id="inputNombre">
                </div>
                <div class="w-50">
                    <input type="text" name="apellido" placeholder="Apellido" id="inputApellido">
                </div>
            </div>

            <div class="d-flex justify-content-between p-2">
                <div class="mr-3 w-50 d-flex">
                    <input type="text" onfocus="(this.type='date')" name="fechaNacimiento" width="" placeholder="F. de nac."
                           id="inputFechaNacimiento">
                    <div class="d-flex justify-content-center align-items-center ml-2 w-auto">
                        <i class="fa fa-calendar-alt"></i>
                    </div>
                </div>
                <div class="w-50">
                    <select name="genero" id="selectGenero">
                        <option value="0" selected disabled>Seleccione su Género</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-between p-2">
                <div class="mr-3 w-50">
                    <select name="provincia" id="selectProvincia">
                        <option value="0" selected disabled>Seleccione una Provincia</option>
                    </select>
                </div>
                <div class="w-50">
                    <select name="partido" id="selectPartido">
                        <option value="0" selected disabled>Seleccione un Partido</option>
                    </select>
                </div>
            </div>

            <div class="d-flex p-2">
                <div class="mr-3 w-50">
                    <select name="localidad" id="selectLocalidad">
                        <option value="0" selected disabled>Selecciona una Localidad</option>
                    </select>
                </div>
                <div class="w-50">

                </div>
            </div>
        </div>
        <div class="d-flex footer-bloque p-2 px-3">
            <div class="d-flex ml-auto">
                <div class="mr-3">
                    <button id="btnCancelar">Cancelar</button>
                </div>
                <div>
                    <button id="btnRegistrar">Registrarse</button>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="<?php echo getBaseAddress() . "Webroot/js/seguridad/registrar.js"; ?>"></script>
<script src="<?php echo getBaseAddress() . "Webroot/js/seguridad/validacionRegistrar.js"; ?>"></script>
