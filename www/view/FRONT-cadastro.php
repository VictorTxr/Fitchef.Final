<?php require_once "FRONT-header.php"; ?>

	
		<div class="login-container login-form-1">
		
                    <h3>Cadastre-se</h3>
                    <form class="form-horizontal" method="post" action="<?php echo $url;?>/cliente/cadastrar">
                        <div class="form-group">
                            <input id="nome" type="text" class="form-control" placeholder="Nome *" name="nome" value="" />
                        </div>
                        <div class="form-group">
                            <input id="telefone" type="text" class="form-control" placeholder="Telefone *" name="telefone" value="" />
                        </div>
                        <div class="form-group">
                            <input id="endereco" type="text" class="form-control" placeholder="Endereço *" name="endereco" value="" />
                        </div>
                        <div class="form-group">
                            <input id="cep" type="text" class="form-control" placeholder="CEP *" name="cep" value="" />
                        </div>
                        <div class="form-group">
                            <input id="cpf" type="text" class="form-control" placeholder="CPF *" name="cpf" value="" />
                        </div>
                        <div class="form-group">
                            <input id="email" type="text" class="form-control" placeholder="Seu Email *" name="email" value="" />
                        </div>
                        <div class="form-group">
                            <input id="senha" type="password" class="form-control" placeholder="Sua senha *" name="senha" value="" />
                        </div>
                        <div class="form-group">
                            <input id="singlebutton" type="submit" class="btnSubmit" value="Cadastrar" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Esqueceu sua senha?</a>
                            <br>
                            <a href="<?php echo $url; ?>/login/" class="ForgetPwd">Login</a>                        
                        </div>
                    </form>
                </div>
				

</div>
</div>




			
<?php include "mensagem.php"; ?>

		

<?php include "FRONT-footer.php" ?>