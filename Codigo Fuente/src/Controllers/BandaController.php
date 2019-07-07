<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 9/6/2019
 * Time: 16:08
 */

class BandaController extends Controller
{
    function crear()
    {
        $d["title"] = "Crear banda";
        $usuario = new Usuario();
        $session = new Session();
        $id = unserialize($_SESSION["session"])->getId();
        $buscado = $usuario->selectByPk($id);
        $d["buscado"] = $buscado;
        $provincia = new Provincia();
        $genero = new Genero();
        $d["generos"] = $genero->getAllGeneros();
        $d["provincias"] = $provincia->getAllProvincias();
        usort($d['generos'], Constantes::CMPBYID);
        usort($d['provincias'], Constantes::CMPBYNOMBRE);
        $this->set($d);
        $this->render("crear");
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

    function modificarUsuario($user){
        $usuario = new Usuario();
        $usuario->setId($user["id"]);
        $usuario->setNombre($user["nombre"]);
        $usuario->setEmail($user["email"]);
        $usuario->setFechaNacimiento($user["fechaDeNacimiento"]);
        $usuario->setProvinciaId($user["provincia"]);
        $usuario->setPartidoId($user["partido"]);
        $usuario->setLocalidadId($user["localidad"]);
        $usuario->setGeneroId($user["genero"]);
        $usuario->setApellido($user["apellido"]);
        $usuario->setUpassword($user["password"]);
        $usuario->actualizarUsuario();


        header("Location:" . getBaseAddress());
    }

    function crearBanda($data) {

        $banda = new Banda();

        $banda->setNombre($data["nombreBanda"]);
        $banda->setProvinciaId($data["provincia"]);
        $banda->setPartidoId($data["partido"]);
        $banda->setLocalidadId($data["localidad"]);
        $banda->setGenero($data["generoMusical"]);
        $banda->setLiderId(unserialize($_SESSION["session"])->getId());

        if($banda->existeBanda()) {
            throw new BandaDuplicadaException("Ya existe una banda con el nombre " . $banda->getNombre(), CodigoError::BandaDuplicada);
        }

        if(!$banda->crearBanda()) {
            throw new BandaNoRegistradaException("Ha ocurrido un error interno y no se ha podido registrar su banda", CodigoError::BandaNoRegistradaException);
        }

        foreach ($data["red"] as $red) {
            if($red) {
                $redSocial = new RedSocial();
                $redSocial->setBandaId($banda->getId());
                $redSocial->setLink($red);

                if($redSocial->existeRedSocial()) {
                    throw new RedSocialDuplicadaException("Ya existe una red social con el enlace " . $redSocial->getLink() . " para la banda con Id " . $redSocial->getBandaId(), CodigoError::RedSocialDuplicada);
                }

                if(!$redSocial->guardarRedSocialBanda()) {
                    throw new RedSocialNoRegistradaException("Ha ocurrido un error interno y no se ha podido registrar su red social", CodigoError::RedSocialNoRegistradaException);
                }
            }
        }

        header("Location:" . getBaseAddress());
    }
}