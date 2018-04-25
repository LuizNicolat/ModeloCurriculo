jQuery(document).ready(function () {

      $('#insertUser').prop('disabled', true);

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

        var usuario = jQuery('#usuario').val();
        var senha = jQuery('#senha').val();

        jQuery.ajax({
            type: "POST",
            url: "../inc/functions.php?a=inserir",
            data: "nome="+nome+"&sobrenome="+sobrenome+"&nascimento="+ nascimento+"&cep="+cep+"&cpf="+cpf+"&logradouro="+ logradouro+"&bairro="+ bairro+"&localidade="+ localidade+"&uf="+ uf+"&ibge="+ ibge+"&numero="+ numero+"&usuario="+ usuario+"&senha="+ senha,
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

    jQuery( "#testapopup" ).click(function() {
      jQuery('#nome').val()='';
      jQuery('#sobrenome').val()='';
      jQuery('#datepicker').val()='';
      jQuery('#cep').val()='';
      jQuery('#cpf').val()='';
      jQuery('#rua').val()='';
      jQuery('#bairro').val()='';
      jQuery('#cidade').val()='';
      jQuery('#uf').val()='';
      jQuery('#ibge').val()='';
      jQuery('#numero').val()='';
    });

    $( "#usuario" ).blur(function() {
      var textouser = jQuery(this).val();

      //alert(textouser);
      if( textouser != '') {
        jQuery.ajax({
          type: "POST",
          url: "./inc/functions.php?a=verificauser",
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

    $( "#confsenha" ).blur(function() {
      var senha = jQuery('#senha').val();
      var conferesenha = jQuery('#confsenha').val();
      if (senha == '' || conferesenha == '') {

        $("body").overhang({
          type: "error",
          message: "Campos senha e confirmação de senha devem estar preenchidos.",
          duration: 3
        });

      } else if (senha != conferesenha) {

        $("body").overhang({
          type: "error",
          message: "Senhas não conferem!",
          duration: 3
        });

        $('#insertUser').prop('disabled', true);
      } else if (senha == conferesenha){
        $('#insertUser').prop('disabled', false);
      }
    });

    $('.menuobj').click(function(){

      $(".dadospessoais").fadeOut(500);//post code
      $(".dadosobjetivo").fadeIn(1500);
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
});

function limpacampos(){
  jQuery('#nome').val()='';
  jQuery('#sobrenome').val()='';
  jQuery('#datepicker').val()='';
  jQuery('#cep').val()='';
  jQuery('#cpf').val()='';
  jQuery('#rua').val()='';
  jQuery('#bairro').val()='';
  jQuery('#cidade').val()='';
  jQuery('#uf').val()='';
  jQuery('#ibge').val()='';
  jQuery('#numero').val()='';
};
