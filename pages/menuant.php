<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php">JG Art & Design Marcenaria Artesanal
                <!--<img src="images/foto_perfil.jpg" style="width:100px;height:30px;">-->
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="./index.php" target="">Principal</a>
                </li>
                <li>
                    <a href="./quemsomos.php">Quem somos</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Galeria de fotos
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./demolicao.php">Demolição</a>
                        </li>
                        <li>
                            <a href="./planejados.php">Planejados</a>
                        </li>
                        <li>
                            <a href="./decoracao.php">Decoração</a>
                        </li>
                        <li>
                            <a href="./restauracao.php">Restauração</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="./contato2.php">Contato</a>
                </li>
                <li>
                    <a href="./nossosjobs.php">Nossos trabalhos</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/jgartdesign2017" title="Confira nossa página no Facebook">
                        <span class="fa fa-facebook-official" style="font-size:35px"></span>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/jgartedesign/" title="Confira nossa página no Instagram">
                        <span class="fa fa-instagram" style="font-size:35px"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li>
                    <a href="https://br.pinterest.com/jgartdesignmarcenariaartesanal/" title="Confira nossa página no Pinterest">
                        <span class="fa fa-pinterest" style="font-size:35px"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php
                                       if (!isset($_SESSION['usuario'])) {
                    ?>
                        <a href="./login22.php"><span class="glyphicon glyphicon-log-in"></span>Login</a>
                    <?php
                    } else {
                    ?>
                        <a href="deslogar.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a>
                    <?php
                    }
                    ?></li>
            </ul>
        </div>
    </div>
</nav>