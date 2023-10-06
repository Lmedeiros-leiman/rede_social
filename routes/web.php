<?php

use core\Router;

/*
|--------------------------------------------------------------------------
| Rotas web
|--------------------------------------------------------------------------
| Aqui sera uma interface web, similar ao laravel.
|
*/

use controllers\Webmaincontroller;

Router::get('/',[Webmaincontroller::class, "index"]);
Router::get('/contato',"chamando formulario de contato");
