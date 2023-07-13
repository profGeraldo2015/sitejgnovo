<?php
//session_start();

include_once('Model/conexao.php');
include("./PHPMailer/class.phpmailer.php");
include("./PHPMailer/class.smtp.php");


$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$cusuario = filter_input(INPUT_POST, 'cemail', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$criado_em = date('Y-m-d H:i:s');
$IP = $_SERVER['REMOTE_ADDR'];
$status = 0;

if($usuario != $cusuario):
    $_SESSION['loginErro'] = "E-mail´s não conferem...";
    echo "<script>location.href='login22.php'</script>";

endif;
//var_dump($POST);
//die;
//var_dump($IP);
//acertar validação quando já existe
//$result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE usuario='$usuario' LIMIT 1";
//$result_usuario = "select * from usuarios where usuario like '$usuario' and senha like '$senha' limit 1";
$result_usuario = "SELECT * from usuarios where email like '$usuario' limit 1";

$resultado_usuario = mysqli_query($conex, $result_usuario);
//var_dump($resultado_usuario);

if ($resultado_usuario) {

  $row_usuario = mysqli_fetch_assoc($resultado_usuario);

  //if (password_verify($senha, $row_usuario['senha'])) {
  if ($usuario == $row_usuario['email']) {
    //    $_SESSION['id'] = $row_usuario['id'];
    //   $_SESSION['nome'] = $row_usuario['nome'];
    // $_SESSION['email'] = $row_usuario['email'];
    $_SESSION['loginErro'] = "Usuário(e-mail) já cadastrado...";
    //header("Location: pages/login22.php");
    echo "<script>location.href='login22.php'</script>";
  } else {

    //echo "$usuario - $senha";
    //$_SESSION['loginErro'] = "Usuario já cadastrado!!!" . $usuario . " " . $senha;
    //var_dump($nome);
    //$senha = password_hash($senha, PASSWORD_DEFAULT);
    $campos = "nome, email, senha,criado_em,usuario,status";
    $query = "INSERT into usuarios({$campos}) values ('$nome','$usuario','$senha','$criado_em','$usuario','$status')";
    $resultado = mysqli_query($conex, $query);

    if (mysqli_insert_id($conex)) {
      //envia email para confirmar cadastro
      $id = mysqli_insert_id($conex);
      $assunto = "Confirme seu cadastro";
      //criptografar o id

      $idd = md5($id);
      if (!$producao) {
        $link = "http://localhost/sitejgnovo/confirma.php?h=" . $idd;
      } else {
        $link = "http://www.jgartdesign.com.br/confirma.php?h=" . $idd;
      }
      $mensagem = "Para confirmar seu cadastro "; //. $link;
      $header = "From: JG Art & Design";
      //ver youtube guilherme fernando logado profgeraldofip
      //==================================================================
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->CharSet = 'UTF-8';
      $mail->Host = "smtp.jgartdesign.com.br"; // Servidor SMTP
      $mail->SMTPSecure = false; // conexão segura com TLS
      $mail->SMTPAutoTLS = false; // conexão segura com TLS
      $mail->Port = 587;
      $mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
      $mail->Username = "contato@jgartdesign.com.br"; // SMTP username
      $mail->Password = "jgsitecon2020"; // SMTP password
      $mail->Sender = "contato@jgartdesign.com.br";
      $mail->From = "contato@jgartdesign.com.br"; // From
      $mail->FromName = "JG Art & Design Marcenaria Artesanal"; // Nome de quem envia o email
      $mail->AddAddress($usuario, $nome); // Email e nome de quem receberá //Responder
      $mail->WordWrap = 50; // Definir quebra de linha
      $mail->IsHTML = true; // Enviar como HTML
      $mail->Subject = "$assunto"; // Assunto
      //$mail->Body = "<br/><'a href=" . $mensagem . ">Clique aqui</a><br/>"; //Corpo da mensagem caso seja HTML
      $mail->Body = "$mensagem <a href={$link}>clique aqui</a>"; //Corpo da mensagem caso seja HTML

      $mail->AltBody = "$mensagem"; //PlainText, para caso quem receber o email não aceite o corpo HTML
      $enviado1 = $mail->Send();
      if ($enviado1) {
        $_SESSION['loginErro'] = "Olá, " . $nome . " enviamos um e-mail de confirmação, confirme e faça seu login!!!";
      } else {
        $_SESSION['loginErro'] = "Erro ao enviar e-mail de confirmação...";
      }
      echo "<script>location.href='login22.php'</script>";
    } else {
      $_SESSION['loginErro'] = "Erro ao cadastrar!!!";
    }
    //die;
    //header("Location: login22.php");
  }
} else {
  //echo "<h1>" . $criado_em . $senha ."</h1>";
  //  var_dump($nome);
  //    die;
  $_SESSION['loginErro'] = "Erro ao cadastrar!!!";
    echo "<script>location.href='login22.php'</script>";

}
?>
<br>
<br>
<br>
<br>
<br>
<br>

<h3>Bemvindo <?php echo $nome  ?></h3>
<h4><?php ?></h4>

<br>
<br>
<br>
<br>
<br>
<br>
<br>