<?php require_once "FRONT-header.php"; ?>

	
		<div class="login-container login-form-1">

        <?php 
        if(isset($_SESSION['url']))
            header("location:".$url."/pedido/finalizar"); 
            ?>
		
                    <h3>Painel do Cliente</h3>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nome *" value="Victor" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Telefone *" value="980404742" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Endereço *" value="Estrada do Boldo Bom nº420" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="CEP *" value="420666" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Seu Email *" value="boldodobom@gmail.com" />
                        </div>
                    </form>

                        <div class="col-sm-6">

                            <h5>Lista de pedidos</h5>
                            <div>



                            </div>

                        </div>
                </div>
				

</div>
</div>




			
<?php include "mensagem.php"; ?>

		

<?php include "FRONT-footer.php" ?>