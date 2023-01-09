<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="Produtos.css">
</head>
<body>
    <header>
    <a href="http://localhost/projetointegrador/index.php">   <img src="img/lulilogo.png" alt=""> </a>
    </header>

<div class="container">
    <div class="menulateral">
        <a href="http://localhost/projetointegrador/materiaPrima.php" class="linknav">MATÉRIA PRIMA</a>
        <a href="http://localhost/projetointegrador/produtos.php" class="linknav">PRODUTO</a>
        <a href="http://localhost/projetointegrador/fornecedor.php" class="linknav">FORNECEDOR</a>
    </div>            

    <div class="containerlista">
         <h1 class="titulo"> Produtos </h1>
         <div class="caixa"> 
	        <input type="text" class="busca" placeholder="Buscar">
            <div class="cadastrar">
            <a href="http://localhost/projetointegrador/cadastroproduto.php">cadastrar</a></div>
		        <ul>
			        <li class="produto 1">
                        <div class="botao">
                            <?php 
                              include 'conexaobd.php';
                              $sql = "select * from produto";
                              $result = $banco->query($sql);
                              
                              if(!$result){
                                  die("invalid query:" . $banco->error);
                              }
                               while($row= $result-> fetch_assoc()){
                                  echo "
                                  <tr>
                                  <td>$row[descricao]</td>
                                  

                                  <td>$row[quantidade]</td>

                                  <td>
                                  <a class= href='deletarProduto.php?id=".$row['cod_produto'].".'>Deletar</a>
                                  </tr>";
                               };
                               ?>
                            <button>Alterar</button>
                            <button>Excluir</button>
                        </div>
			        </li>
                    <li class="produto">
                        produto 2
                        <div class="botao">
                            <button>Alterar</button>
                            <button>Excluir</button>
                        </div>
			        </li>
                    <li class="produto">
				        produto 3
                        <div class="botao">
                            <button>Alterar</button>
                            <button>Excluir</button>
                        </div>
			        </li>
                    <li class="produto">
				        produto 4
                        <div class="botao">
                            <button>Alterar</button>
                            <button>Excluir</button>
                        </div>
			        </li>
		        </ul>
        </div>
    </div>
</div>   
<?php
    include 'conexaobd.php';
    $tamanho = $_POST['tamanho'];
    $quantidade = $_POST['quantidade'];
    $valor_venda = $_POST['valor_venda'];
    $valor_custo = $_POST['valor_custo'];
    $descricao = $_POST['descricao'];
    if($tamanho != "" and $quantidade != "" and $valor_venda !="" and $valor_custo !="" and $descricao !=""){
        // Monta string INSERT
        $sql = "INSERT INTO produto (tamanho, quantidade, valor_venda, valor_custo, descricao)
            VALUES ('$tamanho','$quantidade', '$valor_venda',   '$valor_custo', '$descricao')";
        // Executa insert
        $banco->query($sql);
        // Verifica quantas linhas foram afetadas
        if($banco->affected_rows >= 1){
            echo " cadastrado com sucesso!";
        }else{
            echo "Erro ao inserir fornecedor $razao_social";
        }
    }
    $banco->close();
    ?> 

</body>
</html>