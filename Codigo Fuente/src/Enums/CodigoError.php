<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 5/6/2019
 * Time: 10:30
 */

abstract class CodigoError
{
    const UsuarioNoRegistrado = 1;
    const PasswordInvalida = 5;
    const EmailOrNickInvalido = 7;
    const UsuarioNoEncontrado = 15;
    const BandaNoRegistradaException = 18;
    const RedSocialNoRegistradaException = 20;
    const BandaDuplicada = 21;
    const RedSocialDuplicada = 22;
}