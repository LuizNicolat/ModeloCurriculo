<!DOCTYPE html>
<html>
<head>
<title>Luiz Gustavo Nicolat - Curriculum Vitae</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="The Curriculum Vitae"/>
<meta charset="UTF-8">

<link rel="icon" type="image/x-icon" href="./manager.ico" />

<link href="https://fonts.googleapis.com/css?family=Karma" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link type="text/css" rel="stylesheet" href="./CSS/jquery-ui.css">
<link type="text/css" rel="stylesheet" href="./CSS/style.css">
<link type="text/css" rel="stylesheet" href="estiloindexsite.css">
<link type="text/css" rel="stylesheet" href="./CSS/overhang.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!--    Jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
</script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="./js/tradPTBR.js"></script>
    <script src="./js/scriptsindexsite.js"></script>
    <script src="./js/buscacep.js"></script>
    <script src="./js/overhang.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body id="top container-fluid">
  <div class="wrap container">
    <!-- Barra do topo -->
    <nav class="navbar-custom navbar row">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
              </a>
            </div>
            <ul class="nav navbar-nav">
                <li class="limenu menuobj"><a href="#">Objetivos</a></li>
                <li class="limenu"><a href="#">Formação</a></li>
            </ul>
          </div>
    </nav>
    <!-- Inicio da pagina -->
    <div class="dadospessoais">
    <form>
        <div class="container formatfonte col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <h4>Dados Pessoais</h4>
        </div>

        <!-- <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <div class="row col-md-4 col-xs-12 col-lg-4">
              <label for="codigo">Código</label>
              <input type="text" class="form-control container-fluid" id="codigo" placeholder="01111111" disabled>
            </div>
        </div> -->

        <!-- Parte do upload de foto -->
        <!-- <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
          <div >
            <label for="imgcv">Foto do Currículo</label>
              <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <img src="./res/nopicture.png" alt="Avatar" class="avatar">
              </div>
            <input type="file" name="img[]" class="file" id="imgcv">
            <div class="input-group col-xs-12">
              <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
              <input type="text" class="form-control input-lg" disabled placeholder="Escolher imagem...">
              <span class="input-group-btn">
                <button class="browse btn btn-default input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Buscar</button>
              </span>
            </div>
          </div>

        </div> -->
        
        <div class="form-group col-md-4 col-xs-12 col-lg-4">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome">
        </div>
        <div class="form-group col-md-4 col-xs-12 col-lg-4">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control" id="sobrenome" placeholder="sobrenome">
        </div>
        <div class="form-group col-md-4 col-xs-12 col-lg-4">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" placeholder="cpf">
        </div>
        <div class="form-group col-md-4 col-xs-12 col-lg-4">
            <label for="dtnasc">Nascimento</label>
            <input type="text" class="form-control" id="datepicker">
        </div>

<!--        Dados do endereço-->
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="cep">CEP</label>
            <div class="input-group">
                <input type="text" id="cep" class="form-control" name="cep" placeholder="Clique para pesquisar ->">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button" name="buscacep"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></button>
                  </span>
            </div>
        </div>
        <!-- <div class="col-xs-12 col-sm-4 form-group">
          <label for="cep">CEP</label>
            <div class="input-group">
              <input type="text" class="form-control" name="cep">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
        </div> -->

        <div class="col-xs-12 col-sm-4 form-group">
            <label for="logradouro">Logradouro</label>
            <input type="text" id="rua" name="logradouro" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="bairro">Bairro</label>
            <input type="text" id="bairro" name="bairro" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="localidade">Localidade</label>
            <input type="text" id="cidade" name="localidade" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="UF">UF</label>
            <input type="text" id="uf" name="UF" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="IBGE">IBGE</label>
            <input type="text" id="ibge" name="IBGE" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="numero">Número</label>
            <input type="text" id="numero" name="numero" class="form-control" />
        </div>

<!--        Fim Dados do endereço-->

        <div class="separador container col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <hr class="style1">
        </div>

        <div class="container formatfonte col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <h4>Dados de usuário</h4>
        </div>

        <div class="col-xs-12 col-sm-4 form-group">
            <label for="logradouro">Usuário</label>
            <input type="text" id="usuario" name="usuario" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="bairro">Senha</label>
            <input type="text" id="senha" name="senha" class="form-control" />
        </div>
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="localidade">Repita a senha</label>
            <input type="text" id="confsenha" name="confsenha" class="form-control" />
        </div>

        <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <div class="row col-md-4 col-xs-12 col-lg-4">
                <input type="button" class="btn btn-default" value="Cadastrar" id="insertUser">
            </div>
        </div>
      </div>

      <div class="dadosobjetivo">
          <div class="formatfonte container col-md-4 col-xs-12 col-sm-12 col-lg-4"><h3>Objetivo</h3></div>
          <div class="form-group col-md-12 col-xs-12 col-lg-12">
            <textarea class="form-control" rows="5" id="comment" placeholder="Conte aqui o que você deseja alcançar, seu objetivo profissional."></textarea>
          </div>
          <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
              <div class="row col-md-4 col-xs-12 col-lg-4">
                  <input type="button" class="btn btn-default" value="Cadastrar" id="insertUser">
              </div>
          </div>
      </div>
  </div>
</body>
</html>
