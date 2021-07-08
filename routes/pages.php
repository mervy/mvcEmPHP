<?php

use \App\Http\Response;
use \App\Controller\Pages;

//Rota Home
$obRouter->get('/', [
    function(){
       return new Response(200, Pages\Home::getHome());
    }
]);

//Rota Blog
$obRouter->get('/blog', [
    function(){
       return new Response(200, Pages\Blog::getBlog());
    }
]);

//Rota dinâmica
$obRouter->get('/show/{cat}/{tit}/{id}', [
    function($cat, $tit, $id){
       return new Response(200, 'Página '.$cat . ' - '. $tit. '  - '.$id);
    }
]);

//https://www.youtube.com/watch?v=t6wrq3EopWI&list=PL_zkXQGHYosGQwNkMMdhRZgm4GjspTnXs&index=3