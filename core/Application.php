<?php

namespace Core;

use core\Request;
use core\Router;

class Application
{
    public static $rootPath = __DIR__ . "/../";

    public function __construct()
    {
        // call web routes.
        require_once self::$rootPath . "routes/web.php" ;

        // send the user to the requested page.
        Router::resolve();

    }


}