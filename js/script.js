jQuery(document).ready(function() {

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
        console.log('cont');
        jQuery('html, body').animate( {
            scrollTop: jQuery(document).height()
        }, 600);
    }); 

    
})