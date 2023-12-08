<?php

namespace Contrafile\Core;

abstract class Controller{

    protected array $postVars = [];
    protected array $getVars = [];

    public function __construct(){
        $this->postVars = $_POST ?? [];
        $this->getVars = $_GET ?? [];
    }

    protected function view( string $arquivo, array $dados=[]){
        extract($dados);
        require PASTA_VIEW."{$arquivo}.view.php";
    }

    protected function post(?string $nome = null){
        if (is_null($nome)) {
            return $this->postVars;
        }
        if (key_exists($nome, $this->postVars)) {
            return $this->postVars[$nome];
        }
        return null;
    }

    protected function get(?string $nome = null){
        if (is_null($nome)) {
            return $this->getVars;
        }
        if (key_exists($nome, $this->getVars)) {
            return $this->getVars[$nome];
        }
        return null;
    }

    public function input(?string $nome = null){
        if (is_null($nome)) {
            return null;
        }
        $input = array_merge($this->postVars, $this->getVars);
        if (key_exists($nome, $input)) {
            return $input[$nome];
        }
        return null;
    }

    public function all(){
        $input = array_merge($this->postVars, $this->getVars);
        return $input;
  
    }
}