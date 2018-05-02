<?php
include 'database.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$action = isset($_GET['a'])?$_GET['a']:'';

if ($action == 'alterar') {

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
    $nivelacesso = $_POST['nivel_acesso'];

    $conn->query("UPDATE dados_cadastrais SET nome='$nome', sobrenome='$sobrenome', nascimento='$nascimento', cpf='$cpf', cep='$cep', logradouro='$logradouro', bairro='$bairro', localidade='$localidade', uf='$uf', ibge='$ibge', numero='$numero', usuario='$usuario', senha='$senha',".
    "nivel_acesso='$nivelacesso' WHERE id =$id");
    $result = $conn->affected_rows; //retorna linhas afetadas
    if ($result == 1) {
      echo $result;
    } else {
      echo mysqli_error($conn);
    }
}else if ($action == 'deletaruser') {

    $id = $_POST['id'];
    $conn->query("DELETE from dados_cadastrais WHERE id =$id");
    echo $conn->affected_rows;

}else if ($action == 'inserirUserAdmin') {

    try {
      $resultado = open_database();
    } catch (\Exception $e) {
      return $resultado;
    }

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
    $nivel_acesso = $_POST['permissao'];

  $sql = "INSERT INTO dados_cadastrais (nome,sobrenome,nascimento,cpf,cep,logradouro,bairro,localidade,uf,ibge,numero,usuario,senha,nivel_acesso) VALUES ('$nome','$sobrenome','$nascimento','$cpf','$cep','$logradouro','$bairro','$localidade','$uf','$ibge','$numero','$usuario','$senha','$nivel_acesso')";
  if(mysqli_query($conn, $sql)){
      echo 1;
  } else{
    echo mysqli_error($conn);
    //echo 0;//"ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}else if ($action == 'inserirObjetivo') {
  $id = $_POST['idusuario'];
  $objetivo = $_POST['textoobjetivo'];

  $sql = "INSERT INTO objetivos(idusuario,	objetivo) VALUES ('$id','$objetivo')";
  if(mysqli_query($conn, $sql)){
      echo 1;
  } else{
    echo mysqli_error($conn);
    //echo 0;//"ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}
 ?>
