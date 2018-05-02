
//partes do objetivos

// $( "#comment" ).keyup(function() {
//   alert( "Handler for .keyup() called." );
// });
$("#comment").keyup(function(){
      var tamanhoobjetivo = jQuery('#comment').val().length;
      var textoobjetivo= jQuery('#comment').val();
      //var len = textoobjetivo.value.length;
      //alert(textoobjetivo);
      if (tamanhoobjetivo >= 5000) {
        $('#cadobjetivo').prop('disabled', true);
        $('#numchar').text("Excedeu 5000 caracteres");
        // textoobjetivo = textoobjetivo.substring(0, 5000);
        // jQuery('#comment2').text(textoobjetivo);
      } else {
        $('#cadobjetivo').prop('disabled', false);
        var result = $('#numchar').text(5000 - tamanhoobjetivo);
        if (result <= 1) {
        alert(result);
        }
      }
});

jQuery( "#cadobjetivo" ).click(function() {
      var idusuario = jQuery('#cadobjetivo').attr("idusuario");
      var textoobjetivo= jQuery('#comment').val();
      //alert(idusuario + "  --  "+textoobjetivo);
  jQuery.ajax({
      type: "POST",
      url: "./inc/functionslogado.php?a=inserirObjetivo",
      data: "idusuario="+idusuario+"&textoobjetivo="+textoobjetivo,
      success: function(mensagem){
        if (mensagem == 1) {
          $("body").overhang({
            type: "success",
            message: "Cadastrado com sucesso.",
            closeConfirm: "false",
            duration: 3
          })
          $('.juntaojbcad').fadeOut('slow', function(){
              $('.juntaojbcad').load(`../logado/atualizaobjetivos.php`, function(){
                  $('.juntaojbcad').fadeIn('slow');
              });
          });
          //$('.juntaojbcad').load(`../logado/atualizaobjetivos.php`);

        } else {
          //alert(mensagem);
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

$( "#deletarobj" ).click(function() {
    alert("Deu");
  }
);
