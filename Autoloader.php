<?php

class Autoloader
{
    public function __construct()
    {
        // not sure if this whole class is needed...
        // i could just implement this in Application constructor...
        // ah why bloat an innocent class...
        spl_autoload_register([$this, 'loadClass']);
    }

    private function loadClass($className)
    {
        $classFilePath = __DIR__ .'/'. $className . '.php';
        require_once $classFilePath;
        return true;
    }

}