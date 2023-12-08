<?php

namespace Contrafile\Models\DAO;

use Contrafile\Core\DAO;
use Contrafile\Models\Entities\Produto;
use Contrafile\Models\Entities\Usuario;

class ProdutosDAO extends DAO{
    protected static string $tabela = "produto";
    protected static string $class = Produto::class; 
}