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

    $conn->query("UPDATE dados_cadastrais SET nome='$nome', sobrenome='$sobrenome', nascimento='$nascimento', cpf='$cpf', cep='$cep', logradouro='$logradouro', bairro='$bairro', localidade='$localidade', uf='$uf', ibge='$ibge', numero='$numero', usuario='$usuario', senha='$senha'".
    "WHERE id =$id");

// pdo
    // $stmt = $conn->prepare("UPDATE dados_cadastrais SET nome=:nome,sobrenome=:sobrenome,nascimento=:nascimento,cpf=:cpf,cep=:cep,logradouro=:logradouro,bairro=:bairro,localidade=:localidade,uf=:uf,ibge=:ibge,numero=:numero,usuario=:usuario,senha=:senha where id=:id");
    // $stmt->bind_Param( ':id', $id );
    // $stmt->bind_Param( ':nome', $nome );
    // $stmt->bind_Param( ':sobrenome', $sobrenome );
    // $stmt->bind_Param( ':nascimento', $nascimento );
    // $stmt->bind_Param( ':cpf', $cpf );
    // $stmt->bind_Param( ':cep', $cep );
    // $stmt->bind_Param( ':logradouro', $logradouro );
    // $stmt->bind_Param( ':bairro', $bairro );
    // $stmt->bind_Param( ':localidade', $localidade );
    // $stmt->bind_Param( ':uf', $uf );
    // $stmt->bind_Param( ':ibge', $ibge );
    // $stmt->bind_Param( ':numero', $numero );
    // $stmt->bind_Param( ':usuario', $usuario );
    // $stmt->bind_Param( ':senha', $senha );
    // $result = $stmt->execute();

    //echo $result;
    echo $conn->affected_rows;


    //  if(mysqli_affected_rows($conn) == 1 ){ //ifnum
    //     echo 1; // Redirecting To Other Page
    // }
    // else{
    //     echo "0";
    // }

  //$sql = "UPDATE dados_cadastrais SET nome='$nome',  sobrenome='$sobrenome',  nascimento='$nascimento',  cpf='$cpf',cep='$cep',  logradouro'$logradouro',  bairro='$bairro',localidade='$localidade',  uf='$localidade',  ibge='$ibge',  numero='$numero',  usuario='$usuario', senha='$senha' WHERE id='$id'";
  // if(mysqli_query($conn, $sql)){
  //     echo 1;
  // } else{
  //     echo mysqli_error($conn);;//"ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  // }
}
 ?>
