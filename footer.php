<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chabadworks
 */

?>

	<footer id="colophon" class="site-footer text-center text-white">
		<div class="container">
      <!-- <div class="social-block">
        <a href="#" class="mx-2"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" class="mx-2"><i class="fa-brands fa-twitter"></i></a>
        <a href="#" class="mx-2"><i class="fa-brands fa-instagram"></i></a>
      </div> -->
			Copyright © 2023 ChabadWorks - U.S.A. All Rights Reserved.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
  <script>
     $(document).ready(function(){
    $('.testimonial').owlCarousel({
        items: 1,         // Display one testimonial at a time
        loop: true,       // Enable loop
        nav: true,       // Disable navigation
        dots: false,      // Disable dots
        autoplay: true,   // Enable autoplay
        autoplayTimeout: 5000, // Autoplay interval in milliseconds
    });
});

    </script>
	
<script>
  jQuery(document).ready(function($) {
  $('.packges-list').addClass('owl-carousel');
  $('.packges-list').owlCarousel({
    loop: false, // No loop
    margin: 10,
    nav: true, // Show navigation
    autoHeight : false,
    responsive: {
      0: {
        items: 1 // 1 item when the window width is >= 0px
      },
      600: {
        items: 1 // 1 item when the window width is >= 600px
      },
	  800: {
        items: 2 // 1 item when the window width is >= 600px
      },
      1038: {
        items: 3 // 3 items when the window width is >= 1000px
      },
      1200: {
        items: 4 // 4 items when the window width is >= 1200px
      }
    }
  });
});

</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    showDiv(1);
  });
  
  function showDiv(n) {
    // Remove 'active' class from all divs and hide them
    for(let i = 1; i <= 4; i++) {
      let div = document.getElementById("div" + i);
      div.style.display = "none";
      div.classList.remove("active");
    }
  
    // Show the selected div
    let div = document.getElementById("div" + n);
    div.style.display = "block";
    
    let text = document.getElementById("shape" + n);
    let rect = text.getBoundingClientRect();
  
    // Set the position of the div based on the text
    if (n === 1 || n === 4) {
      div.style.left = rect.left - 200 + "px"; // appear on the left
    } else {
      div.style.left = rect.left + rect.width + "px"; // appear on the right
    }
  
    // If it's Text 4, make it appear above
    if (n === 4) {
      div.style.top = rect.top - div.offsetHeight - 10 + "px";
    } else {
      div.style.top = rect.top + "px";
    }
  
    // Add a slight delay to trigger the CSS transition
    setTimeout(() => div.classList.add("active"), 10);
  }
  
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
