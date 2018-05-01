$(document).ready(function() {

  jQuery('#datanasc').datepicker({
//        minDate: '-100Y',
//        maxDate: '-18Y',
   changeMonth: true,
   changeYear: true,
    yearRange: "1900:2019"
  });


  jQuery.datepicker.setDefaults($.extend(
  jQuery.datepicker.regional[ 'pt-BR' ])
);
jQuery( '#datanasc' ).datepicker({
  beforeShow: function(input) {
    jQuery( input ).css( 'background-color', '#ff9' );
  },
  onSelect: function(dateText, inst) {
    jQuery( this ).css( 'background-color', '' );
  },
//      onClose: function(dateText, inst) {
//        jQuery( this ).css( 'background-color', '' );
//      }
});

document.getElementById('cpf').addEventListener('keydown', function(e) {
    var key   = e.keyCode ? e.keyCode : e.which;

    if (!( [8, 9, 13, 27, 46, 110, 190].indexOf(key) !== -1 ||
         (key == 65 && ( e.ctrlKey || e.metaKey  ) ) ||
         (key >= 35 && key <= 40) ||
         (key >= 48 && key <= 57 && !(e.shiftKey || e.altKey)) ||
         (key >= 96 && key <= 105)
       )) e.preventDefault();
});

//verifica tamanho do input a cada tecla pressionada
// $( "#cpf" ).keypress(function() {
//   if($(this).val().length > 14) {
//       //alert("excedeu");
//       $("body").overhang({
//       type: "error",
//       message: "CPF excede o máximo de caracteres.",
//       duration: 2,
//       callback: function () {
//           $('#insertUser').prop('disabled', true);
//         }
//       });
//   } else {
//        // Disable submit button
//   }
// });

  $("#delUser").click(function(){
    var id = jQuery('#id').val();
    var nome = jQuery('#nome').val();

    var msgdel = 'Deseja mesmo excluir o usuário '+nome+'?';

    $("body").overhang({
      type: "confirm",
      message: msgdel,
      overlay: true,
      yesMessage: "Sim",
      noMessage: "Não",
      overlayColor: "#c9ced6",
      callback: function (value) {
        if (value) {
          jQuery.ajax({
              type: "POST",
              url: "../logado/inc/functionslogado.php?a=deletaruser",
              data: "id="+id,
              success: function(mensagem){
                if (mensagem == 1) {
                  $("body").overhang({
                    type: "success",
                    message: "Excluído com sucesso.",
                    closeConfirm: "false",
                    duration: 3
                  })
                  setTimeout(function() {   //calls click event after a certain time
                     window.location = "./indexadmin.php?form=listauser";
                  }, 4000);

                } else {
                  $("body").overhang({
                  type: "error",
                  message: "Erro ao excluir."+  mensagem,
                  duration: 5
                  });
                }

              }
          });
        } else {
          $("body").overhang({
          type: "error",
          message: "Certo, nada deletado.",
          duration: 5
          });
        }
      }
    });
  });

  $("#editUser").click(function(){
    $(function(){
      var id = jQuery('#id').val();
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

      var nivel_acesso = jQuery('#permit').val();
      if (nivel_acesso == 'Administrador') {
        nivel_acesso = 1;
      } else if (nivel_acesso == 'Usuário') {
        nivel_acesso = 2;
      };

      alert(nivel_acesso);
      jQuery.ajax({
          type: "POST",
          url: "../logado/inc/functionslogado.php?a=alterar",
          data: "id="+id+"&nome="+nome+"&sobrenome="+sobrenome+"&nascimento="+ nascimento+"&cep="+cep+"&cpf="+cpf+"&logradouro="+ logradouro+"&bairro="+ bairro+"&localidade="+ localidade+"&uf="+ uf+"&ibge="+ ibge+"&numero="+ numero+"&usuario="+ usuario+"&senha="+ senha+"&nivel_acesso="+ nivel_acesso,
          success: function(mensagem){
            if (mensagem == 1) {
              $("body").overhang({
                type: "success",
                message: "Atualizado com sucesso.",
                closeConfirm: "false",
                duration: 3
              })
              setTimeout(function() {   //calls click event after a certain time
                 window.location = "./indexadmin.php?form=listauser";
              }, 4000);

            } else {
              $("body").overhang({
              type: "error",
              message: "Erro ao atualizar o cadastro"+  mensagem,
              duration: 5
              });
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

  // Partes relativas ao cadastro
  $( "#usuario" ).blur(function() {
    var textouser = jQuery(this).val();

    //alert(textouser);
    if( textouser != '') {
      jQuery.ajax({
        type: "POST",
        url: "../inc/functions.php?a=verificauser",
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

  jQuery( "#insertUser" ).click(function() {
    $(function(){
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

      var permissao = jQuery('#permit').val();

      if (permissao == 'Administrador') {
        permissao = 1;
      } else if (permissao == 'Usuário') {
        permissao = 2;
      }

      jQuery.ajax({
          type: "POST",
          url: "../inc/functions.php?a=inserir",
          data: "nome="+nome+"&sobrenome="+sobrenome+"&nascimento="+ nascimento+"&cep="+cep+"&cpf="+cpf+"&logradouro="+ logradouro+"&bairro="+ bairro+"&localidade="+ localidade+"&uf="+ uf+"&ibge="+ ibge+"&numero="+ numero+"&usuario="+ usuario+"&senha="+ senha+"&nivel_acesso="+ permissao,
          success: function(mensagem){
            if (mensagem == 1) {
              $("body").overhang({
                type: "success",
                message: "Cadastrado com sucesso.",
                closeConfirm: "false",
                duration: 3
              })
            } else {
              $("body").overhang({
              type: "error",
              message: "Erro ao cadastrar. Erro:" + mensagem,
              closeConfirm: "false",
              duration: 3
              });
              //
              // alert(mensagem);
            }

          }
      });
    });
  });

})//fim do ready
