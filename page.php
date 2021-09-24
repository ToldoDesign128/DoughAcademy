<!------------------------------------------------------
    THIS IS THE TEMPLATE FOR DISPLAY ANY SINGLE STATIC POST (che sarebbero le pagine)
------------------------------------------------------->
<?php get_header(); ?>
    
    <?php if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>

            <div class="container pb-s pt-m">
                    <?php the_content(); ?>
            </div>
            
            <?php
        }
    }?>

<?php get_footer(); ?>