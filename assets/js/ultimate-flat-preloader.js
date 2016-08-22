jQuery(document).ready(function(){
	jQuery( 'body' ).append( '<div class="site-preloader"></div>' )
})

 // Wait for window load
 jQuery(window).load(function() {
    // Animate loader off screen
    jQuery(".site-preloader").fadeOut("slow");

 });
