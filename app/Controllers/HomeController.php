<?php

namespace Contrafile\Controllers;
use Contrafile\Core\Controller;
use Contrafile\Models\DAO\UsuariosDAO;
use Contrafile\Models\Entities\Usuario;

class HomeController extends Controller{

    public function index(){
        $dados = ['titulo' => 'ContraFile'];
        $this->view("inicial", $dados);
    }

    
}