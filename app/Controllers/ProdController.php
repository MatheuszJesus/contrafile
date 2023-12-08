<?php

namespace Contrafile\Controllers;
use Contrafile\Core\Controller;

class ProdController extends Controller{
    public function prod(){
        $this->view("prod", ["nome" => "Página de produtos"]);
    }
}