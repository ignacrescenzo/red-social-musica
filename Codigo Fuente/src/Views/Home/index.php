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
            <div>
                <a class="text-white" href="#" data-toggle="modal" data-target="#cerrarModal">Cerrar sesión</a>
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
    <div class="container">
        <div class="mb-4 mt-2">
            <div class="text-center">
                <h2>Próximos eventos</h2>
            </div>
            <div class="w-100 eventos">

            </div>
        </div>
        <div>
            <div class="text-center">
                <h2>Descubre Artistas</h2>
            </div>
            <div class="w-100 descubre">

            </div>
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

<script src="<?php echo getBaseAddress() . "Webroot/js/home/index.js" ?>"></script>
