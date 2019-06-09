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
        $this->set($d);
        $this->render(Constantes::MODIFICARPERFILVIEW);
    }
}