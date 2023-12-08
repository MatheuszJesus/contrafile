<?php

namespace Contrafile\Models\Entities;
use Contrafile\Core\Entity;

class Produto extends Entity{
    protected ?int $id;
    protected ?string $nomeProduto;
    protected ?float $preco;
    protected ?string $descricao;
    protected  $imagem;
    protected ?int $estoque;
    protected ?int $promocao;
    protected ?int $id_cliente;

    public static function getRegras():array{
        return [
            'nomeProduto' => 'obrigatorio',
            'preco' => 'obrigatorio',
            'quantidade' => 'obrigatorio',
            'imagem' => 'obrigatorio'
        ];
    }

}