<?php

namespace Contrafile\Core;

class Database{
    protected \PDO $conexao;
    protected \PDOStatement $stmt;

    public function __construct(){
        $servidor = DB['servidor'];
        $banco = DB['banco'];
        $usuario = DB['usuario'];
        $senha = DB['senha'];

        $dsn = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($dsn, $usuario, $senha);
    }

    public function execute(string $sql, array $dados = []):bool{
        $this->stmt = $this->conexao->prepare($sql);
        return $this->stmt->execute($dados);
    }

    public function getAll(string $class):array{
        return $this->stmt->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function get(string $class){
        return $this->stmt->fetchObject($class);
    }
}