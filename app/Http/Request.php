<?php

namespace App\Http;

class Request
{

    /**
     * Método HTTP da requisição
     * @var string
     */
    private $httpMethod;

    /**
     * URI da página
     * @var string
     */
    private $uri;

    /**
     * Parâmetros da URL ($_GET)
     * @var array
     */
    private $queryParams = [];

    /**
     * Variáveis recebidas no post da página ($_POST)
     * @var array
     */
    private $postVars = [];

    /**
     * Cabeçalho da requisição
     *
     * @var array
     */
    private $headers = [];

    /**
     * Construtor da classe
     */
    public function __construct()
    {
        $this->queryParams = $_GET ?? [];
        $this->postVars    = $_POST ?? [];
        $this->headers     = getallheaders();
        $this->httpMethod  = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri         = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * Método responsável por retornar o método HTTP da requisição
     * @return String
     */
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    /**
     * Método que retornará a URI da requisição
     * @return  string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Método que retornará o cabeçalho da requisição
     * @return  array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Método que retornará os parâmetros da URL ($_GET)
     * @return  array
     */ 
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * Método responsável por retornar as variáveis post da página/requisição ($_POST)
     * @return  array
     */ 
    public function getPostVars()
    {
        return $this->postVars;
    }
}
