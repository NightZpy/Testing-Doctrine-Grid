<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validar
 *
 * @author NightZpy
 */
class Validar {

    public static function validarEntradaNumericaPost($entrada) {
        if(!empty($_POST) &&  isset($_POST["$entrada"]) && $_POST["$entrada"] != ''){
            $entrada = filter_input(INPUT_POST,  "$entrada", FILTER_SANITIZE_STRING);
            if(is_numeric($entrada))
                return $entrada;
            return FALSE;
        }
        return FALSE;
    }

    public static function validarEntradaEmailPost($entrada) {
        if(!empty($_POST) &&  isset($_POST["$entrada"]) && $_POST["$entrada"] != '')
            if(($entrada = filter_var($_POST["$entrada"], FILTER_VALIDATE_EMAIL)) != FALSE)
               return $entrada;
        return FALSE;
    }

    public static function validarEntradaCadenaPost($entrada) {
        if(!empty($_POST) &&  isset($_POST["$entrada"]) && $_POST["$entrada"] != '')
            return filter_input(INPUT_POST,  "$entrada", FILTER_SANITIZE_STRING);
        return FALSE;
    }

    public static function validarEntradaFechaPost($entrada) {
        if(!empty($_POST) &&  isset($_POST["$entrada"]) && $_POST["$entrada"] != ''){
            $entrada = filter_input(INPUT_POST,  "$entrada", FILTER_SANITIZE_STRING);
            if(Fecha::fechaValida($entrada))
                return $entrada;
        }
        return FALSE;
    }

    public static function validarEntradaNumericaGet($entrada) {
        if(!empty($_GET) &&  isset($_GET["$entrada"]) && $_GET["$entrada"] != ''){
            $entrada = filter_input(INPUT_GET,  "$entrada", FILTER_SANITIZE_STRING);
            if(is_numeric($entrada))
                return $entrada;
            return FALSE;
        }
        return FALSE;
    }

    public static function validarEntradaEmailGet($entrada) {
        if(!empty($_GET) &&  isset($_GET["$entrada"]) && $_GET["$entrada"] != '')
            if(($entrada = filter_var($_GET["$entrada"], FILTER_VALIDATE_EMAIL)) != FALSE)
               return $entrada;
        return FALSE;
    }

    public static function validarEntradaCadenaGet($entrada) {
        if(!empty($_GET) &&  isset($_GET["$entrada"]) && $_GET["$entrada"] != '')
            return filter_input(INPUT_GET,  "$entrada", FILTER_SANITIZE_STRING);
        return FALSE;
    }

    public static function validarEntradaFechaGet($entrada) {
        if(!empty($_GET) &&  isset($_GET["$entrada"]) && $_GET["$entrada"] != ''){
            $entrada = filter_input(INPUT_GET,  "$entrada", FILTER_SANITIZE_STRING);
            if(Fecha::fechaValida($entrada))
                return $entrada;
        }
        return FALSE;
    }
}
?>
