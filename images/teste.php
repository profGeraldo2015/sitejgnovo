<?php 
$host = "mysql.jgartdesign.com.br"; 
$user = "jgartdesign"; 
$senha = "db2018jg&$"; 
$banco = "jgartdesign"; 
$conex = new mysqli($host, $user, $senha, $banco); 
if($conex -> connect_errno)
die('Falha na conexão: ' . $conex->connect_error);
else print("Conectado. JG isto é que é developer!!!");
?>