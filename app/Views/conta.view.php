<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=URL_BASE.'public/img/icones/logo.png'?>">
    <link rel="stylesheet" href="<?=css('cadastro')?>">
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
      <form action="<?=linkrota('cadastrarconta')?>" method="POST">
        <?=flash()?>
        <h1>Bem Vindo!</h1>
        <div class="bloco-input">
          <img src="<?=URL_BASE.'public/img/user_icon.png'?>" alt="">
          <input type="text" name="nome" placeholder="Nome completo" value="<?=getValue('nome')?>">
        </div>
        <div class="bloco-input">
          <img src="<?=URL_BASE.'public/img/icones/email-icon.png'?>" alt="">
          <input type="email" name="email" placeholder="Email" value="<?=getValue('email')?>">
        </div>
        <div class="bloco-input">
          <img src="<?=URL_BASE.'public/img/icones/key-icon.png'?>" alt="">
          <input class="input-senha" name="senha" type="password" placeholder="Senha">
        </div>
        <button type="submit">CADASTRAR</button>

        <div class="textos">
          <input name="termos" type="checkbox">
          <p class="termos" >Eu concordo com os <a href>termos e condições.</a></p>
          <p class="link-login">Já tem uma conta? <a href="<?=linkrota('login')?>">Login</a></p>
        </div>
        
      </form>  
    </div>
  </section>
<?php componente('rodape')?>