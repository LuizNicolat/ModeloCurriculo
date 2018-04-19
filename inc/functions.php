<?php
include 'database.php';

$action = isset($_GET['a'])?$_GET['a']:'';

if ($action == 'inserir') {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

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
    $senha = $_POST['senha'];

    $sql = "INSERT INTO dados_cadastrais (nome,sobrenome,nascimento,cpf,cep,logradouro,bairro,localidade,uf,ibge,numero) VALUES ('$nome','$sobrenome','$nascimento','$cpf','$cep','$logradouro','$bairro','$localidade','$uf','$ibge','$numero')";
  if(mysqli_query($conn, $sql)){
      echo 1;
      $sqlcodigouser = "SELECT id from dados_cadastrais where cpf='$cpf'";
      $codigodouser = mysqli_query($conn, $sqlcodigouser);
        $sql2 = "INSERT INTO usuario (idusuario,nomeuser, senha) VALUES ('$codigodouser','$usuario','$senha')";
  } else{
      echo 0;//"ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}
else if ($action == 'verificauser') {

  $usuario = $_POST['usuario'];

  $usuario_query = mysql_query("SELECT * FROM users WHERE username = '$usuario'");
             $count=mysql_num_rows($usuario_query);
             if($count==0)
             {
               echo 1;
             }
            else
            {
              echo 0;
            }
}

 ?>
