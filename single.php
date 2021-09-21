<!------------------------------------------------------
    THIS IS THE TEMPLATE FOR DISPLAY ANY SINGLE DINAMIC POST (che sarebbero gli articoli)
------------------------------------------------------->
<?php get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
    ?>

    <div class="container">
        <?php the_content(); ?>
    </div>
    <?php
    }
}
get_footer(); ?>