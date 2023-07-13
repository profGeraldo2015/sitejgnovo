<?php

require_once('Config.php');

$producao = SITE['DB'];

if($producao){

    //producao kinghost
    $host = "localhost";

    $user = "id20684822_userjgartdesign"; 

    $senha = "BJ}^2R!l\*m9Z{r}";

    $banco = "id20684822_jgartdesign"; 

}else{

    //desenvolvimento
    $host = "localhost"; 

    $user = "root"; 

    $senha = "root"; 

    $banco = "scnovo2021";
}

$conex = new mysqli($host, $user, $senha, $banco);

if($conex->connect_error)

//    die('Falha na conexão: 2023' . $conex->connect_error);

//else print("Conectado. JG isto é que é developer!!!");    
    
define( 'DB_HOSTNAME', 'mysql.jgartdesign.com.br' );
define( 'DB_USERNAME', 'jgartdesign' );
define( 'DB_PASSWORD', 'dbsitejg2020' );
define( 'DB_DATABASE', 'jgartdesign' );
define( 'DB_CHARSET', 'utf8' );
?>