<?php
include '../inc/database.php';
session_start();
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$iduser = $_SESSION["iduser"];
?>

<div class="juntaojbcad">
<div class="formatfonte container col-md-4 col-xs-12 col-sm-12 col-lg-4"><h3>Objetivos Cadastrados</h3></div>
<?php
$result = mysqli_query($conn,"SELECT id, objetivo FROM objetivos where idusuario='$iduser'");
while ($row = mysqli_fetch_assoc($result)) {
  ?>
      <div class="form-group col-md-12 col-xs-12 col-lg-12 ">
      <div class="objcadas">
          <div class="objdesc"><?php echo $row['objetivo'] ?> | <a href="#" id="deletar" class="text-right">Apagar?</a></div>
      </div>
      </div>
  <?php
    } ?>
</div>
