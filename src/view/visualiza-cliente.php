<?php include "view/header.php" ?>
<form class="form-horizontal" method="post" action="cadastro">
    <fieldset>

        <!-- Form Name -->
        <legend>Cliente</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="">Nome</label>
            <div class="col-md-4">
                <input id="" name="nome" value="<?php echo $cliente['nome']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>


     <div class="form-group">
            <label class="col-md-4 control-label" for="">Email</label>
            <div class="col-md-4">
                <input id="" name="email" value="<?php echo $cliente['email']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="">Telefone</label>
            <div class="col-md-4">
                <input id="" name="telefone" value="<?php echo $cliente['telefone']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="">CPF</label>
            <div class="col-md-4">
                <input id="" name="cpf" value="<?php echo $cliente['cpf']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="">Endereço</label>
            <div class="col-md-4">
                <input id="" name="endereco" value="<?php echo $cliente['endereco']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="">CEP</label>
            <div class="col-md-4">
                <input id="" name="cep" value="<?php echo $cliente['cep']; ?>" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <div class="form-group">
                <label class="col-md-4 control-label" for=""></label>
                <div class="col-md-4">
                    <button id="" name="Cadastrar" class="btn btn-primary">Atualizar</button>
                </div>
            </div>
    </fieldset>
</form>
<?php include "view/footer.php"?>