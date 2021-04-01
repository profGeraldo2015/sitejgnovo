        <!--Formulario de Contato-->

            <form id="formcontato" class="form-horizontal" action="./validaCadastro.php" method="POST">
                <div class="form-group" align="center">

                    <img src="images/capa_facebook_jg_art_e_design.jpg" class="img-fluid" style="width:60%" alt="logo jg">
                </div>
                <h2 align="center">Crie sua conta</h2>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">Nome completo:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nome" placeholder="Digite o nome completo" name="nome">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="cemail">Confirme:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="cemail" placeholder="Confirme seu email" name="cemail">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="senha">Senha:</label>
                    <div class="col-sm-8">
                        <input type="password" row="5" class="form-control" id="senha" placeholder="Digite sua senha" name="senha">

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>

                <INPUT TYPE="hidden" NAME="redirect" VALUE="./login22.php">

            </form>
        <!--Formulario de Contato-->
        <br>

		<script>
		$(document).ready(function() {
			$('#formcontato').validate({
				rules: {
					nome: {
						required: true
					},
					email: {
						required: true
					},
					assunto: {
						required: true
					},
					mensagem: {
						required: true
					}
				},
				messages: {
					nome: {
						required: "Por favor, digite o nome..."
					},
					email: {
						required: "Por favor , digite o email..."
					},
					assunto: {
						required: "Por favor, digite o assunto"
					},
					mensagem: {
						required: "Mensagem em branco"
					}
				}
			});
		});
	    </script>