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

        $this->set($d);
        $this->render(Constantes::REGISTRARVIEW);
    }
}