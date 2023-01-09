<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materia Prima</title>
    <link rel="stylesheet" href="Produtos.css">
</head>
<body>

    <header>
    <a href="http://localhost/Integrador2Semestre/index.php">   <img src="img/lulilogo.png" alt=""> </a>
    </header>

<div class="container">
    <div class="menulateral">
        <a href="http://localhost/projetointegrador/materiaPrima.php" class="linknav">MATÉRIA PRIMA</a>
        <a href="http://localhost/projetointegrador/produtos.php" class="linknav">PRODUTO</a>
        <a href="http://localhost/projetointegrador/fornecedor.php" class="linknav">FORNECEDOR</a>
    </div>            

    <div class="containerlista">
         <h1 class="titulo"> Materia Prima </h1>
         <div class="caixa"> 
	        <input type="text" class="busca" placeholder="Buscar">
            <div class="cadastrar">
            <a href="http://localhost/projetointegrador/cadastromateriaPrima.php">cadastrar</a>
        </div>
		        <ul>
			        <li class="produto 1">
                    <?php 
include 'conexaobd.php';
$sql = "select * from materia_prima";
$result = $banco->query($sql);

if(!$result){
    die("invalid query:" . $banco->error);
}
 while($row= $result-> fetch_assoc()){
    echo "
    <tr>
    
    <td>$row[tipo_tecido]</td>
    <td>$row[quantidade]</td>
    <td>
    </tr>";
 };
 ?>
                        <div class="botao">
                            <button>Alterar</button>
                            <button>Excluir</button>
                        </div>
			        </li>
                    <li class="produto">
                        Materia prima 2
                        <div class="botao">
                            <button>Alterar</button>
                            <button>Excluir</button>
                        </div>
			        </li>
                    <li class="produto">
				        Mateira prima 3
                        <div class="botao">
                            <button>Alterar</button>
                            <button>Excluir</button>
                        </div>
			        </li>
                    <li class="produto">
				        Mateira prima 4
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
    $tipo_tecido = $_POST['tipo_tecido'];
    $tamanho = $_POST['tamanho'];
    $quantidade = $_POST['quantidade'];
    $estampa = $_POST['estampa'];

    if($tipo_tecido != "" and $tamanho != "" and $quantidade !="" and $estampa !=""){
        // Monta string INSERT
        $sql = "INSERT INTO materia_prima (tipo_tecido, tamanho, quantidade, estampa)
            VALUES ('$tipo_tecido','$tamanho', '$quantidade',   '$estampa')";
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