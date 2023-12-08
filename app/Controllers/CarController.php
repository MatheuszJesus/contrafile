<?php

namespace Contrafile\Controllers;
use Contrafile\Core\Controller;

class CarController extends Controller{
    public function carrinho(){
        $this->view("carrinho", ["Página" => "Página de carrinho"]);
    }
}