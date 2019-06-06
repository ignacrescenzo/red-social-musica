<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 5/6/2019
 * Time: 08:52
 */

class SeguridadController extends Controller
{
    function login()
    {
        $d["title"] = Constantes::LOGINTITLE;

        $this->set($d);
        $this->render(Constantes::LOGINVIEW);
    }

    function registrar()
    {
        $d["title"] = Constantes::REGISTRARTITLE;

        $provincia = new Provincia();
        $genero = new Genero();

        $d["generos"] = $genero->getAllGeneros();
        $d["provincias"] = $provincia->getAllProvincias();

        usort($d['generos'], Constantes::CMPBYID);
        usort($d['provincias'], Constantes::CMPBYNOMBRE);

        $this->set($d);
        $this->render(Constantes::REGISTRARVIEW);
    }

    function getPartidosByProvinciaId($json)
    {
        header("Content-type: application/json");

        $data = json_decode(utf8_decode($json['data']));
        $partido = new Partido();

        $partidos = $partido->getPartidosByProvinciaId($data->provinciaId);

        usort($partidos, Constantes::CMPBYNOMBRE);

        $partidosDto = array();

        foreach ($partidos as $partido) {
            $partidoDto = new PartidoDto();
            $partidoDto->id = $partido->getId();
            $partidoDto->nombre = mb_convert_encoding($partido->getNombre(), 'UTF-8', 'UTF-8');
            $partidoDto->provinciaId = $partido->getProvinciaId();
            $partidosDto[] = $partidoDto;
        }

        echo json_encode($partidosDto);
    }

    function getLocalidadesByPartidoId($json)
    {
        header("Content-type: application/json");

        $data = json_decode(utf8_decode($json['data']));

        $localidad = new Localidad();

        $localidades = $localidad->getLocalidadesByPartidoId($data->partidoId);

        usort($localidades, Constantes::CMPBYNOMBRE);

        $localidadesDto = array();

        foreach ($localidades as $localidad) {
            $localidadDto = new LocalidadDto();

            $localidadDto->id = $localidad->getId();
            $localidadDto->nombre = mb_convert_encoding($localidad->getNombre(), 'UTF-8', 'UTF-8');
            $localidadDto->partidoId = $localidad->getPartidoId();

            $localidadesDto[] = $localidadDto;
        }

        echo json_encode($localidadesDto);
    }

    function registrarUsuario($json)
    {
        header("Content-type: application/json");

        $data = json_decode($json["data"]);

        $usuario = new Usuario();

        $usuario->setNombre($data->nombre);
        $usuario->setApellido($data->apellido);
        $usuario->setUpassword($data->password);
        $usuario->setUsername($data->nickname);
        $usuario->setFechaNacimiento(date('Y-m-d', strtotime($data->fechaNacimiento)));
        $usuario->setEmail($data->email);
        $usuario->setRolId(Roles::USUARIO);
        $usuario->setGeneroId($data->generoId);
        $usuario->setProvinciaId($data->provinciaId);
        $usuario->setLocalidadId($data->localidadId);
        $usuario->setPartidoId($data->partidoId);

        if(!$usuario->registrarUsuario())
            throw new UsuarioNoRegistradoException("No se ha podido registrar el Usuario", CodigoError::UsuarioNoRegistrado);

        echo json_encode(true);
    }

    function loguearUsuario($json)
    {
        header("Content-type: application/json");

        $data = json_decode(utf8_decode($json['data']));

        $user = new Usuario();
        $session = new Session();

        if (FuncionesUtiles::esPalabraConNumeros($data->emailOrNick)) {
            $user->setUsername($data->emailOrNick);
            $user->setEmail(null);
        } else if (FuncionesUtiles::esEmailValido($data->emailOrNick)) {
            $user->setEmail($data->emailOrNick);
            $user->setUsername(null);
        } else {
            throw new EmailOrNickInvalidoException("El Email o Nickname insertado no son válidos", CodigoError::EmailOrNickInvalido);
        }

        if (PasswordHelper::validarPassword($data->password)) {
            $user->setUpassword($data->password);
        } else {
            throw new PasswordInvalidaException("Formato de password ingresado inválido", CodigoError::PasswordInvalida);
        }

        if(!$user->loguearUsuarioDB()) {
            throw new UsuarioNoEncontradoException("Usuario o contraseña inválido. Revise sus datos y vuelva a intentarlo", CodigoError::UsuarioNoEncontrado);
        } else {
            $session->setId($user->getId());
            $session->setUserName($user->getUsername());
            $session->setRolId($user->getRolId());
            $_SESSION["session"] = serialize($session);
        }

        echo json_encode(true);
    }

    function cerrarSesion(){
        session_destroy();
        header("Location:" . getBaseAddress());
    }
}