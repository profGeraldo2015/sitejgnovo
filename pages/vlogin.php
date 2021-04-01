<?php
//session_start();
//include_once('conexao.php');
$usuario = mysqli_real_escape_string($conex, $_POST['usuario']);
$senha = mysqli_real_escape_string($conex, $_POST['senha']);
//$senha = md5($senha);
//echo "<h1>" . $usuario." " . $senha ."</h1>";
//if(password_verify($senha, $row_usuario['senha']);
//implementar verificacao de senha 
$query = "SELECT * from usuarios where usuario like '$usuario' and senha like '$senha' and status like 1 limit 1";
$resultado = mysqli_query($conex, $query);
$dados = mysqli_fetch_assoc($resultado);
//echo '<pre>';
//echo var_dump($dados);
//echo '</pre>';
//die;
if (empty($dados)) {
    //header('Location: login22.php');
    $_SESSION['loginErro'] = "Usuario ou senha inválida ou não confirmou e-mail";
    //echo '<meta http-equiv="Location" content="login22.php"';
    echo '<script>window.location ="login22.php"</script>';
}elseif (isset($dados)) {
    unset($_SESSION['usuario']);
    $_SESSION['usuario'] = $dados['nome'];
    //header('Location: ./validado.php');
    //echo $_SESSION['usuario'];
    //echo '<meta http-equiv="Location" content="pages/validado.php"';
    echo '<script>window.location ="validado.php"</script>';
} else {
   // header('Location: ./login22.php');
  
    $_SESSION['loginErro'] = "Usuario ou senha inválida ou não confirmou e-mail";
    //echo '<meta http-equiv="Location" content="pages/login22.php"';
    echo '<script>window.location ="login22.php"</script>';
    
    
}
?>
