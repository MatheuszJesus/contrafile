<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=URL_BASE.'public/img/icones/logo.png'?>">
    <link rel="stylesheet" href="<?=css('admin')?>">
    <title>Contra-Filé - Cadastro</title>
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
      <form action="<?=linkrota('cadastrarproduto')?>" method="POST">
        <?=flash()?>
        <h1>Produto!</h1>
        <div class="bloco-input">
          <img src="<?=URL_BASE.'public/img/icones/email-icon.png'?>" alt="">
          <input type="text" name="nomeProduto" placeholder="Nome" value="<?=getValue('nome')?>">
        </div>
        <div class="bloco-input">
          <img src="<?=URL_BASE.'public/img/icones/email-icon.png'?>" alt="">
          <input type="number" name="preco" placeholder="Preço" step="any" value="<?=getValue('email')?>">
        </div>
        <div class="bloco-input">
          <img src="<?=URL_BASE.'public/img/icones/email-icon.png'?>" alt="">
          <input name="quantidade" type="number" placeholder="Quantidade">
        </div>
        <h4>IMAGEM</h4>
        <input name="imagem" type="file">
        <button type="submit">CADASTRAR</button>

        <div class="textos">
          <p>Informe tudo que é pedido para o preenchimento e a inscrição de um novo <strong>produto</strong> ao site.</p>
        </div>
        
      </form>  
    </div>
  </section>
<?php componente('rodape')?>