<?php include "View/header-fitchef.php" ?>





<?php echo $_SESSION['idpedido']; ?>

<div class ="form-group">
<label class="col-md-12 control-label" for="singlebutton"></label>
<div class="col-md-12">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Efetuar Pagamento</button>
 </div>    
</div>

</fieldset>
</form>
</div>
<div class="col-md-4">
<h3>DADOS DO PEDIDO</h3>
<p>Total: R$ <?php echo $pagamento->getTotal(); ?> </p>
<p>Frete: R$ <?php echo $pagamento->getFrete(); ?> </p>
<p>Entrega: <?php echo $pagamento->getDias(); ?> dias</p>
</div>
</div>





<?php include "View/footer.php" ?>