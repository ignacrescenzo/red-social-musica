<script>
    var pathCerrarSesion = "<?php echo getBaseAddress() . "Seguridad/cerrarSesion"; ?>";
</script>

<div class="">
    <div class="header d-flex justify-content-between p-3 align-items-center">
        <div class="d-flex">
            <div class="mr-2">
                <i class="fas fa-search fa-2x"></i>
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
        <div class="d-flex">
            <?php
            if (isset($_SESSION["session"])) {

                echo '<div class="mr-3">
                <a href="' . getBaseAddress() . 'Perfil/modificar' . '">
                    ' . unserialize($_SESSION["session"])->getUserName() . '
                </a>
            </div>
            <div class="text-white">
                <a href="' . getBaseAddress() . 'Seguridad/cerrarSesion' . '" class="text-white">
                    Cerrar Sesión
                </a>
            </div>';

            } else {
                echo '<div class="mr-3">
                <a href="' . getBaseAddress() . 'Seguridad/login' . '">
                    Login
                </a>
            </div>
            <div class="text-white">
                <a href="' . getBaseAddress() . 'Seguridad/registrar' . '" class="text-white">
                    Registrarse
                </a>
            </div>';
            }
            ?>
        </div>


    </div>
    <div class="container-fluid">
        <div class="m-5 p-3 border border-dark rounded-0">
            <h3 class="text-left mb-4">Información Personal</h3>
            <form method="POST">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-sm-6">
                        <div class="form-row">
                            <div class="form-group row w-100 justify-content-start align-items-center">
                                <label for="inputNombre" class="col-sm-5 col-form-label">Nombre:</label>
                                <div class="col-sm-7">
                                    <input type="text" value = '<?php echo $buscado["Nombre"] ?>' name="nombre" id="inputNombre" placeholder="Ingrese su Nombre">
                                </div>
                            </div>
                            <div class="form-group row w-100 justify-content-start align-items-center">
                                <label for="inputApellido" class="col-sm-5 col-form-label">Apellido:</label>
                                <div class="col-sm-7">
                                    <input type="text" name="apellido" value = '<?php echo $buscado["Apellido"] ?>' id="inputApellido"
                                           placeholder="Ingrese su Apellido">
                                </div>
                            </div>
                            <div class="form-group row w-100 justify-content-start align-items-center">
                                <label for="inputEmail" class="col-sm-5 col-form-label">Email:</label>
                                <div class="col-sm-7">
                                    <input type="email" value = '<?php echo $buscado["Email"] ?>' name="email" id="inputEmail" placeholder="Ingrese su Email">
                                </div>
                            </div>
                            <div class="form-group row w-100 justify-content-start align-items-center">
                                <label for="selectSexo" class="col-sm-5 col-form-label">Género:</label>
                                <div class="col-sm-7">
                                    <select name="genero" id="selectGenero">
                                        <option value="0" disabled>Seleccione su Género</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-row">
                            <div class="form-group row w-100 justify-content-start align-items-center">
                                <label for="inputFechaDeNacimiento" class="col-sm-5 col-form-label">Fecha de
                                    Nacimiento:</label>
                                <div class="col-sm-7">
                                    <div class="d-flex">
                                        <input type="text" value = '<?php echo $buscado["FechaNacimiento"] ?>' onfocus="(this.type='date')" name="fechaDeNacimiento"
                                               id="inputFechaDeNacimiento" placeholder="Fecha de Nacimiento">
                                        <div class="d-flex justify-content-center align-items-center ml-2">
                                            <i class="fa fa-calendar-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row w-100 justify-content-start align-items-center">
                                <label for="selectProvincia" class="col-sm-5 col-form-label">Provincia:</label>
                                <div class="col-sm-7">
                                    <select name="provincia" id="selectProvincia">
                                        <option value="0" disabled>Seleccione una Provincia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row w-100 justify-content-start align-items-center">
                                <label for="selectPartido" class="col-sm-5 col-form-label">Partido:</label>
                                <div class="col-sm-7">
                                    <select name="partido" id="selectPartido">
                                        <option value="0" disabled>Seleccione su Partido</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row w-100 justify-content-start align-items-center">
                                <label for="selectLocalidad" class="col-sm-5 col-form-label">Localidad:</label>
                                <div class="col-sm-7">
                                    <select name="localidad" id="selectLocalidad">
                                        <option value="0" disabled>Seleccione su Localidad</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex my-5 justify-content-center align-items-center">
                    <div class="col-sm-6">
                        <div class="form-row">
                            <div class="form-group row w-100 justify-content-start align-items-center">
                                <label for="inputPassword" class="col-sm-5 col-form-label">Contraseña:</label>
                                <div class="col-sm-7">
                                    <input type="password" value = '<?php echo $buscado["UPassword"] ?>' name="password" id="inputPassword"
                                           placeholder="Ingrese una Contraseña">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-row">
                            <div class="form-group row w-100 justify-content-start align-items-center">
                                <label for="inputRePassword" class="col-sm-5 col-form-label">Confirmar
                                    Contraseña:</label>
                                <div class="col-sm-7">
                                    <input type="password" value = '<?php echo $buscado["UPassword"] ?>' name="rePassword" id="inputRePassword"
                                           placeholder="Confirme su Contraseña">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex mx-auto w-25 justify-content-around align-items-center">
                    <button type="submit" class="btn btn-danger">Guardar</button>
                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cerrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Seguro desea cerrar sesión?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" id="btnCerrarSesion" class="btn btn-danger">Si</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo getBaseAddress() . "Webroot/js/perfil/modificar.js"; ?>"></script>