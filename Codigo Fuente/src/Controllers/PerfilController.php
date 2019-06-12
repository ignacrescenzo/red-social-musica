<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 9/6/2019
 * Time: 16:08
 */

class PerfilController extends Controller
{
    function modificar()
    {
        $d["title"] = Constantes::MODIFICARPERFILTITLE;
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
        $this->render(Constantes::MODIFICARPERFILVIEW);
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
}