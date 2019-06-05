<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>RED SOCIAL MÚSICA</title>
</head>

<body>
    <div class="">
        <div class="header d-flex justify-content-between p-3 align-items-center">
            <div class="d-flex invisible">
                <div class="mr-2">
                    <img src="./img/search-solid.svg" width="32px" height="32px">
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
                <div class="d-flex justify-content-center align-items-center" style="cursor:pointer">
                    <img src="./img/times-solid.svg" alt="" width="16px" height="16px">
                </div>
            </div>
            <div class="inputs p-2">
                <div class="d-flex justify-content-between p-2">
                    <div class="mr-3 w-50">
                        <input type="text" name="" placeholder="Usuario" id="">
                    </div>
                    <div class="w-50">
                        <input type="password" name="" placeholder="Contraseña" id="">
                    </div>
                </div>

                <div class="d-flex justify-content-between p-2">
                    <div class="mr-3 w-50">
                        <input type="password" name="" placeholder="Confirmar contraseña" id="">
                    </div>
                    <div class="w-50">
                        <input type="email" name="" placeholder="Email" id="">
                    </div>
                </div>

                <div class="d-flex justify-content-between p-2">
                    <div class="mr-3 w-50">
                        <input type="text" name="" placeholder="Nombre" id="">
                    </div>
                    <div class="w-50">
                        <input type="text" name="" placeholder="Apellido" id="">
                    </div>
                </div>

                <div class="d-flex justify-content-between p-2">
                    <div class="mr-3 w-50 d-flex">
                        <input type="text" onfocus="(this.type='date')" name="" width="" placeholder="F. de nac."
                            id="calendar">
                        <div class="d-flex justify-content-center align-items-center ml-2 w-auto">
                            <img src="./img/calendar-alt-regular.svg" width="16px" height="16px" alt="">
                        </div>
                    </div>
                    <div class="w-50">
                        <select name="" id="">
                            <option value="Sexo" selected disabled>Sexo</option>
                            <option value="">Masculino</option>
                            <option value="">Femenino</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-between p-2">
                    <div class="mr-3 w-50">
                        <select name="" id="">
                            <option value="Provincia" selected disabled>Provincia</option>
                        </select>
                    </div>
                    <div class="w-50">
                        <select name="" id="">
                            <option value="Partido" selected disabled>Partido</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex p-2">
                    <div class="mr-3 w-50">
                        <select name="" id="">
                            <option value="Localidad" selected disabled>Localidad</option>
                        </select>
                    </div>
                    <div class="w-50">

                    </div>
                </div>
            </div>
            <div class="d-flex footer-bloque p-2 px-3">
                <div class="d-flex ml-auto">
                    <div class="mr-3">
                        <button>Cancelar</button>
                    </div>
                    <div>
                        <button>Registrarse</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<script src="./js/jquery-3.4.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

</html>