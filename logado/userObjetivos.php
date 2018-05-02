<?php
include '../inc/database.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$iduser = $_SESSION["iduser"];
?>

    <div class="formatfonte container col-md-4 col-xs-12 col-sm-12 col-lg-4"><h3>Objetivo</h3></div>
    <div class="form-group col-md-12 col-xs-12 col-lg-12">
      <textarea class="form-control" rows="5" id="comment" placeholder="Conte aqui o que você deseja alcançar, seu objetivo profissional."></textarea>
    </div>
    <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
        <div class="row col-md-4 col-xs-12 col-lg-4">
            <input type="button" class="btn btn-default" value="Cadastrar" id="cadobjetivo" idusuario="<?php echo $_SESSION["iduser"];?>">
        </div>
        <div class="row col-md-8 col-xs-12 col-lg-8 text-right" id="numchar">
            5000
        </div>
    </div>

    <div class="juntaojbcad">
    <div class="formatfonte container col-md-4 col-xs-12 col-sm-12 col-lg-4"><h3>Objetivos Cadastrados</h3></div>
    <?php
    $result = mysqli_query($conn,"SELECT id, objetivo FROM objetivos where idusuario='$iduser'");
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <div class="form-group col-md-12 col-xs-12 col-lg-12 ">
          <div class="objcadas">
              <div class="objdesc"><?php echo $row['objetivo'] ?> | <a href="#" id="deletarobj" class="text-right <?php echo $row['id'] ?>">Apagar?</a></div>
          </div>
          </div>
      <?php
        } ?>
    </div>
