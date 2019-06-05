<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 11/5/2019
 * Time: 10:23
 */

abstract class Constantes
{
    //Títulos
    const LOGINTITLE = "Login";
    const REGISTRARTITLE = "Registrar";
    const INDEXTITLE = "Index";

    //Vistas
    const INDEXVIEW = "index";
    const LOGINVIEW = "login";
    const REGISTRARVIEW = "registrar";
    const USUARIOVIEW = "usuario";

    //Propiedades Usuario
    const USUARIONOMBRE = "nombre";
    const USUARIOAPELLIDO = "apellido";

    //Comparadores
    const CMPBYID = "FuncionesUtiles::cmpById";
    const CMPBYNOMBRE = "FuncionesUtiles::cmpByNombre";

    //Regex
    const REGEXLETRASYNUMEROS = "/^[0-9a-zA-Z]+$/";
    const REGEXEMAIL = "/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/";
    const REGEXSOLOLETRAS = "/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/";
    const REGEXLETRASYESPACIO = "/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/";
    const REGEXLETRASNUMEROSYESPACIO = "/^[0-9a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[0-9a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[0-9a-zA-ZÀ-ÿ\u00f1\u00d1]+$/";
    const REGEXSOLONUMEROS = "/^[0-9]+$/";
}