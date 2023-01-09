<?php 
require 'fornecedor.php';
$cnpj = filter_input(INPUT_POST, 'cnpj' );

if($cnpj){
    $sql = $pdo -> prepare ("DELETE FROM fornecedor WHERE cnpj = :cnpj");
    $sql -> bindValue(':cnpj', $cnpj);
    $sql -> execute();
}

header ("Location: fornecedor.php");