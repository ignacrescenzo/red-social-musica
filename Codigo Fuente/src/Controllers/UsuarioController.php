<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 11/5/2019
 * Time: 11:41
 */

class UsuarioController extends Controller
{
    function usuario($usuario)
    {
        var_dump($usuario);
        require_once ROOT . "Models/Usuario.php";
        $user = new Usuario();
        $user->setId($usuario[0]);
        $user->setNombre($usuario[Constantes::USUARIONOMBRE]);
        $user->setApellido($usuario[Constantes::USUARIOAPELLIDO]);
        $d['user'] = $user;
        $d['title'] = "Usuario";
        $this->set($d);
        $this->render(Constantes::USUARIOVIEW);
    }
}