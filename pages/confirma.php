<?php
include_once 'Model/conexao.php';
if (!$producao) :
    $host = "mysql:dbname=sc;host=localhost";
    $user = "root";
    $pass = "";

else :
    $host = "mysql:dbname=jgartdesign;host=mysql.jgartdesign.com.br";
    $user = "jgartdesign";
    $pass = "dbsitejg2020";
endif;
//var_dump($host);
try {
    $pdo = new PDO($host, $user, $pass);
} catch (PDOException $e) {
    echo "Falha: " . $e->getMessage();
}
$id = addslashes($_GET['h']);

//echo 'id -> '.$id;
//ler no banco o status e atualizar para 1
if (!empty($id)) {
    $query = "UPDATE usuarios SET status = 1 WHERE md5(id) = '$id'";
    //var_dump($query);
    $sql = $pdo->query($query);
    $_SESSION['loginErro'] = "Usuario validado com sucesso, faça seu login!!!";
    echo '<script>location.href="login22.php"</script>';
} else {
    $_SESSION['loginErro'] = "Erro ao validar usuário!!!";
    echo '<script>location.href="login22.php"</script>';
}
