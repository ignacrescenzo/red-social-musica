<script>
    const pathGetPartidosByProvinciaId = "<?php echo getBaseAddress() . "Seguridad/getPartidosByProvinciaId"; ?>";
    const pathGetLocalidadesByPartidoId = "<?php echo getBaseAddress() . "Seguridad/getLocalidadesByPartidoId"; ?>";
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
                    <div id="errorNickname" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span class="text-center"></span>
                    </div>
                </div>
                <div class="w-50">
                    <input type="password" name="password" placeholder="Contraseña" id="inputPassword">
                    <div id="errorPassword" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span class="text-center"></span>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between p-2">
                <div class="mr-3 w-50">
                    <input type="password" name="rePassword" placeholder="Confirmar contraseña" id="inputRePassword">
                    <div id="errorRePassword" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span class="text-center"></span>
                    </div>
                </div>
                <div class="w-50">
                    <input type="email" name="email" placeholder="Email" id="inputEmail">
                    <div id="errorEmail" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span class="text-center"></span>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between p-2">
                <div class="mr-3 w-50">
                    <input type="text" name="nombre" placeholder="Nombre" id="inputNombre">
                    <div id="errorNombre" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span class="text-center"></span>
                    </div>
                </div>
                <div class="w-50">
                    <input type="text" name="apellido" placeholder="Apellido" id="inputApellido">
                    <div id="errorApellido" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span class="text-center"></span>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between p-2">
                <div class="mr-3 w-50 d-flex">
                    <div class="d-flex">
                        <input type="text" onfocus="(this.type='date')" name="fechaNacimiento" width=""
                               placeholder="F. de nac."
                               id="inputFechaNacimiento">
                        <div class="d-flex justify-content-center align-items-center ml-2 w-auto">
                            <i class="fa fa-calendar-alt"></i>
                        </div>
                    </div>
                    <div id="errorFechaNacimiento" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span class="text-center"></span>
                    </div>
                </div>
                <div class="w-50">
                    <select name="genero" id="selectGenero">
                        <option value="0" selected disabled>Seleccione su Género</option>
                        <?php
                        foreach ($generos as $genero)
                            echo "<option value='" . $genero->getId() . "'>" . $genero->getNombre() . "</option>";
                        ?>
                    </select>
                    <div id="errorGenero" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span class="text-center"></span>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between p-2">
                <div class="mr-3 w-50">
                    <select name="provincia" id="selectProvincia">
                        <option value="0" selected disabled>Seleccione una Provincia</option>
                        <?php
                        foreach ($provincias as $provincia)
                            echo "<option value='" . $provincia->getId() . "'>" . $provincia->getNombre() . "</option>";
                        ?>
                    </select>
                    <div id="errorProvincia" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span class="text-center"></span>
                    </div>
                </div>
                <div class="w-50">
                    <select name="partido" id="selectPartido">
                        <option value="0" selected disabled>Seleccione un Partido</option>
                    </select>
                    <div id="errorPartido" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span class="text-center"></span>
                    </div>
                </div>
            </div>

            <div class="d-flex p-2">
                <div class="mr-3 w-50">
                    <select name="localidad" id="selectLocalidad">
                        <option value="0" selected disabled>Selecciona una Localidad</option>
                    </select>
                    <div id="errorLocalidad" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span class="text-center"></span>
                    </div>
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
