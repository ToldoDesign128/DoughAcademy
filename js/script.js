
//ScrollReveal().reveal('.casa', { distance: '80px', duration: 1000, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 600  });


jQuery(document).ready(function() {

    ScrollReveal().reveal('.casa', { distance: '80px', duration: 800, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 400});

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