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
      Crear banda
      </div>
      <div style="cursor:pointer;">
      Mis bandas
      </div>
      </div>
    </div>
  </div>
</div>
    </div>
        <div class="m-5 w-75 p-3 border border-dark rounded-0">
            <h3 class="text-left mb-4">Crear banda</h3>
            <form method="POST" action=" <?php echo getBaseAddress() . "Banda/crearBanda"; ?>">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-sm-6">
                        <div class="form-row">
                            <div class="form-group row w-100 justify-content-start">
                                <label for="inputNombreBanda" class="col-sm-5 col-form-label">Nombre:</label>
                                <div class="col-sm-7">
                                    <input type="text" name="nombreBanda" id="inputNombreBanda" placeholder="Ingrese el Nombre">
                                    <div id="errorNombreBanda" class="error d-none w-100 p-2 my-2 shadow rounded bg-warning align-items-center justify-content-center">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        <span class="text-center"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row w-100 justify-content-start">
                                <label for="selectGeneroMusical" class="col-sm-5 col-form-label">Géneros:</label>
                                <div class="col-sm-7">
                                    <input type="text" name="generoMusical" placeholder="Ingrese el/los géneros" id="generoMusical">
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
                        </div>
                    </div>
                    <div class="col-sm-6 pb-5">
                        <div class="form-row">
                        <div class="form-group row w-100 justify-content-start">
                                <label for="inputRed1" class="col-sm-5 col-form-label">Redes sociales:</label>
                                <div class="col-sm-7 pb-3">
                                    <input type="text" name="InputRed1" id="inputRed1" placeholder="Ingrese su red social">
                                     
                                </div>
                                <div class="d-flex mt-4 ml-2">
                                <input type="text" class="mr-2 " name="InputRed2" id="inputRed2" placeholder="Ingrese su red social">
                                <input type="text" name="InputRed3" id="inputRed3" placeholder="Ingrese su red social">
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
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" id='inputId' value="<?php echo $buscado["Id"] ?>">
                <div class="d-flex ml-auto w-25 justify-content-around align-items-center">
                    <button type="button" id="btnGuardar" class="btn btn-danger">Cancelar</button>
                    <button type="reset" id="btnCancelar" class="btn btn-secondary">Crear Banda</button>
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