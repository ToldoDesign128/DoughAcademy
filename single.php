<!------------------------------------------------------
    THIS IS THE TEMPLATE FOR DISPLAY ANY SINGLE DINAMIC POST (che sarebbero gli articoli)
------------------------------------------------------->
<?php get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
    ?>

    <div class="container pb-s pt-m">
        <h1 class="single-post-h1"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
    
    <?php
    }
}
get_footer(); ?>