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
<link type="text/css" rel="stylesheet" href="./CSS/overhang.min.css">
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
    <script src="./js/overhang.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body id="top container-fluid">
  <div class="wrap container">
        <nav class="navbar-custom navbar row">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
            <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </nav>
    <!-- Inicio da pagina -->
    <form>
        <div id="slide">
          TESTE
            <div id="textoslide"></div>
        </div>

        <div class="container formatfonte col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <h4>Dados Pessoais</h4>
        </div>

        <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <div class="row col-md-4 col-xs-12 col-lg-4">
              <label for="codigo">Código</label>
              <input type="text" class="form-control container-fluid" id="codigo" placeholder="01111111" disabled>
            </div>
        </div>
        <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
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

        </div>
        <div class="form-group col-md-4 col-xs-12 col-lg-4">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome">
        </div>
        <div class="form-group col-md-4 col-xs-12 col-lg-4">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control" id="sobrenome" placeholder="sobrenome">
        </div>
        <div class="form-group col-md-4 col-xs-12 col-lg-4">
            <label for="dtnasc">Nascimento</label>
            <input type="text" class="form-control" id="datepicker">
        </div>

<!--        Dados do endereço-->
        <div class="col-xs-12 col-sm-4 form-group">
            <label for="cep">CEP</label>
            <div class="input-group-btn">
                <input type="text" id="cep" class="form-control" name="cep" placeholder="Clique para pesquisar ->">
                <span >
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

        <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <div class="row col-md-4 col-xs-12 col-lg-4">
            <input type="button" class="btn btn-default" value="Salvar Usuário" id="insertUser">
            </div>
        </div>
        <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <div class="row col-md-4 col-xs-12 col-lg-4">
            <input type="button" class="btn btn-default" value="Testar Popup" id="testapopup">
            </div>
        </div>


<!--        Fim Dados do endereço-->

        <div class="separador container col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <hr class="style1">
        </div>

        <div class="container formatfonte col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <h4>Objetivo</h4>
        </div>
        <div class="form-group col-md-12 col-xs-12 col-lg-12">
          <textarea class="form-control" rows="5" id="comment" placeholder="Conte aqui o que você deseja alcançar, seu objetivo profissional."></textarea>
        </div>

        <div class="separador container col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <hr class="style1">
        </div>
        <div id="formacao1">
        <div class="container formatfonte col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <h4>Formação</h4>
        </div>
        <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <label for="nomecurso">Nome do Curso</label>
            <input type="text" class="form-control" id="nomecurso" placeholder="Nome do curso">
        </div>
        <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <label for="instituicao">Nome da Instituição</label>
            <input type="text" class="form-control" id="instituicao" placeholder="Nome da Instituição">
        </div>
        <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <label for="selectform">Tipo de Curso</label>
            <select class="form-control" id="selectform">
              <option>Selecione...</option>
              <option>Graduação</option>
              <option>Bacharelado</option>
              <option>Licenciatura</option>
              <option>Pós-Graduação</option>
              <option>Mestrado</option>
              <option>Doutorado</option>
            </select>
        </div>
        <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <label for="grupobotao">Situação</label>
              <div class="btn-group" data-toggle="buttons" id="grupobotao">
                      <label class="btn btn-default">
                          <input type="radio" id="q156" name="quality[25]" value="1" /> Cursando
                      </label>
                      <label class="btn btn-default">
                          <input type="radio" id="q157" name="quality[25]" value="2" /> Concluído
                      </label>
              </div>
        </div>
        <div class="form-group col-md-12 col-xs-12 col-lg-12">
            <label for="textoforma">Descrição da Formação</label>
            <textarea class="form-control" rows="5" id="textoforma" placeholder="Descreva os assuntos abordados durante a formação."></textarea>
        </div>
        </div>
    </form>
        <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <div class="row col-md-4 col-xs-12 col-lg-4">
            <input type="button" class="btn btn-default" value="Adicionar DIV" id="target">
            </div>
        </div>
  </div>
</body>
</html>
