<?php

namespace App\Http;

class Router
{

    /**
     * URL completa do projeto (raiz)
     *
     * @var string
     */
    private $url = '';

    /**
     * Prefixo de todas as rotas
     *
     * @var string
     */
    private $prefix = '';

    /**
     * Índice de rotas
     *
     * @var array
     */
    private $routes = [];

    /**
     * Instância de Request
     *
     * @var Request
     */
    private $request;

    /**
     * Método responsável por iniciar a classe
     * @param string $url
     */
    public function __construct($url)
    {
        $this->request = new Request();
        $this->url     = $url;
        $this->setPrefix();
    }
    /**
     * Método responsável por definir o prefixo das rotas
    */
    private function setPrefix()
    {
        //Informações da URL atual
        $parseUrl = parse_url($this->url);

        //Define o prefixo
        $this->prefix = $parseUrl['path'] ?? '';        
    }
    /**
     * Método responsável por adicionar uma rota na classe
     * @param string $method
     * @param string $route
     * @param array $params
     */
    private function addRoute($method, $route, $params = []){
        echo '<pre>';
        print_r($method);
        echo '<pre>';
        print_r($route);
        echo '<pre>';
        print_r($params);

    }

    /**
     * Método responsável por definir uma rota de GET
     * @param string $route
     * @param array $params
     */
    public function get($route, $params = []){
        return $this->addRoute('GET', $route, $params);
    }
}