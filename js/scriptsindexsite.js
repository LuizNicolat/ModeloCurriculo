jQuery(document).ready(function () {


      jQuery('#datepicker').datepicker({
//        minDate: '-100Y',
//        maxDate: '-18Y',
       changeMonth: true,
       changeYear: true,
        yearRange: "1900:2019"
      });


      jQuery.datepicker.setDefaults($.extend(

      jQuery.datepicker.regional[ 'pt-BR' ])
    );
    jQuery( '#datepicker' ).datepicker({
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

    var iCnt = 2;
    $( "#target" ).click(function() {

      var clonedDiv = $('#formacao1').clone();
      clonedDiv.attr("id", "formacao" + iCnt);
      alert("formacao"+iCnt);
      $('#formacao1').after(clonedDiv);
        iCnt = iCnt+1;
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

        jQuery.ajax({
            type: "POST",
            url: "inc/functions.php?a=inserir",
            data: "nome="+nome+"&sobrenome="+sobrenome+"&nascimento="+ nascimento+"&cep="+cep+"&cpf="+cpf+"&logradouro="+ logradouro+"&bairro="+ bairro+"&localidade="+ localidade+"&uf="+ uf+"&ibge="+ ibge+"&numero="+ numero,
            success: function(mensagem){
              if (mensagem == 1) {
                $("body").overhang({
                  type: "success",
                  message: "Cadastrado com sucesso.",
                  closeConfirm: "true",
                  duration: 3
                });
              } else {
                $("body").overhang({
                type: "error",
                message: "Erro ao cadastrar, entre em contato com o suporte.",
                closeConfirm: "true",
                duration: 3
                });
              }

            }
        });
        //alert(localidade );
        //alert(nome + ' ' +sobrenome + ' ' + nascimento + ' ' + cep + ' ' + logradouro + ' ' + bairro + ' ' + localidade + ' ' + uf + ' ' + ibge + ' ' + numero );
      });

    });

    jQuery( "#testapopup" ).click(function() {

    });

    $( "#usuario" ).blur(function() {
      var textouser = jQuery(this).val();
      if( textouser != '') {
        jQuery.ajax({
          type: "POST",
          url: "inc/functions.php?a=verificauser",
          data: "usuario="+textouser,
          success: function(mensagem){
            if (mensagem == 1) {
              $("body").overhang({
                type: "error",
                message: "Usuario já existe",
                closeConfirm: "true",
                duration: 3
              });
            }
          }
        });
      }
    });
//    jQuery('#imgcv').change( function(event) {
//var tmppath = URL.createObjectURL(event.target.files[0]);
//    jQuery(".avatar").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
//});

//    jQuery(document).on('click', '.browse', function(){
//      var file = jQuery(this).parent().parent().parent().find('.file');
//      file.trigger('click');
//    });
//    jQuery(document).on('change', '.file', function(){
//      jQuery(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
//        $('.avatar').attr('src', file);
//    });

    // var iCnt = 2;
    // $( "#target" ).click(function() {
    //
    //         $('#formacao')
    //             .clone().val('')      // CLEAR VALUE.
    //             .attr('id', 'formacao' + iCnt)     // GIVE IT AN ID.
    //             .appendTo("#formacao");
    //     iCnt = iCnt+1;
    // });
});
