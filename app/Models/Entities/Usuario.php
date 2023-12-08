<?php

namespace Contrafile\Models\Entities;
use Contrafile\Core\Entity;

class Usuario extends Entity{
    protected ?int $id;
    protected ?string $nome;
    protected ?string $email;
    protected ?string $senha;

    public function setSenha($valor){
        $this->senha = password_hash($valor, PASSWORD_DEFAULT);
    }
    
    public static function getRegras():array{
        return [
            'nome' => 'obrigatorio|minimo:3',
            'email' => 'obrigatorio|email',
            'senha' => 'obrigatorio',
            'termos' => 'obrigatorio'
        ];
    }

    public static function getByEmail($email){

    }
}