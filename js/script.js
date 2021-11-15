jQuery(document).ready(function() {

    ScrollReveal().reveal('.casa', { distance: '80px', duration: 600, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 300});

    //NAVBAR after scrolling
    jQuery(window).on("scroll", function() {
        if(jQuery(this).scrollTop() > 100) {
            jQuery("nav").addClass("scrolled");
        } else {
           jQuery("nav").removeClass("scrolled");
        }
    });


    jQuery('#contatti').on('click', function(e){
        e.preventDefault();
        jQuery('html, body').animate( {
            scrollTop: jQuery(document).height()
        }, 600);
    }); 

    
})