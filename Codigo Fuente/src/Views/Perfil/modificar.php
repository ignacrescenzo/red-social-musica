<script>
    var pathCerrarSesion = "<?php echo getBaseAddress() . "Seguridad/cerrarSesion"; ?>";
    var provinciaId = <?php echo $buscado["ProvinciaId"]; ?>;
    var localidadId = <?php echo $buscado["LocalidadId"]; ?>;
    var partidoId = <?php echo $buscado["PartidoId"]; ?>;
    var generoId = <?php echo $buscado["GeneroId"]; ?>;
    const pathGetPartidosByProvinciaId = "<?php echo getBaseAddress() . "Seguridad/getPartidosByProvinciaId"; ?>";
    const pathGetLocalidadesByPartidoId = "<?php echo getBaseAddress() . "Seguridad/getLocalidadesByPartidoId"; ?>";
    const pathModificarUsuario = "<?php echo getBaseAddress() . "Perfil/modificarUsuario"; ?>";
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
    <div class="container-fluid d-flex">
    <div class="d-flex w-25 mt-5 flex-column">
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Suscripciones
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Difusiones
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Medios de pago
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapse show text-dark" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Bandas
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body d-flex flex-column">
      <div class="mb-3" style="cursor:pointer;">
      <?php echo "<a href ='".getBaseAddress() ."Banda/crear'>"; ?>
      Crear banda
      </div>
      </a>
      <div style="cursor:pointer;">
      Mis bandas
      </div>
      </div>
    </div>
  </div>
</div>
    </div>
        <div class="m-5 w-75 p-3 border border-dark rounded-0">
            <h3 class="text-left mb-4">Información Personal</h3>
            <form method="POST" action=" <?php echo getBaseAddress() . "Perfil/modificarUsuario"; ?>">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-sm-6">
                        <div class="form-row">
                            <div class="form-group row w-100 justify-content-start">
                                <label for="inputNombre" class="col-sm-5 col-form-label">Nombre:</label>
                                <div class="col-sm-7">
                                    <input type="text" value = '<?php echo $buscado["Nombre"] ?>' name="nombre" id="inputNombre" placeholder="Ingrese su Nombre">
                                    <div id="errorNombre" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        <span class="text-center"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row w-100 justify-content-start">
                                <label for="inputApellido" class="col-sm-5 col-form-label">Apellido:</label>
                                <div class="col-sm-7">
                                    <input type="text" name="apellido" value = '<?php echo $buscado["Apellido"] ?>' id="inputApellido"
                                           placeholder="Ingrese su Apellido">
                                    <div id="errorApellido" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        <span class="text-center"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row w-100 justify-content-start">
                                <label for="inputEmail" class="col-sm-5 col-form-label">Email:</label>
                                <div class="col-sm-7">
                                    <input type="email" value = '<?php echo $buscado["Email"] ?>' name="email" id="inputEmail" placeholder="Ingrese su Email">
                                    <div id="errorEmail" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        <span class="text-center"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row w-100 justify-content-start">
                                <label for="selectSexo" class="col-sm-5 col-form-label">Género:</label>
                                <div class="col-sm-7">
                                    <select name="genero" id="selectGenero">
                                        <option value="0" disabled selected>Seleccione su Género</option>
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
                                    <div id="errorFechaNacimiento" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        <span class="text-center"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row w-100 justify-content-start align-items-center">
                                <label for="selectProvincia" class="col-sm-5 col-form-label">Provincia:</label>
                                <div class="col-sm-7">
                                    <select name="provincia" id="selectProvincia">
                                        <option value="0" disabled>Seleccione una Provincia</option>
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
                            </div>
                            <div class="form-group row w-100 justify-content-start align-items-center">
                                <label for="selectPartido" class="col-sm-5 col-form-label">Partido:</label>
                                <div class="col-sm-7">
                                    <select name="partido" id="selectPartido">
                                        <option value="0" selected disabled>Seleccione su Partido</option>
                                    </select>
                                    <div id="errorPartido" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        <span class="text-center"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row w-100 justify-content-start align-items-center">
                                <label for="selectLocalidad" class="col-sm-5 col-form-label">Localidad:</label>
                                <div class="col-sm-7">
                                    <select name="localidad" id="selectLocalidad">
                                        <option value="0" selected disabled>Seleccione su Localidad</option>
                                    </select>
                                    <div id="errorLocalidad" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        <span class="text-center"></span>
                                    </div>
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
                                    <div id="errorPassword" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        <span class="text-center"></span>
                                    </div>
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
                                    <div id="errorRePassword" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        <span class="text-center"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" id='inputId' value="<?php echo $buscado["Id"] ?>">
                </div>
                <div class="d-flex mx-auto w-25 justify-content-around align-items-center">
                    <button type="button" id="btnGuardar" class="btn btn-danger">Guardar</button>
                    <button type="reset" id="btnCancelar" class="btn btn-secondary">Cancelar</button>
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