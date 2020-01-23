<?php include "header.php" ?>
<br><br><br><br><br>

<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">DATA</th>
            <th scope="col">FRETE</th>
            <th scope="col">DIAS</th>
            <th scope="col">ID</th>
            <th scope="col">TOTAL</th>
            <th scope="col"></th>
       
        </tr>
</thead>
<tbody>
    <?php foreach($lista as $pedido) { ?>

        <tr>
        <td><img width="50" src="../View/img/produtos/<?php echo $pedido['imagem'] ?>"></td>

            <th scope="row"><?php echo $pedido['id'] ?>
            <td><?php echo $pedido ['data'] ?></td>
            <td>R$<?php echo number_format( $pedido ['frete'],2,",","."); ?></td>
            <td><?php echo $pedido ['dias'] ?></td>
            <td><?php echo $pedido ['fk_cliente'] ?></td>
     

    </tr>
    <?php } ?>
</table>
<?php include "view/footer.php"?>