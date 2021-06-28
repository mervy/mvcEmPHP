<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Layout
{
    /**
     * Método responsável por retornar o conteúdo (view) da Home
     * @return string
     */
    public static function getHome()
    {
       $content = View::render('pages/home', [
           'name' => 'Rogério Soares',
           'desc' => 'Mais um projeto de MVC em PHP'

       ]);
       return parent::getLayout('MVC em PHP', $content);
    }
}
