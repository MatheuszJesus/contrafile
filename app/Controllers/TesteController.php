<?php 

namespace Contrafile\Controllers;

use Contrafile\Core\Controller;
use Contrafile\Models\DAO\UsuariosDAO;
use Contrafile\Models\Entities\Usuario;

class TesteController{
    public function teste(){
        $usuario = new Usuario();
        $usuario->nome = "matue";
        $usuario->email = "matue@gmail.com";
        $usuario->senha = "777666";
        UsuariosDAO::inserir($usuario);
    }

    public function teste2(){
        $usuarios = UsuariosDAO::getAll();
        foreach ($usuarios as $key) {
            echo $key->nome;
            echo "<hr>";
        }
    }

    public function teste3(){
        $usuario = UsuariosDAO::getById(14);
        echo "<pre>";
        var_dump($usuario);
    }

    public function teste4(){
        $usuario = UsuariosDAO::getById(9);

        $usuario->nome = "mths";

        UsuariosDAO::edit($usuario);

        echo "<pre>";
        var_dump($usuario);
    }

    public function teste5(){
        $usuario = UsuariosDAO::getById(1);
        if ($usuario) {
            UsuariosDAO::excluir($usuario);
            echo "usuario excluído com sucesso";
        }else{
            echo "usuario não existe";
        }
    }

    public function teste6(){
        $usuario = new Usuario([
            'nome' => 'Julia',
            'email' => 'julia@gmail.com',
            'senha' => 'julia123'
        ]);
        echo "<pre>";
        var_dump($usuario->getProps());
    }
}