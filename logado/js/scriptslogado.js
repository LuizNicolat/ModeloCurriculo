$(document).ready(function() {




  })

  // jQuery('#deletar').click(function(){
  //     var codigouser = jQuery('#codigouser').text();
  //
  //     alert(codigouser);
  // })

  $("#deletar").one("click", function() {
    var codigouser = jQuery('#codigouser').text();
$(this).unbind('click');
    alert(codigouser);
})
