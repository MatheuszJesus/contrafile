<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=URL_BASE.'public/img/icones/logo.png'?>">
    <link rel="stylesheet" href="<?=css('carrinho')?>">
    <title>Contra-Filé - Carrinho</title>
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
  <main>
    
        
       <section class="box-principal"> 

        <div class="div-produtos">  
            <img class = "pratos" src="<?=URL_BASE.'public/img/produtos/prato1.jpg'?>" alt="">
            <h2>Omelete Sem Ovo , 100g - Caseiro</h2>
            <h1>R$ 30,50</h1>
            <p> 1x de 30,50 sem juros.</p>
            <button id="bt1">Visualizar</button>
            <button id="bt2">Remover</button>
            <img id="botao_mais" src="<?=URL_BASE.'public/img/icon_mais.png'?>" alt="">
            <input type="text" value="1">
            <img id="botao_menos" src="<?=URL_BASE.'public/img/icon_menos.png'?>" alt="">
        </div>
        
        <div class="div-produtos">  
            <img class = "pratos"  src="<?=URL_BASE.'public/img/produtos/prato7.jpg'?>" alt="">
            <h2>Nhoque de Abóbora , 100g - Caseiro</h2>
            <h1>R$ 35,60</h1>
            <p> 1x de 35,60 sem juros.</p>
            <button id="bt1">Visualizar</button>
            <button id="bt2">Remover</button>
            <img id="botao_mais" src="<?=URL_BASE.'public/img/icon_mais.png'?>" alt="">
            <input type="text" value="1">
            <img id="botao_menos" src="<?=URL_BASE.'public/img/icon_menos.png'?>" alt="">
        </div>

        <div class="div-produtos">
            <img  class = "pratos" src="<?=URL_BASE.'public/img/produtos/prato11.jpg'?>" alt="">
            <h2>Prato - Legumes Coloridos , 100g - Caseiro</h2>
            <h1>R$ 25,60</h1>
            <p> 1x de 25,60 sem juros.</p>
            <button id="bt1">Visualizar</button>
            <button id="bt2">Remover</button>
            <img id="botao_mais" src="<?=URL_BASE.'public/img/icon_mais.png'?>" alt="">
            <input type="text" value="1">
            <img id="botao_menos" src="<?=URL_BASE.'public/img/icon_menos.png'?>" alt="">
        </div>


        <div id = "div-total" > 
        <h2>Total : <strong>R$91,70</strong></h2>
        <img id="icone2" src="<?=URL_BASE.'public/img/lixeira.png'?>" alt="">
        <h3 class="limpar">Limpar carrinho</h3>
        <img id="icone1" src="<?=URL_BASE.'public/img/verificado.png'?>" alt="">
        <h3 class="comprar">Comprar</span></h3>
        </div>

       </section>

       <img id="morango" src="<?=URL_BASE.'public/img/morango2.png'?>" alt=""> </div>
    

    </main>