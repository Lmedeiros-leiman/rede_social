<?php

namespace core;


class Controller
{

    public static function renderView($view, ...$data)
    {
        // baseplate will have the boilerplate HTML
        // the page especific thing will be called in layout.
        // CSS will HAVE to be inline...
        // trying to find a way around for the eaze of

        require Application::$rootPath . "views/index.php";
    }

    public static function handle404()
    {
        echo "CHAMANDO PÁGINA 404";
    }

}
