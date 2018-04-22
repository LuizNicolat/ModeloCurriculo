jQuery(document).ready(function () {

  // $( "#password" ).blur(function() {
  //   var password = jQuery(this).val();
  //
  //   jQuery.ajax({
  //     type: "POST",
  //     url: "inc/functions.php?a=criptografasenha",
  //     data: "password="+password,
  //     success: function(mensagem){
  //       if (mensagem == 0) {
  //         $("body").overhang({
  //           type: "error",
  //           message: "Erro ao criptografar a senha.",
  //           duration: 3,
  //           callback: function () {
  //               $( "#usuario" ).val('');
  //               $( "#usuario" ).focus();
  //             }
  //         });
  //       } else{
  //         $("body").overhang({
  //           type: "success",
  //           message: "Criptografado com sucesso! "+mensagem,
  //           duration: 4
  //           });
  //           textouser = '';
  //       }
  //     }
  //   });
  //   });

  jQuery( "#login" ).click(function() {
    var usuario = jQuery('#username').val();
    var senha = jQuery('#password').val();

    jQuery.ajax({
        type: "POST",
        url: "inc/functions.php?a=login",
        data: "username="+ usuario+"&password="+ senha,
        success: function(mensagem){
          if (mensagem == 1) {
            $("body").overhang({
              type: "error",
              message: "Erro ao efetuar login." + mensagem,
              closeConfirm: "false",
              duration: 3
            })
          } else {
            window.location = "./curriculosample.php";
          }
        }
    });
  });

  });
