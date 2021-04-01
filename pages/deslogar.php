<?php session_destroy();
//echo"<h1>aqui</h1>";
$_SESSION['usuario']="";
//header("Location: ./index.php");
echo '<script>window.location ="index.php"</script>';
?>