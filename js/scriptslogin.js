jQuery(document).ready(function () {

  $( "#password" ).blur(function() {
    var password = jQuery(this).val();

    jQuery.ajax({
      type: "POST",
      url: "inc/functions.php?a=criptografasenha",
      data: "password="+password,
      success: function(mensagem){
        if (mensagem == 0) {
          $("body").overhang({
            type: "error",
            message: "Erro ao criptografar a senha.",
            duration: 3,
            callback: function () {
                $( "#usuario" ).val('');
                $( "#usuario" ).focus();
              }
          });
        } else{
          $("body").overhang({
            type: "success",
            message: "Criptografado com sucesso! "+mensagem,
            duration: 4
            });
            textouser = '';
        }
      }
    });
    });
  });
