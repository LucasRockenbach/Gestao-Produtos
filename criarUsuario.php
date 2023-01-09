<!DOCTYPE html>
<html lang="en" style="background-color: #8b8b8b">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>criar usuario</title>
    <link rel="stylesheet" href="cssLogin.css">
</head>
<body>

                

<form class="form1" action="http://localhost/projetointegrador/criarUsuario.php" method="POST">
  
  <div class="login" style="width: 15em; text-align: center;">
     <div class="razao" style="text-align: center;">
        <input class="campo" type="text" name="razao" placeholder="razão social"><p></p>
      </div>
      <div class="cnpj" style="text-align: center;">
        <input class="campo" type="text" name="cnpj" placeholder="CNPJ" minlength="14" maxlength="18"><p></p>
      </div>
      <div class="Telefone">
        <input class="campo" type="text" name="telefone" placeholder="telefone" minlength="8" maxlength="20"><p></p>
      </div>
      <div class="e-mail" style="text-align: center;">
        <input class="campo" type="text" name="email" placeholder="email" 
        required pattern="[\w]{3,}@[\w]{3,}(.com)|[\w]{3,}@[\w]{3,}(.com.br)|[\w]{3,}@[\w]{3,}(.edu.br)"><p></p>
      </div>
      <div class="password" >
        <input class="campo" type="password" name="senha" placeholder="senha" id="senha"
        pattern="[A-z]{1,}[0-9]{1,}\W{1,}|[0-9]{1,}[A-z]{1,}\W{1,}|[0-9]{1,}\W{1,}[A-z]{1,}|\W{1,}[0-9]{1,}[A-z]{1,}|\W{1,}[A-z]{1,}[0-9]{1,}|[A-z]{1,}\W{1,}[0-9]{1,}"

><p></p>
      </div>
    <div class="btn">
      <input type ="submit" class="submit"></input>
    
    </div>
  </div>
</form>
  <div class="gif">
    <img src="img/Login.gif" alt="">
    </div>
  
    
</body>
<?php




        include 'conexaobd.php';
        $razao = $_POST['razao'];
        $cnpj = $_POST['cnpj'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        

            if($razao != "" and $cnpj != "" and $telefone != "" and $email != ""
            and $senha != "" ){
          // Monta string INSERT
            $sql = "INSERT INTO usuario (razao, cnpj_usuario,telefone, email, senha )
            VALUES ('$razao','$cnpj','$telefone','$email', '$senha' )";
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
</html>