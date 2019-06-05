<?php
class HomeController extends Controller
{
    function index()
    {
        $d["title"] = Constantes::INDEXTITLE;
        $this->set($d);
        $this->render(Constantes::INDEXVIEW);
    }
}
?>