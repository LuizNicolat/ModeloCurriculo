<?php
include '../inc/database.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$iduser = $_SESSION["iduser"];
?>

<div class="formatfonte container col-md-12 col-xs-12 col-sm-12 col-lg-12"><h3>Experiências</h3></div>
<div class="col-xs-12 col-sm-4 form-group">
    <label for="nomeempresa">Nome da Empresa</label>
    <input type="text" id="nome_empresa" name="nomeempresa" class="form-control" />
</div>
<div class="col-xs-12 col-sm-4 form-group">
    <label for="ano">Ano</label>
    <input type="text" id="anoexp" name="ano" class="form-control"placeholder="1999" />
</div>
<div class="form-group col-md-12 col-xs-12 col-lg-12">
  <label for="descricao">Descreva</label>
  <textarea class="form-control" rows="5" id="desc_exp" name="descricao" placeholder="Descreva a experiência."></textarea>
</div>
<div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
    <div class="row col-md-4 col-xs-12 col-lg-4">
        <input type="button" class="btn btn-default" value="Cadastrar" id="cadexperiencia" idusuario="<?php echo $_SESSION["iduser"];?>">
    </div>
    <div class="row col-md-8 col-xs-12 col-lg-8 text-right" id="numchar">
        5000
    </div>
</div>
