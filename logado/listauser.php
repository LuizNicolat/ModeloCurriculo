<?php
include '../inc/database.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
?>

<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tables
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="indexadmin.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Lista de usuários
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Usuários Cadastrados</h2>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                      <th> ID </th>
                                      <th> Nome </th>
                                      <th> Sobrenome </th>
                                      <th> Nascimento </th>
                                      <th> Cep </th>
                                      <th> Logradouro </th>
                                      <th> CPF </th>
                                      <th> Bairro </th>
                                      <th> Localidade </th>
                                      <th> UF </th>
                                      <th> IBGE </th>
                                      <th> Numero </th>
                                      <th> Usuario </th>
                                      <th> Senha </th>
                                      <th> Tipo </th>
                                      <th> Ações </th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $result = mysqli_query($conn,"SELECT id,
                                                                       nome ,
                                                                       sobrenome ,
                                                                       nascimento ,
                                                                       cep ,
                                                                       logradouro ,
                                                                       cpf ,
                                                                       bairro ,
                                                                       localidade ,
                                                                       uf ,
                                                                       ibge ,
                                                                       numero ,
                                                                       usuario ,
                                                                       senha ,
                                                                       pm.descricao as 'descricao' FROM dados_cadastrais dc join permissoes pm on dc.nivel_acesso = pm.codigo");
                                  while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td id="codigouser"><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['nome'] ?></td>
                                        <td><?php echo $row['sobrenome'] ?></td>
                                        <td><?php echo $row['nascimento'] ?></td>
                                        <td><?php echo $row['cep'] ?></td>
                                        <td><?php echo $row['logradouro'] ?></td>
                                        <td><?php echo $row['cpf'] ?></td>
                                        <td><?php echo $row['bairro'] ?></td>
                                        <td><?php echo $row['localidade'] ?></td>
                                        <td><?php echo $row['uf'] ?></td>
                                        <td><?php echo $row['ibge'] ?></td>
                                        <td><?php echo $row['numero'] ?></td>
                                        <td><?php echo $row['usuario'] ?></td>
                                        <td><?php echo $row['senha'] ?></td>
                                        <td><?php echo $row['descricao'] ?></td>
                                        <td> <a href="#">Editar </a> | <a href="#" id="deletar">    Apagar</a></td>
                                        <!-- <td>1265</td>
                                        <td>32.3%</td>
                                        <td>$321.33</td> -->
                                    </tr>
                                    <?php
                                      } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
