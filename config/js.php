<?php
	//Javascript

?>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- jQeury UI-->
<script src= "http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	


</script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})
</script>


<script type="text/javascript">
//for navigation
      (function($){
        $(document).ready(function(){
            $('.navbar').show();
            $(function(){
              $(window).scroll(function(){
                  if($(this).scrollTop() > 50) {
                    $('.navbar').fadeOut();
                  }else {
                    $('.navbar').fadeIn();
                  }
              });
            });
      });
      }(jQuery));
    </script>

