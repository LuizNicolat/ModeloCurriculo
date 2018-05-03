jQuery( "#cadoexperiencia" ).click(function() {
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

$(document).on('click', '#deletarobj', function(){
  var idusuario = jQuery('.objdesc').attr("idusuario");
  var idobjetivo = jQuery(this).attr('codObjetivo');
    //alert("Usuário: "+idusuario +"/ Cód Objetivo: "+idobjetivo);
    jQuery.ajax({
        type: "POST",
        url: "./inc/functionslogado.php?a=deletarObjetivo",
        data: "idusuario="+idusuario+"&idobjetivo="+idobjetivo,
        success: function(mensagem){
          if (mensagem == 1) {
            $("body").overhang({
              type: "success",
              message: "Deletado com sucesso.",
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
            message: "Erro ao deletar. Erro:" + mensagem,
            closeConfirm: "false",
            duration: 3
            });
            //
            // alert(mensagem);
          }

        }
    });
});
