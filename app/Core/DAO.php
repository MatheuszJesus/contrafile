<?php

namespace Contrafile\Core;


abstract class DAO{
    protected static string $tabela = "";
    protected static string $class = \stdClass::class;

    public static function inserir(Entity $entidade){
        $database = new Database();
        $tabela = static::$tabela;
        $sql = "INSERT INTO {$tabela}";

        $campos = [];
        $coringas = [];
        $dados = [];
        $propriedades = $entidade->getProps();

        foreach ($propriedades as $propriedade => $value) {
            if (!is_null($entidade->$propriedade)) {
                array_push($campos, $propriedade);
                array_push($dados, $value);
                array_push($coringas, '?');
            }
        }

        $campos = implode(',', $campos);
        $coringas = implode(',', $coringas);

        $sql .= " ({$campos}) VALUES ({$coringas})";
        return $database->execute($sql,$dados);
    }

    public static function edit(Entity $entidade){
        $database = new Database();
        $tabela = static::$tabela;
        // $sql = "UPDATE {$tabela} SET nome = ?, email = ?, senha = ? WHERE id = ?";
        $sql = "UPDATE {$tabela} SET";
        
        $propriedades = $entidade->getProps();
        $dados = [];
        $campos = "";

        foreach ($propriedades as $propriedade => $value) {
            if ($propriedade != 'id' && !is_null($entidade->$propriedade)) {
                $campos .= " {$propriedade} = ?,";
                array_push($dados, $value);
            }
        }

        $campos = rtrim($campos, ',');

        $sql .= " {$campos} WHERE id = ?";
        array_push($dados, $entidade->id);
        return $database->execute($sql, $dados);
    }
    
    public static function getAll(){
        $database = new Database();
        $tabela = static::$tabela;
        $sql = "SELECT * FROM {$tabela}";
        $database->execute($sql);
        return $database->getAll(static::$class);
    }

    public static function getById(int $id){
        $database = new Database();
        $tabela = static::$tabela;
        $sql = "SELECT * FROM {$tabela} WHERE id = ?";
        $database->execute($sql, [$id]);
        return $database->get(static::$class);
    }

    public static function getBy(string $where = "", array $dados = []){
        $database = new Database();
        $tabela = static::$tabela;
        $sql = "SELECT * FROM {$tabela} WHERE {$where}";
        $database->execute($sql, $dados);
        return $database->get(static::$class);
    }

    public static function excluir(Entity $entidade){
        $database = new Database();
        $tabela = static::$tabela;
        $sql = "DELETE FROM {$tabela} WHERE id = ?";
        return $database->execute($sql,[$entidade->id]);
    }

    
}