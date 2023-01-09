<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores</title>
    <link rel="stylesheet" href="Produtos.css">
</head>
<body>

    <header>
    <a href="http://localhost/Integrador2Semestre/index.php">     <img src="img/lulilogo.png" alt=""> </a>
    </header>

<div class="container">
    <div class="menulateral">
        <a href="http://localhost/projetointegrador/materiaPrima.php" class="linknav">MATÉRIA PRIMA</a>
        <a href="http://localhost/projetointegrador/produtos.php" class="linknav">PRODUTO</a>
        <a href="http://localhost/projetointegrador/fornecedor.php" class="linknav">FORNECEDOR</a>
    </div>            

    <div class="containerlista">
         <h1 class="titulo"> Fornecedores </h1>
         <div class="caixa"> 
	        <input type="text" class="busca" placeholder="Buscar">
            <div class="cadastrar">
            <a href="http://localhost/projetoIntegrador/cadastroFornecedor.php">Cadastrar</a>
            </div>
		        <ul>
			        <li class="produto 1">
                        <div class="botao">
                        <?php 
include 'conexaobd.php';
$sql = "select * from fornecedor";
$result = $banco->query($sql);

if(!$result){
    die("invalid query:" . $banco->error);
}
 while($row= $result-> fetch_assoc()){
    echo "
    <tr>
    
    <td>$row[razao_social]</td>
    <td>  
      
    </tr>";
 };
 ?>
                            <button>Alterar</button>
                            <button>Excluir

                            </button>
                        </div>
			        </li>
                    <li class="produto">
                        Fornecedor 2
                        <div class="botao">
                            <button>Alterar</button>
                            <button>Excluir</button>
                        </div>
			        </li>
                    <li class="produto">
				        Fornecedor 3
                        <div class="botao">
                            <button>Alterar</button>
                            <button>Excluir</button>
                        </div>
			        </li>
                    <li class="produto">
				        Fornecedor 4
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
    $cnpj = $_POST['cnpj'];
    $razao_social = $_POST['razao_social'];
    $email = $_POST['email'];
    $data_de_cadastro = $_POST['data_de_cadastro'];
    $situacao = $_POST['situacao'];
    if($cnpj != "" and $razao_social != "" and $email !="" and $situacao !="" and $data_de_cadastro !=""){
        // Monta string INSERT
        $sql = "INSERT INTO fornecedor (cnpj, razao_social, email, situacao, data_de_cadastro)
            VALUES ('$cnpj','$razao_social', '$email',   '$situacao', '$data_de_cadastro')";
        // Executa insert
        $banco->query($sql);
        // Verifica quantas linhas foram afetadas
        if($banco->affected_rows >= 1){
            echo " fornecedor $razao_social cadastrado com sucesso!";
        }else{
            echo "Erro ao inserir fornecedor $razao_social";
        }
    }

    $banco->close();
    ?>

</body>
</html>