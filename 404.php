<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12 mb-l">
            <div class="pizza mt-xl">
                <p>4</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/404.png" alt="">
                <p>4</p>
            </div>
        </div>
        <div class="col-12 t-center mb-xl">
            <h2 class="mb-m">Non abbiamo trovato la pagina che cercavi.</h2>
            <p>Ma tornando sul nostro sito troverai sicuramente un sacco di impasti, pizze e focacce!</p>
        </div>
        <div class="col-12 t-center mb-xxl">
            <a class="btn casa" href="<?php echo esc_url_raw(home_url()); ?>">Torna alla home</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>