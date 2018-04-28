$(document).ready(function() {

  $("#editUser").click(function(){
    $(function(){
      var nome = jQuery('#id').val();
      var nome = jQuery('#nome').val();
      var sobrenome = jQuery('#sobrenome').val();
      var nascimento = jQuery('#datepicker').val();
      var cep = jQuery('#cep').val();
      var cpf = jQuery('#cpf').val();
      var logradouro = jQuery('#rua').val();
      var bairro = jQuery('#bairro').val();
      var localidade = jQuery('#cidade').val();
      var uf = jQuery('#uf').val();
      var ibge = jQuery('#ibge').val();
      var numero = jQuery('#numero').val();

      var usuario = jQuery('#usuario').val();
      var senha = jQuery('#senha').val();

      jQuery.ajax({
          type: "POST",
          url: "../logado/inc/functionslogado.php?a=alterar",
          data: "id="+id+"&nome="+nome+"&sobrenome="+sobrenome+"&nascimento="+ nascimento+"&cep="+cep+"&cpf="+cpf+"&logradouro="+ logradouro+"&bairro="+ bairro+"&localidade="+ localidade+"&uf="+ uf+"&ibge="+ ibge+"&numero="+ numero+"&usuario="+ usuario+"&senha="+ senha,
          success: function(mensagem){
            if (mensagem == 1) {
              $("body").overhang({
                type: "success",
                message: "Atualizado com sucesso.",
                closeConfirm: "false",
                duration: 3,
                callback: window.location = "./logado/indexadmin.php"
              })
            } else {
              $("body").overhang({
              type: "error",
              message: "Erro ao atualizar o cadastro"+ mensagem,
              duration: 15
              });
              //
              alert(mensagem);
            }

          }
      });
    });

  });

  $( "#usuario" ).blur(function() {
    var textouser = jQuery(this).val();
    if( textouser != '') {
      jQuery.ajax({
        type: "POST",
        url: "../inc/functionslogado.php?a=verificauser",
        data: "usuario="+textouser,
        success: function(mensagem){
          if (mensagem == 0) {
            $("body").overhang({
              type: "error",
              message: "Usuario já existe",
              duration: 3,
              callback: function () {
                  $( "#usuario" ).val('');
                  $( "#usuario" ).focus();
                }
            });
          } else{
            $("body").overhang({
              type: "success",
              message: "Usuário "+textouser+" disponível!",
              duration: 4
              });
          }
        }
      });
    }
  });

  $( "#cpf" ).blur(function() {
    var cpf = jQuery('#cpf').val();

    if( cpf != '') {
      jQuery.ajax({
        type: "POST",
        url: "../inc/functions.php?a=verificacpf",
        data: "cpf="+cpf,
        success: function(mensagem){
          if (mensagem == 1) {
            $("body").overhang({
              type: "error",
              message: "CPF informado já existe no banco de dados.",
              duration: 3
            });
          }
          // else {
          //   $("body").overhang({
          //     type: "success",
          //     message: "CPF "+cpf+" disponível!",
          //     duration: 4
          //     });
          // }
        }
      });
    }
  });


})
//fim do ready
