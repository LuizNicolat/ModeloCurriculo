<?php
include 'database.php';

$action = isset($_GET['a'])?$_GET['a']:'';

if ($action == 'inserir') {

  try {
    open_database();
    return "Conectou ao banco!";
  } catch (\Exception $e) {
    return "Não conectou ao banco!";
  }


  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $nascimento = $_POST['nascimento'];
  $cep = $_POST['cep'];
  $logradouro = $_POST['logradouro'];
  $bairro = $_POST['bairro'];
  $localidade = $_POST['localidade'];
  $uf = $_POST['uf'];
  $ibge = $_POST['ibge'];
  $numero = $_POST['numero'];
  // 
  // $stmt =
}

 ?>
