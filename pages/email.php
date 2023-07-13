<?php
include_once 'Model/conexao.php';
include("./PHPMailer/class.phpmailer.php");
include("./PHPMailer/class.smtp.php");

$redirect = $_POST['redirect'];

$assuntov  = $_POST['assunto']; //JG Art & Design agradece seu contato';
$assunto  = 'JG Art & Design agradece seu contato';

$nomev = $_POST['nome'];
$emailv  = $_POST['email'];
$mensagem = "Obrigado pelo seu contato, <br/><br/> Responderemos assim que possível! <br/><br/>JG Art & Design Marcenaria 4.0";
$mensagemv = $_POST["mensagem"];

$criado_em = date('Y-m-d');

//envia para o visitante do site

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.jgartdesign.com.br"; // Servidor SMTP
$mail->SMTPSecure = false; // conexão segura com TLS
$mail->SMTPAutoTLS = false;
$mail->Port = 587;
$mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
$mail->Username = "contato@jgartdesign.com.br"; // SMTP username
$mail->Password = "jgsitecon2020"; // SMTP password
$mail->Sender = "contato@jgartdesign.com.br";
$mail->From = "contato@jgartdesign.com.br"; // From
$mail->FromName = "JG Art & Design Marcenaria 4.0"; // Nome de quem envia o email
$mail->AddAddress($emailv, $nomev); // Email e nome de quem receberá //Responder
$mail->WordWrap = 50; // Definir quebra de linha
$mail->IsHTML = true; // Enviar como HTML
$mail->Subject = $assunto; // Assunto
$mail->Body = '<br/>' . $mensagem . '<br/>'; //Corpo da mensagem caso seja HTML
$mail->AltBody = "$mensagem"; //PlainText, para caso quem receber o email não aceite o corpo HTML

$enviado1 = $mail->Send();

//ENVIA PARA O ADM DO SITE
$assunto  = 'Recebido pelo site: ' . $assuntov;
$nome = 'WebMaster';
$email  = 'geraldo@jgartdesign.com.br';
$mensagem =  "Recebemos uma mensagem no site <br/>
						<strong>Nome:</strong> $nomev<br/>
						<strong>e-mail:</strong> $emailv<br/>
						<strong>Mensagem:</strong> $mensagemv<br>";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.jgartdesign.com.br"; // Servidor SMTP
$mail->SMTPSecure = false; // conexão segura com TLS
$mail->SMTPAutoTLS = false;
$mail->Port = 587;
$mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
$mail->Username = "contato@jgartdesign.com.br"; // SMTP username
$mail->Password = "jgsitecon2020"; // SMTP password
$mail->Sender = "contato@jgartdesign.com.br";
$mail->From = "contato@jgartdesign.com.br"; // From
$mail->FromName = "JG Art & Design (site)"; // Nome de quem envia o email
$mail->AddAddress($email, $nome); // Email e nome de quem receberá //Responder
$mail->WordWrap = 50; // Definir quebra de linha
$mail->IsHTML = true; // Enviar como HTML
$mail->Subject = $assunto; // Assunto
$mail->Body = '<br/>' . $mensagem . '<br/>'; //Corpo da mensagem caso seja HTML
$mail->AltBody = "$mensagem"; //PlainText, para caso quem receber o email não aceite o corpo HTML

//enviado2 = $mail->Send();

//este recurso para nao enviar o email sera trocado para novo hospedeiro
$enviado2 = $enviado1 = true;

if ($enviado2 && $enviado1) {

  //$result_email = "INSERT INTO email(?,assunto, nome, email, mensagem) VALUES ('$assuntov','$nomev','$emailv','$mensagemv')";
  //$resultado = mysqli_query($conex , $result_email);

  $campos = "assunto, nome, email, mensagem";
  $query = "INSERT INTO email({$campos}) VALUES ('$assuntov','$nomev','$emailv','$mensagemv')";
  $resultado = mysqli_query($conex, $query);

  if ($resultado) {
  } else {
  }

  include_once $redirect;
} else {

  echo '<br/><br><br><br><br><br>
        <div>
        <h2>Erro ao enviar... Tente novamente... </h2>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        </div>';
}

//header("Location : $redirect");
//include_once $redirect;
