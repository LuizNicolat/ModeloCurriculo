
//partes do objetivos

// $( "#comment" ).keyup(function() {
//   alert( "Handler for .keyup() called." );
// });
$("#comment").keyup(function(){
      var textoobjetivo = jQuery('#comment').val().length;
      //var len = textoobjetivo.value.length;
      //alert(len);
      if (textoobjetivo >= 5000) {
        val.value = val.value.substring(0, 5000);
      } else {
        $('#numchar').text(5000 - textoobjetivo);
      }
});

jQuery( "#cadobjetivo" ).click(function() {
  alert( "Handler for .keyup() called." );
});
