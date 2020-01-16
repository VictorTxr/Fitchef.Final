<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Fit Chef - Início</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $url; ?>/fontawesome/css/all.css">
  <link rel="stylesheet" href="<?php echo $url; ?>/css/style.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>


<div class="container">



<!-- Form Name -->
<legend>Login ADM</legend>

<form method="post" action="adm" class="form-horizontal">

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for=""></label>  
    <div class="col-md-4">
    <input id="nome" name="nome" type="text" placeholder="usuario" class="form-control input-md">
      
    </div>
  </div>

  <!-- Password input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for=""></label>
    <div class="col-md-4">
      <input id="senha" name="senha" type="password" placeholder="senha" class="form-control input-md">
      
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for=""></label>
    <div class="col-md-4">
      <button id="singlebutton" name="" class="btn btn-primary">Entrar</button>
    </div>
  </div>

  </fieldset>
</form>
</div>

