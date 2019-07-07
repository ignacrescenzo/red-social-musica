<script>
    var pathCerrarSesion = "<?php echo getBaseAddress() . "Seguridad/cerrarSesion"; ?>";
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
                            <button class="btn btn-link text-dark" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
                            <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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
                            <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Medios de pago
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                         data-parent="#accordionExample">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapse show text-dark" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Bandas
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                         data-parent="#accordionExample">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-3" style="cursor:pointer;">
                                <?php echo "<a href ='" . getBaseAddress() . "Banda/crear'>"; ?>
                                Crear banda
                            </div>
                            </a>
                            <div style="cursor:pointer;">
                                <?php echo "<a href ='" . getBaseAddress() . "Banda/misBandas'>"; ?>
                                Mis bandas
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse"
                                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Perfil
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                         data-parent="#accordionExample">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-5 w-75 border border-dark rounded-0">
            <h3 class="text-left pl-3 pt-3 mb-4">Mis Bandas</h3>

            <?php
            
                if(!$bandas)
                    echo '<h5 class="text-center text-black-50">No tiene bandas creadas</h5>';
                else
                {
                    foreach($bandas as $banda)
                    {
                        $nombre = $banda->getNombre();
                        $genero = $banda->getGenero();
                        echo
                            "<div class='w-100 border-top mt-3 border-bottom border-dark rounded-0'>
                    
                            <div class='row ml-4'>
                                
                                <i class='mt-2 mb-2 fa fa-3x fa-users' aria-hidden='true'></i>
            
                                <div class='flex-row ml-4 mt-2 col-md-8'>
                                    <h5 class='mb-0 mt-1'>$nombre</h5>
                                    <h6>$genero</h6>
                                </div>
                                
                                <button type='button' class='btn btn-secondary mt-3 mb-3'>Modificar</button>
                        
                            </div>
                            
                        </div>";
                    }
                }

            ?>

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