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
        $this->set($d);
        $this->render(Constantes::MODIFICARPERFILVIEW);
    }
}