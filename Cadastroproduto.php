
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="cssCadastroProduto.css">
</head>
<body>
    <header>
    <a href="http://localhost/projetointegrador/index.php">   <img src="img/lulilogo.png" alt="lulli"> </a>
    </header>

<div class="caixa">
    <div class="menu">
        <a href="http://localhost/projetointegrador/materiaPrima.php" class="Nome">MATÉRIA PRIMA </a>
        <a href="http://localhost/projetointegrador/produtos.php" class="Nome">PRODUTO</a>
        <a href="http://localhost/projetoIntegrador/fornecedor.php" class="Nome">FORNECEDOR</a>
    </div>            

    <div class="listagemcaixa">
         <h1 class="titulo"> Produtos </h1>
         <div class="box">

        <form action="http://localhost/projetointegrador/produtos.php" method="post">
        

            <div class="teko"> 
                <input type="text" name="tamanho" placeholder="tamanho" ></div>

            <div class="teko"> 
                <input type="text" name="quantidade" placeholder="quantidade"></div>

            <div class="teko"> 
                <input type="text " name="valor_venda" placeholder="valor de venda">  </div>

            <div class="teko">  
                <input type="text" name="valor_custo" placeholder="valor de custo"> </div>
            
            <div>
            
            <textarea name="descricao" placeholder="descrição" id="descricion" cols="33" rows="5"></textarea>  <br>
            
            </div><input type="submit">
    </div>
</div>  </form>


</body>
</html>