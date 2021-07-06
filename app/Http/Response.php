<?php

namespace App\Http;

class  Response {
    /**
     * Código do status HTTP
     * @var integer
     */
    private $httpCode = 200;

    /**
     * Cabeçalho do Response
     * @var array
     */
    private $headers = [];

    /**
     * Tipo de conteúdo retornado
     * @var string
     */
    private $contentType = 'text/html';

    /**
     * Contéudo do Response
     * @var mixed
     */
    private $content;

    /**
     * Método construtor da classe e responsável por iniciá-la e definir os valores
     * @param integer $httpCode
     * @param mixed $content
     * @param string $contentType
     */
    public function __construct($httpCode, $content, $contentType = 'text/html'){
        $this->httpCode = $httpCode;
        $this->content  = $content;     
        $this->setContentType($contentType);   
    }

    /**
     * Método responsável por alterar o content type do response
     * @param  string  $contentType 
     */ 
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }
    
    /**
     * Método responsável por adicionar um registro no cabeçalho do response
     * @param string $key
     * @param string $value
     */
    public function addHeader($key, $value){
        $this->headers[$key] = $value;
    }
    
    /**
     * Método responsável por enviar o status e o header para o navegador
     *
     * @return void
     */
    private function sendHeaders(){
        //Status
        http_response_code($this->httpCode);

        //Enviar headers
        foreach ($this->headers as $key => $value) {
           header($key.': '.$value);
        }
    }

    /**
     * Método responsável por enviar a resposta para o usuário
     */
    public function sendResponse(){
        //Envia os headers
        $this->sendHeaders();

        //Imprime o conteúdo
        switch ($this->contentType) {
            case 'text/html':
                echo $this->content;
                exit;
        }
    }
}