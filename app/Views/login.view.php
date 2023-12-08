<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=URL_BASE.'public/img/icones/logo.png'?>">
    <link rel="stylesheet" href="<?=css('login')?>">
    <title>Contra-Filé - Login</title>
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
      <form action="<?=linkrota('logarconta')?>" method="POST">
      <?=flash()?>
        <h1>Bem Vindo!</h1>
        <div class="bloco-input">
          <img src="<?=URL_BASE.'public/img/icones/email-icon.png'?>" alt="">
          <input type="text" placeholder="Email" name= "email" required>
        </div>

        <div class="bloco-input">
          <img src="<?=URL_BASE.'public/img/icones/key-icon.png'?>" alt="">
          <input class="input-senha" type="password" name="senha" placeholder="Senha" required>
        </div>
        <button type="submit">LOGIN</button>  
        <a class="forget" href="">Esqueceu a senha?</a>
        <p>É novo por aqui? <a href="<?=linkrota('cadastro')?>">Registre-se</a></p>
      </form>  
    </div>p
  </section>
<?php componente('rodape')?>
