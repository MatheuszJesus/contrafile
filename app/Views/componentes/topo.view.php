<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=URL_BASE.'public/img/icones/logo.png'?>">
    <link rel="stylesheet" href="<?=css('responsive_inicio')?>">
    <link rel="stylesheet" href="<?=css('inicio')?>">
    <title>Contra-Filé - Página Inicial</title>
</head>
<body>
    <button id="back-to-top">Voltar ao topo</button>
    <header id="header">
        <a href="<?=linkrota()?>"><h2 class="logo">Contra-Filé</h2></a>
        <div class="menu-btn"></div>
        <nav class="navegacao">
            <a class="linkar" href="<?=linkrota()?>">Início</a>
            <a class="linkar" href="<?=linkrota('produtos')?>">Produtos</a>
            <a class="linkar" href="<?=linkrota('carrinho')?>">Carrinho</a>
            <a class="linkar" href="<?=linkrota('#sobre')?>">Sobre</a>
            <a href="<?= checklogin() ? null : linkrota('login')?>"><button class="btn_login"><?=checklogin()? $_SESSION['__nomeUser'] : "Login"?></button></a>
        </nav>  
    </header>