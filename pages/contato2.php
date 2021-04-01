    <!--Formulario de Contato-->
    <div class="container">
        <h2>Entre em contato conosco </h2>
        <form id="formcontato" class="form-horizontal" action="email.php" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="assunto">Assunto:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="assunto" placeholder="Digite o assunto" name="assunto">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nome">Nome:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" name="nome">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="mensagem">Mensagem:</label>
                <div class="col-sm-8">
                    <!--    <textarea class="form-control" rows="5" id="mensagem"></textarea>
                        -->
                    <input type="textarea" row="5" class="form-control" id="mensagem" placeholder="Digite sua mensagem" name="mensagem">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
            <INPUT TYPE="hidden" NAME="redirect" VALUE="PaginaDeResposta.php">
        </form>
    </div>
    <!--Formulario de Contato-->
    <br>
