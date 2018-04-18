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
  $bairro = $_POST['bairro'];
  $localidade = $_POST['localidade'];
  $uf = $_POST['uf'];
  $ibge = $_POST['ibge'];
  $numero = $_POST['numero'];

  $sql = "INSERT INTO usuarios (nome,sobrenome,nascimento,cep,logradouro,bairro,localidade,uf,ibge,numero) VALUES ('$nome','$sobrenome','$nascimento','$cep','$logradouro','$bairro','$localidade','$uf','$ibge','$numero')";
if(mysqli_query($conn, $sql)){
    echo 1;
} else{
    echo 0;//"ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
  //
  // $stmt = $conn->prepare("insert into usuarios values(?,?,?,?,?,?,?,?,?,?)");
  // $stmt->bind_Param(1,$nome);
  // $stmt->bind_Param(2,$sobrenome);
  // $stmt->bind_Param(3,$nascimento);
  // $stmt->bind_Param(4,$cep);
  // $stmt->bind_Param(5,$logradouro);
  // $stmt->bind_Param(6,$bairro);
  // $stmt->bind_Param(7,$localidade);
  // $stmt->bind_Param(8,$uf);
  // $stmt->bind_Param(9,$ibge);
  // $stmt->bind_Param(10,$numero);
  // $stmt->execute();
}

 ?>
