<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

use \App\Http\Router;
use \App\Utils\View;

define('URL','http://localhost/mvcEmPHP');

//Define o valor padrão das variáveis
View::init([
    'URL' => URL
]);

//Inicia o router
$obRouter = new Router(URL);

//Inclui as rotas de páginas
include __DIR__.'/routes/pages.php';

//Imprime o Response da rota
$obRouter->run()
         ->sendResponse();