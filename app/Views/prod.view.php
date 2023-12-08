<?php
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=URL_BASE.'public/img/icones/logo.png'?>">
    <link rel="stylesheet" href="<?=css('produto')?>">
    <title>Contra-Filé - Produtos</title>
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

    <form class="bloco-pesquisa" action="" method="">
        <input type="text" placeholder="Ex: Lasanha Vegana...">
        <img src="<?=URL_BASE.'public/img/pesquisa_icon.png'?>" alt="Simbolo de pesquisa">
    </form>

    <main>
        
        <form class="bloco-filtro" action="" method="">
            <h2 id="filtro">FILTROS</h2>
            <h3 id="marca">Marcas</h3>

            <div>
                <input type="checkbox" id="Marca1" name="Marca1" value="Marca1" />
                <label for="Marca1"> Marca1 </label>
            </div>
            <div>
                <input type="checkbox" id="Marca1" name="Marca1" value="Marca1" />
                <label for="Marca1"> Marca2 </label>
            </div>
            <div>
                <input type="checkbox" id="Marca1" name="Marca1" value="Marca1" />
                <label for="Marca1"> Marca3 </label>
            </div>
            <div>
                <input type="checkbox" id="Marca1" name="Marca1" value="Marca1" />
                <label for="Marca1"> Marca4 </label>
            </div>
            <div>
                <input type="checkbox" id="Marca1" name="Marca1" value="Marca1" />
                <label for="Marca1"> Marca5 </label>
            </div>
            <div>
                <input type="checkbox" id="Marca1" name="Marca1" value="Marca1" />
                <label for="Marca1"> Marca6 </label>
            </div>
            <div>
                <input type="checkbox" id="Marca1" name="Marca1" value="Marca1" />
                <label for="Marca1"> Marca7 </label>
            </div>

            <h3 id="marca">Categorias</h3>

            <div>
                <input type="checkbox" id="categoria" name="categoria" value="categoria" />
                <label for="categoria">Industrializados </label>
            </div>
            <div>
                <input type="checkbox" id="categoria" name="categoria" value="categoria" />
                <label for="categoria">Caseiros </label>
            </div>
            <div>
                <input type="checkbox" id="categoria" name="categoria" value="categoria" />
                <label for="categoria">Categoria3 </label>
            </div>
            <div>
                <input type="checkbox" id="categoria" name="categoria" value="categoria" />
                <label for="categoria">Categoria4 </label>
            </div>
            <div>
                <input type="checkbox" id="categoria" name="categoria" value="categoria" />
                <label for="categoria">Categoria5 </label>
            </div>
            <div>
                <input type="checkbox" id="categoria" name="categoria" value="categoria" />
                <label for="categoria">Categoria6 </label>
            </div>
            <div>
                <input type="checkbox" id="categoria" name="categoria" value="categoria" />
                <label for="categoria">Categoria7 </label>
            </div>

              <h3 id="marca">Preço</h3>
              <input type="number" id="input1">
              <input type="number" id="input2">
              <button type="submit">Filtrar</button>  
        </form>
            
        </div>

        <div class="bloco-ofertas">
            <?php use Contrafile\Models\DAO\ProdutosDAO;
            $produtos = ProdutosDAO::getAll();
            foreach ($produtos as $key) {?>
                <div class="card-venda">
                <div class="img-card">
                    <img src="<?=URL_BASE.'public/img/produtos/'.$key->imagem?>" alt="">
                </div>
                <a href=""><h4><?=$key->nomeProduto?></h4></a>
                <a href=""><h3>R$<?=$key->preco?></h3></a>
                <p>1x de R$<?=$key->preco?> sem juros.</p>
                <div id = "botao">
                <button>Comprar</button>
                </div>
            </div><?php }?>
        </div>
        <h1 class="slogan_deitado">
            Nutrindo o Corpo<br> e a Alma.
        </h1>
    </main>    
<?php componente('rodape')?>
