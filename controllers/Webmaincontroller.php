<?php

namespace controllers;

use core\Controller;

class Webmaincontroller extends Controller
{

    public static function index( $teste = "eae",  ...$args )
    {
        echo "<br>";
        echo "CHAMANDO INDEX CONTROLADOR PRINCIPAL";

        Controller::renderView("home", ['entrada' => 'valor']);

    }



}