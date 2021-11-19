<!------------------------------------------------------
    THIS IS THE BLOG PAGE
------------------------------------------------------->
<?php get_header(); ?>

    <div class="container pb-s pt-l" >

        <div class="row subpage-hero mb-xxl">
            <div class="col-12 col-lg-6 subpage-hero__text">
                    <p class="overtitle">Dough Academy</p> 
                    <h1 class="mb-m">Blog</h1>
                    <br>
                    <p>Articoli, storie e ricette per restare sempre aggiornato sul mondo della pizza e dell'impasto.</p>
                    <a class="link mt-m" href="<?php echo get_post_permalink( 389 ); ?>">Iscriviti alla newsletter</a> 
            </div>
            <div class="col-12 col-lg-6 subpage-hero__img d-sm-none d-lg-flex">
                <picture style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Dough_Academy_pizza_napoletana.jpg')">
                </picture>
            </div>
        </div>


        <?php $sticky = get_option( 'sticky_posts' );
            rsort( $sticky );
            $args = array(
                'post__in' => $sticky,
                'posts_per_page' => 1
            );
            $sticky_query = new WP_Query( $args );
            while ( $sticky_query->have_posts() ) : $sticky_query->the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="row mb-xxl card sticky_post no-dec">

                        <div class="col-12 col-lg-6  no-p mb-m sticky_post_img">
                            <picture class="article__picture mb-m"><?php the_post_thumbnail(); ?></picture>
                        </div>   

                        <div class="col-12 col-lg-6 no-p ">
                            <div class="flex-center">
                                <h2 class="article__title mb-s"><?php the_title(); ?></h2>
                                <div class="no-flex">
                                    <p class="article__excerpt p-little mb-m"><?php echo get_the_excerpt(); ?></p>
                                    <p class="link article__link">Leggi</p>
                                </div>
                            </div>
                        </div>

                    </a>
       
                
            <?php endwhile;
            wp_reset_postdata();
        ?>



        <div class="row">

            <?php $sticky = get_option( 'sticky_posts' );
                rsort( $sticky );
                $args = array(
                    'post__not_in' => $sticky,
                );
                $sticky_query = new WP_Query( $args );
                while ( $sticky_query->have_posts() ) : $sticky_query->the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="col-12 col-lg-6 mb-xxl no-dec">
                        <article class="card casa">
                            <div class="flex-top">
                                <picture class="article__picture mb-m"><?php the_post_thumbnail(); ?></picture>
                                <h2 class="article__title mb-s"><?php the_title(); ?></h2>
                            </div>
                            <div class="flex-bottom">
                                <p class="article__excerpt p-little mb-m"><?php echo get_the_excerpt(); ?></p>
                                <p class="link article__link">Leggi l'articolo</p>
                            </div>
                        </article>
                    </a>

                <?php endwhile;
                wp_reset_postdata();
            ?>
    
        </div>


        <!--Fascia in evidenza-->
        <section class="fascia-evidenza fascia-evidenza__dark mb-xxl">
            <div class="row t-center">
                <div class="col-12">
                    <h2 class="mb-l">Pronto a iniziare</h2>
                    <p>
                        Il buon pane, la pizza e le focacce hanno il profumo di casa, di domeniche in famiglia e con gli amici.
                        Prepararsi la pizza in casa è un piacere, un momento da dedicare a se stessi e da condividere con le persone a cui si vuole bene.
                        <br><br>
                        La pizza è passione e studio, è voglia di mettersi in gioco, di migliorarsi e di imparare con costanza e amore. <br>
                        Dough Academy è tutto questo.
                    </p> 
                </div>
                <div class="col-12">
                    <a class="btn mt-l casa" href="<?php echo get_post_permalink( 109 ); ?>">Scopri i corsi</a>
                </div>
                <div class="col-12">
                    <a class="link mt-m" id="contatti" href="#">Contattami</a> 
                </div>
            </div>
        </section>


        <!--Social bar-->
        <section class="social-bar">
            <div class="row t-center mb-xxl">
                <div class="col-12">
                    <h2 class="mb-s">#Dough Academy</h2>
                    <div class="row justify-content-center">
                        <div class="col-3 col-lg-2 casa">
                            <!--Facebook-->
                            <a href="<?php echo get_theme_mod("XY_social_facebook"); ?>" target="_blank">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="22" cy="22" r="22" class="svg-social-icon-bg"/>
                                    <path class="svg-social-icon" d="M18.4213 14.6507V17.952H16V22H18.4213V34H23.3973V22H26.7307C26.7307 22 27.0453 20.0587 27.1947 17.9413H23.4133V15.1733C23.4588 14.9169 23.5882 14.6828 23.7814 14.508C23.9745 14.3332 24.2203 14.2277 24.48 14.208H27.1893V10H23.5147C18.2987 10 18.4213 14.0427 18.4213 14.6507Z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="col-3 col-lg-2 casa">
                            <!--Instagram-->
                            <a href="<?php echo get_theme_mod("XY_social_instagram"); ?>" target="_blank">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="22" cy="22" r="22" class="svg-social-icon-bg"/>
                                    <path class="svg-social-icon" d="M22.0214 12.1425C25.2271 12.1425 25.6118 12.1425 26.878 12.2119C27.6406 12.2194 28.3961 12.3586 29.1113 12.6233C29.6341 12.8174 30.1069 13.1259 30.4951 13.5263C30.8954 13.9135 31.2024 14.3867 31.3927 14.9101C31.6595 15.623 31.8005 16.3768 31.8094 17.138C31.8682 18.4096 31.8789 18.789 31.8789 22C31.8789 25.211 31.8789 25.585 31.8094 26.8566C31.8005 27.6178 31.6595 28.3717 31.3927 29.0846C31.1951 29.6044 30.8896 30.0765 30.4964 30.4697C30.1032 30.8629 29.6311 31.1684 29.1113 31.366C28.3984 31.6328 27.6445 31.7738 26.8833 31.7827C25.6118 31.8415 25.2324 31.8522 22.0214 31.8522C18.8103 31.8522 18.431 31.8522 17.1647 31.7827C16.4019 31.773 15.6464 31.632 14.9314 31.366C14.4086 31.1745 13.9357 30.8677 13.5476 30.4684C13.1502 30.0789 12.8437 29.6063 12.65 29.0846C12.3853 28.3694 12.2461 27.6139 12.2386 26.8513C12.1799 25.585 12.1638 25.2004 12.1638 21.9947C12.1638 18.789 12.1638 18.4043 12.2386 17.138C12.2474 16.3756 12.3865 15.6202 12.65 14.9047C12.8437 14.383 13.1502 13.9104 13.5476 13.5209C13.9357 13.1216 14.4086 12.8148 14.9314 12.6233C15.6464 12.3573 16.4019 12.2163 17.1647 12.2066C18.431 12.1532 18.8157 12.1371 22.0214 12.1371V12.1425ZM22.0214 10C18.7569 10 18.3508 10 17.0686 10.0748C16.0711 10.0858 15.0828 10.2664 14.146 10.6091C13.3411 10.9086 12.6116 11.381 12.0089 11.9929C11.3948 12.5938 10.9221 13.3238 10.6251 14.13C10.2804 15.0663 10.0997 16.0549 10.0908 17.0525C10.016 18.3188 10 18.7302 10 21.9947C10 25.2591 10 25.6705 10.0748 26.9528C10.0886 27.9482 10.2692 28.9343 10.6091 29.87C10.9102 30.6754 11.3844 31.4049 11.9982 32.0071C12.6004 32.6209 13.3299 33.0951 14.1354 33.3963C15.0711 33.7359 16.0571 33.9165 17.0525 33.9305C18.3348 33.984 18.7462 34 22.0107 34C25.2752 34 25.6866 34 26.9688 33.9305C27.9643 33.917 28.9504 33.7364 29.886 33.3963C30.6843 33.087 31.4092 32.6146 32.0146 32.0092C32.6199 31.4039 33.0923 30.6789 33.4016 29.8807C33.7413 28.9449 33.9219 27.9589 33.9359 26.9635C33.9893 25.6812 34.0053 25.2698 34.0053 22.0053C34.0053 18.7409 34.0053 18.3348 33.9359 17.0525C33.9218 16.0554 33.7412 15.0676 33.4016 14.13C33.1005 13.3246 32.6263 12.5951 32.0125 11.9929C31.4098 11.381 30.6803 10.9086 29.8753 10.6091C28.9403 10.2668 27.9538 10.0862 26.9581 10.0748C25.6759 10.016 25.2645 10 22 10H22.0214Z"/>
                                    <path class="svg-social-icon" d="M22.0214 15.8237C20.7994 15.8227 19.6045 16.1841 18.588 16.8624C17.5715 17.5407 16.7791 18.5052 16.3109 19.634C15.8428 20.7628 15.72 22.0051 15.9582 23.2037C16.1963 24.4023 16.7847 25.5033 17.6488 26.3674C18.5128 27.2315 19.6139 27.8198 20.8124 28.0579C22.011 28.2961 23.2533 28.1733 24.3821 27.7052C25.5109 27.2371 26.4755 26.4446 27.1537 25.4281C27.832 24.4116 28.1934 23.2167 28.1924 21.9947C28.1931 21.1841 28.0339 20.3814 27.7241 19.6323C27.4142 18.8833 26.9597 18.2028 26.3865 17.6296C25.8133 17.0564 25.1328 16.6019 24.3838 16.292C23.6348 15.9822 22.832 15.823 22.0214 15.8237ZM22.0214 26.0018C21.2289 26.0018 20.4541 25.7668 19.7952 25.3265C19.1362 24.8862 18.6226 24.2604 18.3193 23.5282C18.016 22.796 17.9367 21.9903 18.0913 21.213C18.2459 20.4356 18.6275 19.7216 19.1879 19.1612C19.7484 18.6008 20.4624 18.2192 21.2397 18.0646C22.017 17.91 22.8227 17.9893 23.5549 18.2926C24.2871 18.5959 24.9129 19.1095 25.3532 19.7685C25.7935 20.4274 26.0285 21.2022 26.0285 21.9947C26.0285 23.0575 25.6064 24.0767 24.8549 24.8282C24.1034 25.5796 23.0842 26.0018 22.0214 26.0018Z"/>
                                    <path class="svg-social-icon" d="M28.4381 17.0204C29.2348 17.0204 29.8807 16.3745 29.8807 15.5778C29.8807 14.7811 29.2348 14.1353 28.4381 14.1353C27.6414 14.1353 26.9956 14.7811 26.9956 15.5778C26.9956 16.3745 27.6414 17.0204 28.4381 17.0204Z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="col-3 col-lg-2 casa">
                            <!--Youtube-->
                            <a href="<?php echo get_theme_mod("XY_social_youtube"); ?>" target="_blank">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="22" cy="22" r="22" class="svg-social-icon-bg"/>
                                    <path class="svg-social-icon" fill-rule="evenodd" clip-rule="evenodd" d="M32.9554 13.5812C34.1547 13.8941 35.1004 14.8106 35.4233 15.9729C36.0229 18.0965 35.9999 22.5224 35.9999 22.5224C35.9999 22.5224 35.9999 26.9259 35.4233 29.0494C35.1004 30.2118 34.1547 31.1282 32.9554 31.4412C30.7643 32 21.9999 32 21.9999 32C21.9999 32 13.2586 32 11.0445 31.4188C9.84513 31.1059 8.8995 30.1894 8.5766 29.0271C8 26.9259 8 22.5 8 22.5C8 22.5 8 18.0965 8.5766 15.9729C8.8995 14.8106 9.8682 13.8718 11.0445 13.5588C13.2356 13 21.9999 13 21.9999 13C21.9999 13 30.7643 13 32.9554 13.5812ZM20 18L26 22L20 26V18Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div> <!--container-->

<?php get_footer(); ?>


