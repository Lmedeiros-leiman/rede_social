<?php
namespace core;

class Request
{

    static function getPath() : string
    {
        $requestURI = $_SERVER["REQUEST_URI"] ?? "/";

        $getvariable = strpos($requestURI, "?");

        if ($getvariable === false)
        {
            return $requestURI;
        }

        return substr($requestURI,0, $getvariable);
    }

    static public function getMethod() : string
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }

    public static function getArgs() : array
    {
        // you never know what arguments you may need to use...
        return [...$_POST, ...$_GET];
    }


}
