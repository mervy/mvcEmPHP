<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Layout
{
    /**
     * Método responsável por retornar o conteúdo (view) da página html
     * @return string
     */
    public static function getLayout($title, $content)
    {
       return View::render('pages/layout', [
           'title' => $title,
           'content' => $content

       ]);
    }
}
