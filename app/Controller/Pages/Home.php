<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Layout
{
    /**
     * Método responsável por retornar o conteúdo (view) da Home
     * @return string
     */
    public static function getHome()
    {
        $obOrganization = new Organization;


        $content = View::render('pages/home', [
            'name' => $obOrganization->name,            
        ]);
        return parent::getLayout('MVC em PHP - Home', $content);
    }
}
