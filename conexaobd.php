<?php

$usuario = 'root';
$banco = new mysqli(
    "localhost","root","@Luquinha10","gerenciamento","3306");
if($banco->connect_errno){
    echo "Erro ao conectar no banco de dados!<br>";
}

?>