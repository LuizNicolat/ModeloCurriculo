$(document).ready(function() {

  $("#editUser").click(function(){
    //alert("teste");
    $("#page-wrapper").overhang({
      type: "error",
      message: "Usuario já existe",
      duration: 3
    });

  });

  $( "#usuario" ).blur(function() {
    var textouser = jQuery(this).val();
    if( textouser != '') {
      jQuery.ajax({
        type: "POST",
        url: "./inc/functionslogado.php?a=verificauser",
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


})
//fim do ready
