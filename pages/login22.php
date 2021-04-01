<form class="form-signin" method="POST" action="vlogin.php">
    <img src="images/capa_facebook_jg_art_e_design.jpg" align="center" class="img-responsive" style="width:100%" alt="logo jg">

    <h2 class="form-signin-heading text-center">Login</h2>
    <label for="usuario" class="sr-only">Usuário</label>

    <input type="text" name="usuario" class="form-control" placeholder="Digitar o Usuário" required autofocus><br />

    <label for="senha" class="sr-only">Senha</label>
    <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>

</form>

<?php
if (isset($_SESSION['loginErro'])) {
    ?>
    <p class="text-center text-danger">
        <?php echo $_SESSION['loginErro']; ?>
    </p>
        <?php unset($_SESSION['loginErro']);  
    }
    ?>

<div class="container" align="center">
    <a href="cadastro.php" title="Faça seu cadastro">Faça seu cadastro</a>
</div>