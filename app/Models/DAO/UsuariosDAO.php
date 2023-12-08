<?php

namespace Contrafile\Models\DAO;

use Contrafile\Core\DAO;
use Contrafile\Models\Entities\Usuario;

class UsuariosDAO extends DAO{
    protected static string $tabela = "cliente";
    protected static string $class = Usuario::class; 
}