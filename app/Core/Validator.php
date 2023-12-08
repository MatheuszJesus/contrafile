<?php

namespace Contrafile\Core;

class Validator{

    protected static bool $houveErro = false;
    protected static array $msg = [];

    public static function execute(array $regras, array $valores){
        foreach ($regras as $regra => $value) {
            $listaregras = explode("|", $value);

            $valor = $valores[$regra] ?? null;
            $parametros = [$valor, $regra];

            foreach ($listaregras as $r) {

                if (strpos($r,':')) {
                    $partes = explode(':', $r);
                    $r = $partes[0];
                    $parametros[] = $partes[1];
                }
                
                if(method_exists(__CLASS__, $r)){
                    call_user_func_array([__CLASS__, $r], $parametros);
                }
            }
        }
        return static::$houveErro;
    }

    public static function getErros():array{
        return static::$msg;
    }

    public static function getListaErros():string{
        $lista = "";
        foreach (Validator::getErros() as $erro) {
            $lista.= "<li>{$erro}</li>";
        }
        return $lista;
    }

    #========================================================

    

    protected static function obrigatorio($valor, $nomecampo){
        $valor = trim($valor);
        if (strlen($valor) == 0) {
            static::$houveErro = true;
            static::$msg[$nomecampo] = "O campo de {$nomecampo} é obrigatório.";
        }
    }

    protected static function minimo($valor, $nomecampo, $quant){
        $valor = trim($valor);
        if (strlen($valor<=$quant)) {
            static::$houveErro = true;
            static::$msg[$nomecampo] = "O campo de {$nomecampo} precisa ter mais de {$quant} caracteres.";
        }
    }

    protected static function email($valor, $nomecampo){
        if (!filter_var($valor, FILTER_VALIDATE_EMAIL)) {
            static::$houveErro = true;
            static::$msg[$nomecampo] = "O campo de {$nomecampo} precisa ser um email válido.";
        }
    }

    
}