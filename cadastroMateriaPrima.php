<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssCadastroMateriaPrima.css">
    <title>Cadastro de Fornecedores</title>
</head>
<body>
    <header>
        <div class="logo">
     <a href="http://localhost/projetointegrador/index.php">   <img src="img/luli2.png" alt="logotomia"> </a> 
      
        
    </header>
    <div class="content">
     <div class="menuslaterais">
        <div class="link1">
        <a href="http://localhost/projetoIntegrador/cadastroMateriaPrima.php">Materia Prima</a>
        </div>
        <div class="link1">
        <a class="a1" href="">PRODUTO</a>
        </div>
        <div class="link1">
        <a href="">FORNECEDOR</a>
        </div> 
        </div>
    
        <form action="http://localhost/projetointegrador/materiaPrima.php" method="post">
        <div class="centro">
            <p class="descricaopagina">Cadastro de Matéria Prima<p>
        <div class="profile-info">
           <div class="inputline1">  
                 
                <input type="text" class="input-register1" placeholder="tipo tecido" required name="tipo_tecido">
                <div class="inputline2"> 
                <input class="inputbox" type="number" placeholder="tamanho" required name="tamanho">
                
                
                </div>
                
           <div class="inputline5">   
            <input type="number" class="input-register5" placeholder="Quantidade" required name="quantidade">

        </div> 

        <div class="inputline5"> 
    
            <input type="text" class="input-register3" placeholder="estampa" required name="estampa">
        </div>
    
        <div class="buttons">
            <input type="submit"> </input>

        </div>
    </form>

            </div>
          </div> 
        </div>
        
        
       
</body>

</script>
</html>