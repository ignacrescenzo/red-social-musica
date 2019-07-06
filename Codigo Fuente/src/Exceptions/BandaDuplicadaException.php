<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 6/7/2019
 * Time: 18:20
 */

class BandaDuplicadaException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}