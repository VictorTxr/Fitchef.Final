<?php include "view/FRONT-header.php" ?>

<div class="row">
    <div class="col-md-4">
        <form class="form-horizontal" method="post" action="cadastrar">
            <fieldset>

                <legend> Pedido ID <?php 
                
                //var_dump($dados);
                
                //echo $dados['pk_pedido']; ?></legend>

                <div class="form-group">
                    <label class="col-md-12 control-label" for="nome"> Data da Compra</label>
                    <div class="col-md-12">
                        <input id="nome" name="nome" disabled="disabled" value="<?php echo $dados['data_pedido']; ?>"
                            type="text" placeholder="" class="form-control input_md" required="">
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-12 control-label" for="nome">Frete</label>
                    <div class="col-md-12">
                        <input id="nome" name="nome" disabled="disabled"
                            value="R$ <?php echo number_format($dados['frete'],2,",","."); ?>" type="text"
                            placeholder="" class="form-control input_md" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 control-label" for="nome">Prazo</label>
                    <div class="col-md-12">
                        <input id="nome" name="nome" disabled="disabled" value="<?php echo $dados['dias']." dias"; ?>"
                            type="text" placeholder="" class="form-control input_md" required="">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-12 control-label" for="nome">Total</label>
                    <div class="col-md-12">
                        <input id="nome" name="nome" disabled="disabled"
                            value="R$ <?php echo number_format($dados['total'],2,",","."); ?>" type="text"
                            placeholder="" class="form-control input_md" required="">
                    </div>
                </div>

            </fieldset>
        </form>
    </div>

    <div class="col-md-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                foreach($produtos as $produto) { ?>
                <tr>
                    <td><img width="180" src="<?php echo $url; ?>/img/produtos/<?php echo $produto['imagem'] ?>">
                        </td>
                    <td><?php echo $produto['nome'] ?></td>
                    <td><?php echo $produto['quantidade'] ?></td>
                    <td>R$ <?php echo number_format($produto['preco'],2,",","."); ?></td>

                </tr> 
            <?php } ?>
        </tbody>
    </table>                
</div>

<?php include "view/footer.php" ?>