jQuery(document).ready(function() {

    //NAVBAR after scrolling
    jQuery(window).on("scroll", function() {
        if(jQuery(this).scrollTop() > 400) {
            jQuery("nav").addClass("scrolled");
        } else {
           jQuery("nav").removeClass("scrolled");
        }
    });

    
})