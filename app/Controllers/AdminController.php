<?php
 
namespace Contrafile\Controllers;
use Contrafile\Core\Controller;
use Contrafile\Core;
use Contrafile\Core\Validator;
use Contrafile\Models\DAO\ProdutosDAO;
use Contrafile\Models\Entities\Produto;

class AdminController extends Controller{

    public function admin(){
        $this->view("admin", ["Página" => "Página de administração"]);
    }

    public function cadastrarproduto(){
        $houveErro = Validator::execute(Produto::getRegras(), $this->post());
        if($houveErro){
            addFormData($this->post());
            flash(Validator::getListaErros(), 'erro');
            redireciona('admin');
        }
        
        $produto = new Produto($this->post());
        $produto->imagem = $_FILES['imagem'];
        move_uploaded_file($produto->imagem["tmp_name"], URL_BASE.'public/img/produtos');


        if(ProdutosDAO::inserir($produto)){
            flash("O produto cadastrado com sucesso.");
            redireciona('admin');
        }
    }

}