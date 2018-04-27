<?php
include ('../inc/database.php');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(isset($_REQUEST['id']))
{
  $id = $_REQUEST['id'];
  $usuario = mysqli_query($conn,"SELECT * FROM dados_cadastrais where id = '$id'");
  $user = mysqli_fetch_assoc($usuario);
  //unset($id);
}
?>
<!-- input do id escondido -->
<div class="col-xs-12 col-sm-4 form-group idhidden">
    <input type="text" id="id" name="id" class="form-control"
    <?php
    if(isset($user))
    {
    ?> value= "<?php echo $user['id']; ?>"<?php
    }
    else
    {
      ?>
      ""
    <?php
    }
    ?>
    >
</div>

<!-- Page Heading -->
<div class="col-xs-12 col-sm-4 form-group">
    <label for="usuario">Usuário</label>
    <input type="text" id="usuario" name="usuario" class="form-control"
    <?php
    if(isset($user))
    {
    ?> value= "<?php echo $user['usuario']; ?>"<?php
    }
    else
    {
      ?>
      ""
    <?php
    }
    ?>
    >
</div>
<div class="col-xs-12 col-sm-4 form-group">
    <label for="senha">Senha</label>
    <input type="password" id="senha" name="senha" class="form-control"
    <?php
    if(isset($user))
    {
    ?> value= "<?php echo $user['senha']; ?>"<?php
    }
    else
    {
      ?>
      ""
    <?php
    }
    ?>
    >
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
                    <input type="text" class="form-control" id="nome" placeholder="Nome"
                    <?php
                    if(isset($user))
                    {
                    ?> value= "<?php echo $user['nome']; ?>"<?php
                    }
                    else
                    {
                      ?>
                      ""
                    <?php
                    }
                    ?>
                    >
                </div>
                <div class="form-group col-md-4 col-xs-12 col-lg-4">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenome" placeholder="sobrenome"
                    <?php
                    if(isset($user))
                    {
                    ?> value= "<?php echo $user['sobrenome']; ?>"<?php
                    }
                    else
                    {
                      ?>
                      ""
                    <?php
                    }
                    ?>
                    >
                </div>
                <div class="form-group col-md-4 col-xs-12 col-lg-4">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" placeholder="cpf"
                    <?php
                    if(isset($user))
                    {
                    ?> value= "<?php echo $user['cpf']; ?>"<?php
                    }
                    else
                    {
                      ?>
                      ""
                    <?php
                    }
                    ?>
                    >
                </div>
                <div class="form-group col-md-4 col-xs-12 col-lg-4">
                    <label for="dtnasc">Nascimento</label>
                    <input type="text" class="form-control" id="datepicker"
                    <?php
                    if(isset($user))
                    {
                    ?> value= "<?php echo $user['nascimento']; ?>"<?php
                    }
                    else
                    {
                      ?>
                      ""
                    <?php
                    }
                    ?>
                    >
                </div>

                <!--        Inicio CEP -->
                <div class="col-xs-12 col-sm-4 form-group">
                    <label for="cep">CEP</label>
                    <div class="input-group">
                        <input type="text" id="cep" class="form-control" name="cep" placeholder="Clique para pesquisar ->"
                        <?php
                        if(isset($user))
                        {
                        ?> value= "<?php echo $user['cep']; ?>"<?php
                        }
                        else
                        {
                          ?>
                          ""
                        <?php
                        }
                        ?>
                        >
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button" name="buscacep"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></button>
                          </span>
                    </div>
                </div>

                <!-- Fim do CEP -->

                <div class="col-xs-12 col-sm-4 form-group">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" id="rua" name="logradouro" class="form-control"
                    <?php
                    if(isset($user))
                    {
                     ?> value= "<?php echo $user['logradouro']; ?>"<?php
                    }
                    else
                    {
                      ?>
                      ""
                    <?php
                    }
                    ?>
                    >
                </div>
                <div class="col-xs-12 col-sm-4 form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="bairro" name="bairro" class="form-control"
                    <?php
                    if(isset($user))
                    {
                    ?> value= "<?php echo $user['bairro']; ?>"<?php
                    }
                    else
                    {
                      ?>
                      ""
                    <?php
                    }
                    ?>
                    >
                </div>
                <div class="col-xs-12 col-sm-4 form-group">
                    <label for="localidade">Localidade</label>
                    <input type="text" id="cidade" name="localidade" class="form-control"
                    <?php
                    if(isset($user))
                    {
                    ?> value= "<?php echo $user['localidade']; ?>"<?php
                    }
                    else
                    {
                      ?>
                      ""
                    <?php
                    }
                    ?>
                    >
                </div>
                <div class="col-xs-12 col-sm-4 form-group">
                    <label for="UF">UF</label>
                    <input type="text" id="uf" name="UF" class="form-control"
                    <?php
                    if(isset($user))
                    {
                    ?> value= "<?php echo $user['uf']; ?>"<?php
                    }
                    else
                    {
                      ?>
                      ""
                    <?php
                    }
                    ?>
                    >
                </div>
                <div class="col-xs-12 col-sm-4 form-group">
                    <label for="IBGE">IBGE</label>
                    <input type="text" id="ibge" name="IBGE" class="form-control"
                    <?php
                    if(isset($user))
                    {
                    ?> value= "<?php echo $user['ibge']; ?>"<?php
                    }
                    else
                    {
                      ?>
                      ""
                    <?php
                    }
                    ?>
                    >
                </div>
                <div class="col-xs-12 col-sm-4 form-group">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" name="numero" class="form-control"
                    <?php
                    if(isset($user))
                    {
                    ?> value= "<?php echo $user['numero']; ?>"<?php
                    }
                    else
                    {
                      ?>
                      ""
                    <?php
                    }
                    ?>
                    >
                </div>
                <div class="form-group col-md-12 col-xs-12 col-sm-12 col-lg-12">
                    <div class="row col-md-4 col-xs-12 col-lg-4">
                        <input type="button" class="btn btn-default" value="Editar" id="editUser">
                        <input type="button" class="btn btn-danger" value="Deletar" id="delUser">
                    </div>
                </div>
