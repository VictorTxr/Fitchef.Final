<?php include "FRONT-header.php" ?>

<div class="card titulofaixa">
  <div class="card-body titulo">
    Prato fitchef
  </div>
</div>
<div class="container produtobox">
  <div class="row">
    <div class="col-sm-6">
      <img class="imgproduto" src="<?php echo $url; ?>/img/produtos/<?php echo $produto->getImagem(); ?>">
    </div>
    <div class="col-sm-6">
      <h2><?php echo $produto->getNome(); ?></h2>


      <hr style="border:1px dashed gray;">
      <p> As porções são individuais. Clique em + para adicionar.
        <hr style="border:1px dashed gray;">

        <div class="container pricequant">
          <div class="row">

            <div class="col-sm-4">
              <h2><?php echo $produto->getPreco(); ?></h2>
            </div>

            <div class="col-sm-4">
              <p>Quantidade:</p>
            </div>
            <div class="col-sm-4">


              <a href="<?php echo $url; ?>/carrinho/adicionar/<?php echo $produto->getId(); ?>" class="btn">Comprar</a>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="card">
    <div class="card-body">
      Descrição
    </div>
  </div>
  <div class="textoproduto">
    
      <p><?php echo $produto->getDescricao(); ?></p>


  
  </div>
</div>
</div>

<?php include "FRONT-footer.php" ?>