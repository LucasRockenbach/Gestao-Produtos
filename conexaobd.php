<?php

$usuario = 'root';
$banco = new mysqli(
    "localhost","root","mcrpmore","gerenciamento","3306");
if($banco->connect_errno){
    echo "Erro ao conectar no banco de dados!<br>";
}

?>