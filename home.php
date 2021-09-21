<!------------------------------------------------------
    THIS IS THE BLOG PAGE
------------------------------------------------------->
<?php get_header(); ?>

    <div class="container pb-s pt-s" >

        <div class="row subpage-hero mb-xxl">
            <div class="col-12 col-lg-6 subpage-hero__text">
                    <p class="overtitle">Dough Academy</p> 
                    <h1 class="mb-m">Blog</h1>
                    <p>
                        P here. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu viverra diam, nec maximus est. Vestibulum condimentum turpis id ipsum volutpat, non gravida leo consequat. Sed mi libero, rutrum in maximus aliquet, sollicitudin nec nunc. Vestibulum vulputate diam vitae lobortis tempus.
                    </p> 
            </div>
            <div class="col-12 col-lg-6 subpage-hero__img d-sm-none d-lg-flex">
                <picture style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/ph(2).jpg')">

                </picture>
            </div>
        </div>

        <div class="row">
 
            <?php $sticky = get_option( 'sticky_posts' );
                rsort( $sticky );
                $args = array(
                    'post__in' => $sticky,
                    'posts_per_page' => 1
                );
                $sticky_query = new WP_Query( $args );
                while ( $sticky_query->have_posts() ) : $sticky_query->the_post(); ?>

                    <div class="col-12 col-lg-6 mb-xxl">
                        <article>
                            <a href="<?php the_permalink(); ?>"><picture class="article__picture mb-m"><?php the_post_thumbnail(); ?></picture></a>
                            <a href="<?php the_permalink(); ?>"><h2 class="article__title mb-s"><?php the_title(); ?></h2></a>
                            <p class="article__excerpt p-little mb-m"><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="link article__link">Leggi</a>
                        </article>
                    </div>
                    
                <?php endwhile;
                wp_reset_postdata();
            ?>

        </div>



  

        <div class="row">

            <?php $sticky = get_option( 'sticky_posts' );
                rsort( $sticky );
                $args = array(
                    'post__not_in' => $sticky,
                );
                $sticky_query = new WP_Query( $args );
                while ( $sticky_query->have_posts() ) : $sticky_query->the_post(); ?>

                    <div class="col-12 col-lg-6 mb-xxl">
                        <article>
                            <a href="<?php the_permalink(); ?>"><picture class="article__picture mb-m"><?php the_post_thumbnail(); ?></picture></a>
                            <a href="<?php the_permalink(); ?>"><h2 class="article__title mb-s"><?php the_title(); ?></h2></a>
                            <p class="article__excerpt p-little mb-m"><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="link article__link">Leggi l'articolo</a>
                        </article>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            ?>
    
        </div>

    </div> <!--container-->

<?php get_footer(); ?>


