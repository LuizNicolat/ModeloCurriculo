<?php
include '../inc/database.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
?>

<!-- Page Heading -->
<div class="col-xs-12 col-sm-4 form-group">
    <label for="usuario">Usuário</label>
    <input type="text" id="usuario" name="usuario" class="form-control" />
</div>
<div class="col-xs-12 col-sm-4 form-group">
    <label for="senha">Senha</label>
    <input type="password" id="senha" name="senha" class="form-control" />
</div>
<div class="col-xs-12 col-sm-4 form-group">
    <label for="confsenha">Repita a senha</label>
    <input type="password" id="confsenha" name="confsenha" class="form-control" />
</div>

<div class="separador container col-md-12 col-xs-12 col-sm-12 col-lg-12">
      <hr class="style1">
</div>
                <!-- /.row -->
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

                <!--        Inicio CEP -->
                <div class="col-xs-12 col-sm-4 form-group">
                    <label for="cep">CEP</label>
                    <div class="input-group">
                        <input type="text" id="cep" class="form-control" name="cep" placeholder="Clique para pesquisar ->">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button" name="buscacep"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></button>
                          </span>
                    </div>
                </div>

                <!-- Fim do CEP -->

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
                        <input type="button" class="btn btn-default" value="Editar" id="insertUser">
                        <input type="button" class="btn btn-danger" value="Deletar" id="insertUser">
                    </div>
                </div>
