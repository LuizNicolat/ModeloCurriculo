<?php
include 'database.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$action = isset($_GET['a'])?$_GET['a']:'';

if ($action == 'inserir') {

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

  $sql = "INSERT INTO dados_cadastrais (nome,sobrenome,nascimento,cpf,cep,logradouro,bairro,localidade,uf,ibge,numero,usuario,senha) VALUES ('$nome','$sobrenome','$nascimento','$cpf','$cep','$logradouro','$bairro','$localidade','$uf','$ibge','$numero','$usuario','$senha','0')";
  if(mysqli_query($conn, $sql)){
      echo 1;
  } else{
      echo 0;//"ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}
else if ($action == 'verificauser') {

    $usuario = $_POST['usuario'];

    $usuario_query = mysqli_query($conn,"SELECT * FROM dados_cadastrais WHERE usuario = '$usuario'");
               $count=mysqli_num_rows($usuario_query);
               if($count==0)
               {
                 echo 1;
               }
              else
              {
                echo 0;
                // echo 0 "-" + mysqli_error();
              }
  }
  else if ($action == 'criptografasenha') {

      $criptosenha = '';

      $criptosenha = $_POST['password'];

      if ($criptosenha != '') {
        $result = md5($criptosenha);
        echo $result;
      } else{
        echo 0;
      }

    }
    else if ($action == 'login') {

          $usuario = $_POST['username'];
          $password = md5($_POST['password']);

          $verifica = mysqli_query($conn,"SELECT * FROM dados_cadastrais WHERE usuario = '$usuario' AND senha = '$password'"); //or die("erro ao selecionar");
          $res=mysqli_fetch_array($verifica); // joga em array os dados do select
          if (mysqli_num_rows($verifica)<=0){
            echo 0;
            //die();
          }else{
            if(!isset($_SESSION)) 	//verifica se há sessão aberta
        		session_start();		//Inicia seção
        		//Abrindo seções
            $_SESSION['logado']=1;
            $_SESSION['iduser']=$res['id'];
            $_SESSION['nome']=$res['nome'];
        		$_SESSION['usuario']=$res['usuario'];
        		$_SESSION['permissao']=$res['nivel_acesso'];
        		echo $res['nivel_acesso'];
        		exit;
          }
    }else if ($action == 'verificacpf') {

        $cpf = $_POST['cpf'];

        $cpf_query = mysqli_query($conn,"SELECT * FROM dados_cadastrais WHERE cpf = '$cpf'");
                   $count=mysqli_num_rows($cpf_query);
                   if($count==0)
                   {
                     echo 0;
                   }
                  else
                  {
                    echo 1;
                    // echo 0 "-" + mysqli_error();
                  }
      };

      // function pegapermissao($usuario){
      //   $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
      //
      //   $nivelacesso = mysqli_query($conn,"SELECT nivel_acesso FROM dados_cadastrais WHERE usuario = '$usuario'");
      //   while ($row = $nivelacesso->fetch_assoc()) {
      //     echo $row['nivel_acesso'];
      //   }
      //   // echo (string)$nivelacesso;
      // }


      class Usuario{
            function consultaUsuario($id=""){
      		//se veio ID, então consulta especifico:*= tudo
      		//ou pede os campos que deseja: id, nome, email WHERE = aonde
      		//igual: =, diferente: <>, <=, >=
      		if($id != ""){
      			$result = mysql_query("SELECT * FROM dados_cadastrais WHERE id = '$id'");
      		} else { //consulta geral
      			$result = mysql_query("SELECT id,nome,email FROM usuarios ORDER BY nome ASC"); //ASC ou DESC
      		}
      		//saida nos dados para fora da function:
      		return $result;
      		//$listagem = Usuario::consultaUsuario($cod_usuario);
      	}
      }
 ?>
