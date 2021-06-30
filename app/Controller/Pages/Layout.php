<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Layout
{
    /**
     * Método responsável por renderizar o topo (header) da página
     * @return string
     */
    private static function getHeader(){
        return View::render('pages/header');
    }

    /**
     * Método responsável por renderizar o footer da página
     *
     * @return string
     */
    private static function getFooter(){
        return View::render('pages/footer');
    }

     /**
     * Método responsável por retornar o conteúdo (view) da página html
     * @return string
     */
    public static function getLayout($title, $content)
    {
       return View::render('pages/layout', [
           'title' => $title,
           'header' => self::getHeader(),
           'content' => $content,
           'footer' => self::getFooter()
       ]);
    }
}
