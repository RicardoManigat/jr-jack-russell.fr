/*!
 * Start Bootstrap - Grayscale Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery to collapse the navbar on scroll


// jQuery for page scrolling feature - requires jQuery Easing plugin



// Google Maps Scripts



$(document).ready(function(){
$(".merci").hide();
  $('#submit').click(function(){
      var email = $("#email").val();
      $.post( "save.php", { email: email})
      .done(function( data ) {
        $("#miniform").slideUp("fast");
        $(".merci").slideDown("slow");
      });
  })  
});