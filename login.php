<!DOCTYPE html>
<html lang="en" style="background-color: #8b8b8b">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <link rel="stylesheet" href="cssLogin.css">
</head>
<body>
    <form class="form" action="http://localhost/Integrador2Semestre/login.php" method="POST" onsubmit="return confirm('Confirma ação')">
        <div class="login">
           <img class="logo" src="img/luli2.png" alt="logo">
        <div class="email">
           <img class="icons" src="img/key.svg" alt="">
            <input class="campo" type="text" name="email" placeholder="E-mail" required name ><p></p>
      </div>
      <div class="senha" >
        <img class="icons" src="img/padlock.svg" alt="">
        <input class="campo" type="password" name="senha" placeholder="senha"><p></p>
      </div>
      <div class="info">
       <a href="http://localhost/Integrador2Semestre/criarUsuario.php">Nao tem uma conta? Clique aqui</a><br>
      </div>
      <div class="btn">
        <button type ="submit" class="submit">Login</button>
      </div>
      </div>
  </form>
    <div class="gif">
    <img src="img/computer.gif" alt="">
    </div>
  
    <?php
       include ('conexaoBD.php');
       $email = $_POST['email'];
       $senha = $_POST['senha'];

       if (isset ($_POST['email']) ||  isset ($_POST['senha'])){ 
        if(strlen ($_POST['email']) == 0 ){
          echo "preencha seu email";
        }elseif(strlen ($_POST['senha']) == 0 ){
          echo"preencha sua senha";
        }else{

           $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
           $sql_query = $banco->query ($sql_code) or die ("falha ao executar " .$mysqli -> error);
           
          $quantidade = $sql_query -> num_rows;

          if($quantidade == 1){

            $usuario = $sql_query -> fetch_assoc();

            if (!isset ($_SESSION)){
                session_start();
            }
             $_SESSION['user'] = $usuario['cnpj_usuario'];
             $_SESSION['name'] = $usuario ['nome'];
             
             header("Location: http://localhost/Integrador2Semestre/index.php");

          }else{
            echo "Falha ao logar";
          }
            
        }
       }
    ?>
    
</body>


</html>