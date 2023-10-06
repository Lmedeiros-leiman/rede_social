<?php

namespace core;

use core\Controller;
class Router
{
    static protected array $routes = [];

    public function __construct()
    {

    }
    public static function addRoute($method, $path, $callback)
    {
        self::$routes[$method][$path] = $callback;
    }
    public static function get($path,$callback)
    {
        self::addRoute('get',$path,$callback);
        return true;
    }
    public static function post($path,$callback)
    {
        self::addRoute('post',$path,$callback);
        return true;
    }

    public static function resolve()
    {
        $path = Request::getPath();
        $method = Request::getMethod();
        $callback = self::$routes[$method][$path] ?? false;
        $args = Request::getArgs(); // array -> $_GET or $_POST


        if ($callback === false)
        {

            return call_user_func_array(['core\Controller','handle404'], $args);

        }


        return call_user_func_array($callback, $args);
    }
}

