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
        
            $('#formacao')
                .clone().val('')      // CLEAR VALUE.
                .attr('id', 'formacao' + iCnt)     // GIVE IT AN ID.
                .appendTo("#formacao");
        iCnt = iCnt+1;
    });
});