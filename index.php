<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

use \App\Http\Router;
use \App\Http\Response;
use \App\Controller\Pages\Home;


define('URL','/');

$obRouter = new Router(URL);

//Rota Home
$obRouter->get('/', [
    function(){
        return new Response(200, Home::getHome());
    }
]);