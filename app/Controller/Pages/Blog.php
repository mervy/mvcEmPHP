<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Blog extends Layout
{
    /**
     * Método responsável por retornar o conteúdo (view) da página Blog
     * @return string
     */
    public static function getBlog()
    {
        $obOrganization = new Organization;


        $content = View::render('pages/blog', [
            'name' => $obOrganization->name,
            'site' => $obOrganization->site,
            'desc' => $obOrganization->desc           
        ]);
        return parent::getLayout('MVC em PHP - Blog', $content);
    }
}
