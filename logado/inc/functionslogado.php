<?php
include 'database.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$action = isset($_GET['a'])?$_GET['a']:'';

if ($action == 'atualizar') {

    try {
      $resultado = open_database();
    } catch (\Exception $e) {
      return $resultado;
    }

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nascimento = (string)$_POST['nascimento'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $cpf = $_POST['cpf'];
    $bairro = $_POST['bairro'];
    $localidade = $_POST['localidade'];
    $uf = $_POST['uf'];
    $ibge = $_POST['ibge'];
    $numero = $_POST['numero'];

    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

  $sql = "UPDATE dados_cadastrais SET nome='$nome',  sobrenome='$sobrenome',  nascimento='$nascimento',  cpf='$cpf',cep='$cep',  logradouro'$logradouro',  bairro='$bairro',localidade='$localidade',  uf='$localidade',  ibge='$ibge',  numero='$numero',  usuario='$usuario', senha='$senha' WHERE id='$id'";
  if(mysqli_query($conn, $sql)){
      echo 1;
  } else{
      echo mysqli_error($sql);;//"ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}
 ?>
