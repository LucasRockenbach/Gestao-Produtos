<?php 

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssCadastroFornecedor.css">
    <title>Cadastro de Fornecedores</title>
</head> 
<body>
    <header>
        
    </header>
    <div class="content">
     <div class="menuslaterais">
        <div class="link1">
        <a href="http://localhost/projetointegrador/materiaPrima.php">MATERIA PRIMA</a>
        </div>
        <div class="link1">
        <a class="a1" href="http://localhost/projetointegrador/produtos.php">PRODUTO</a>
        </div>
        <div class="link1">
        <a href="http://localhost/projetointegrador/fornecedor.php">FORNECEDOR</a>
        </div> 
        </div>
    
        <div class="centro">
            <p class="descricaopagina">CADASTRO DE FORNECEDOR<p>
        <div class="profile-info">
           <div class="inputline1">
            
           <form action="fornecedor.php" method="post">

  
                <input type="text" class="input-register1" placeholder="Razão social" required name="razao_social">
   
                <input type="text" class="input-register6" placeholder="CNPJ" required name="cnpj">
             </div>
                    
                <!--campo email -->
                    <input type="email" placeholder="email" name="email">

               <!--campo situacao -->
 
                    <select class="inputbox3"type="text" required name="situacao">
                        <option value="true">ATIVO</option>
                        <option value="false">INATIVO</option>
                    </select>

                <!--campo data de cadastro-->
                <input class="inputbox" type="date" required name="data_de_cadastro">
                    

                  <!--campo endereço-->

   
                <input type="text" class="input-register5" placeholder="Endereço" required name="endereco">

                <!--campo telefone--> 
                <input type="tel" class="input-register4" placeholder="telefone" required name="telefone">

                
                <button type="submit">Enviar</button>

                    
                </form> 
    
            </div>
          </div> 
        </div>
        
</body>

</html>