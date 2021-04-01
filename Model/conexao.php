<?php

require_once('Config.php');

$producao = SITE['DB'];

if($producao){

    //producao kinghost
    $host = "mysql.jgartdesign.com.br";

    $user = "jgartdesign"; 

    $senha = "dbsitejg2020";

    $banco = "jgartdesign"; 

}else{

    //desenvolvimento
    $host = "localhost"; 

    $user = "root"; 

    $senha = ""; 

    $banco = "sc";
}

$conex = new mysqli($host, $user, $senha, $banco);

if($conex->connect_error)

    die('Falha na conexão: ' . $conex->connect_error);

//else print("Conectado. JG isto é que é developer!!!");    
    
define( 'DB_HOSTNAME', 'mysql.jgartdesign.com.br' );
define( 'DB_USERNAME', 'jgartdesign' );
define( 'DB_PASSWORD', 'dbsitejg2020' );
define( 'DB_DATABASE', 'jgartdesign' );
define( 'DB_CHARSET', 'utf8' );
?>