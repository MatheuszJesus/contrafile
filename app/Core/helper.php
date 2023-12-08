<?php

function css(string $arquivo):string{
    return URL_BASE."public/css/{$arquivo}.css";
}

function componente(string $componente){
    require PASTA_VIEW."componentes/{$componente}.view.php";
}

function linkrota(string $rota = ""):string{
    return URL_BASE."{$rota}";
}

function redireciona ($rota = ""){
    header("location: ".linkrota($rota));
    die;
}

function flash($msg = "", $tipo = "sucesso"){
    if(!empty($msg)){
        $_SESSION['__mensagem'] = [$msg,$tipo];
    }else if(empty($msg) && isset($_SESSION['__mensagem'])){
        [$msg,$tipo] = $_SESSION['__mensagem'];
        $retorno = "";
        $retorno .= "<div class = 'mensagem_{$tipo}'>";
        $retorno .= "<h4>{$msg}</h4>";
        $retorno .= "</div>";
        unset($_SESSION['__mensagem']);
        return $retorno; 
    }else{
        return "";
    }
}

function addFormData(array $dados){
    $_SESSION['__form'] = $dados;
}

function login(int $id, string $nome){
    $_SESSION['__logado'] = true;
    $_SESSION['__usuario'] = $id;
    $_SESSION['__nomeUser'] = $nome;
}

function checklogin()
{
    return isset($_SESSION['__logado']) ? $_SESSION['__logado'] : false;
}

function logout()
{
    unset($_SESSION['__logado']);
    unset($_SESSION['__usuario']);
    unset($_SESSION['__nomeUser']);

}
function limparFormData($campo = ""){
    if($campo == ""){
        unset($_SESSION['__form']);
    }else{
        if(isset($_SESSION['__form'][$campo])){
            unset($_SESSION['__form'][$campo]);
        }
    }
}

function getValue(string $campo){

    $form = $_SESSION['__form'] ?? null;
    if(isset($form[$campo])){
        $valor = $form[$campo];
        limparFormData($campo);
        return $valor;
    }else{
        return "";
    }
    /*value="<?=getValue('email')?>"*/
}

function selected($campo, $valor){
    return getValue($campo) == $valor ? "SELECTED" : "";
}

function checked($campo, $valor){
    return getValue($campo) == $valor ? "checked" : "";
}
