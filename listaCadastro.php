<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include 'conexaoBD.php';
$razao = $_POST['razao'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];


    if($razao != "" and $cnpj != "" and $telefone != "" and $email != ""
    and $senha != "" ){
  // Monta string INSERT
    $sql = "INSERT INTO usuario (razao, cnpj,telefone, email, senha )
    VALUES ('$razao','$cnpj','$email','$telefone', '$senha' )";
  // Executa insert
    $banco->query($sql);
  // Verifica quantas linhas foram afetadas
    if($banco->affected_rows >= 1){
      echo "funcionario $razao cadastrado com sucesso!";
  }else{
      echo "Erro ao inserir funcionario";
  }
}

$banco->close();
?>  
</body>
</html>