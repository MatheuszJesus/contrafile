<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=URL_BASE.'public/img/icones/logo.png'?>">
    <link rel="stylesheet" href="<?=css('error')?>">
    <title>Contra-Filé - Erro</title>
</head>
<body>
  <header id="header">
      <a href="<?=linkrota()?>"><h2 class="logo">Contra-Filé</h2></a>
      <nav class="navegacao">
            <a class="linkar" href="<?=linkrota()?>">Início</a>
            <a class="linkar" href="<?=linkrota('produtos')?>">Produtos</a>
            <a class="linkar" href="<?=linkrota('carrinho')?>">Carrinho</a>
            <a class="linkar" href="<?=linkrota('#sobre')?>">Sobre</a>
      </nav>
  </header>
<section class="section-principal">
  <div class="overlay"></div>    
    <div class="box-grande">
      <div class="img-login"></div>
       <div class="box-error">
            <img src="<?=URL_BASE.'public/img/icones/error.png'?>" alt="">
            <h2><?=$msg?></h2>
       </div>
    </div>
</section>
<?php componente('rodape')?>