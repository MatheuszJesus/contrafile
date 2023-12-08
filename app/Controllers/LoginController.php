<?php

namespace Contrafile\Controllers;
use Contrafile\Core\Controller;
use Contrafile\Core\Validator;
use Contrafile\Models\DAO\UsuariosDAO;
use Contrafile\Models\Entities\Usuario;

class LoginController extends Controller{

    public function login(){
        $this->view("login", ['pagina' => 'Página de Login']);
    }

    public function cadastro(){
        $this->view("conta", ['pagina' => 'Página de Cadastro']);
    }

    public function cadastrarconta(){
        $houveErro = Validator::execute(Usuario::getRegras(), $this->post());
        if($houveErro){
            addFormData($this->post());
            flash(Validator::getListaErros(), 'erro');
            redireciona('cadastro');
        }
        
        $usuario = new Usuario($this->post());

        if(UsuariosDAO::inserir($usuario)){
            flash("Usuário {$usuario->nome} cadastrado com sucesso.");
            redireciona('login');
        }
    }

    public function logarconta(){
        $email = $this->post('email');
        $senha = $this->post('senha');

        
        $erro = false;
        $usuario = UsuariosDAO::getBy('email = ?',[$email]);
        if($usuario){
            if(password_verify($senha,$usuario->senha)) {
                login($usuario->id, $usuario->nome);
            }else{
            $erro = true;
            }
        }else{
            $erro = true;
        }
        
        if ($erro == false) { 
            redireciona();
        }else{
            flash("Email ou senha inválidos.");
            redireciona('login');
        }
    }
}