<?php 

    /*Remove default wp gutemberg pattern
    -----------------------------------------*/
    function XY_removeCorePatterns() {
        remove_theme_support('core-block-patterns');
    }
    add_action('after_setup_theme', 'XY_removeCorePatterns');


    /*Add custom wp Gutenberg pattern
    -----------------------------------------*/
    function XY_custom_wp_block_patterns() {

        // CATEGORY
        register_block_pattern_category(
            'dough_academy',
            array( 'label' => __( '🍕Dough Academy', 'dough' ) )
        );

        register_block_pattern(
            'dough/titolo_articolo',
            array(
                'title'       => __( 'Titolo articolo', 'titolo-articolo' ),
                
                'description' => _x( "Introduzione all'articolo con titolo e caption", 'Block pattern description', 'dough' ),
                
                'content'     => "<!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"level\":4} -->\r\n<h4 id=\"block-56384ac0-07fd-498a-bfc4-4442d073c7e9\"><br>DOUGH ACADEMY</h4>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:spacer {\"height\":24} -->\r\n<div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer -->\r\n\r\n<!-- wp:heading -->\r\n<h2 id=\"block-60c8e78d-bce3-411f-a662-8667c48de229\">Titolo articolo</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:spacer -->\r\n<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer --></div>\r\n<!-- /wp:group -->",
                
                'categories'  => array('dough_academy'),
            )
        );

        register_block_pattern(
            'dough/testo_immagine',
            array(
                'title'       => __( 'Testo Immagine', 'testo-immagine' ),
                
                'description' => _x( 'Blocco a due colonne; una con testo e una con immagine', 'Block pattern description', 'dough' ),
                
                'content'     => "<!-- wp:group {\"align\":\"wide\"} -->\r\n<div class=\"wp-block-group alignwide\"><!-- wp:media-text {\"mediaId\":53,\"mediaLink\":\"http://sergiom24.sg-host.com/hello-world-3-in-evidenza/ph2-1024x683/\",\"mediaType\":\"image\",\"imageFill\":true} -->\r\n<div class=\"wp-block-media-text alignwide is-stacked-on-mobile is-image-fill\"><figure class=\"wp-block-media-text__media\" style=\"background-image:url(http://sergiom24.sg-host.com/wp-content/uploads/2021/08/ph2-1024x683-1.jpg);background-position:50% 50%\"><img src=\"http://sergiom24.sg-host.com/wp-content/uploads/2021/08/ph2-1024x683-1.jpg\" alt=\"\" class=\"wp-image-53 size-full\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\",\"fontSize\":\"large\"} -->\r\n<p class=\"has-large-font-size\"> </p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus elementum dui nec velit pellentesque, eget faucibus dolor molestie. Integer quam neque, facilisis tempus condimentum porta, imperdiet vel urna. Praesent mattis eu urna non pretium. Integer convallis elit sit amet varius fringilla. Sed at pulvinar ligula. Mauris ullamcorper mattis metus sit amet venenatis. Aenean fermentum erat non tortor lobortis, ac imperdiet orci rutrum. Maecenas facilisis lacinia lacus et rutrum. Aenean semper ante eget tempor aliquam. Donec consequat felis et lobortis dapibus. Praesent placerat fringilla ullamcorper. Fusce molestie diam enim, in iaculis ex lobortis sed. Vivamus vitae arcu vulputate, mattis turpis et, lacinia est.</p>\r\n<!-- /wp:paragraph --></div></div>\r\n<!-- /wp:media-text -->\r\n\r\n<!-- wp:spacer -->\r\n<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer --></div>\r\n<!-- /wp:group -->",
                
                'categories'  => array('dough_academy'),
            )
        );

        register_block_pattern(
            'dough/titolo_paragrafo',
            array(
                'title'       => __( 'Titolo Paragrafo', 'titolo-paragrafo' ),
                
                'description' => _x( 'Blocco con titolo testo, link e cta', 'Block pattern description', 'dough' ),
                
                'content'     => "<!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"level\":3} -->\r\n<h3>Titolo e paragrafo</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:spacer {\"height\":24} -->\r\n<div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Secondo Jacob Nielsen, uno dei padri della scrittura per il\\\\\&nbsp;<strong>web</strong>,\\\\\&nbsp;<strong>le persone non leggono</strong>\\\\\&nbsp;il testo: lo\\\\\&nbsp;<strong>scannerizzano</strong>. Mettiamo in grassetto le <strong>parole chiave</strong>. Suddividiamo i paragrafi per evitare i \\\\\'<strong>muri di testo</strong>\\\\\'.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec felis at tortor accumsan hendrerit. Suspendisse lobortis odio eget finibus gravida. Quisque dolor augue, tempus ut <strong>lobortis</strong> vel, consequat dignissim turpis. Etiam porttitor lacus vitae elit lobortis fermentum. Nullam at <strong>imperdiet arcu</strong>, quis aliquam leo. Nunc tristique nisl vitae purus pulvinar, ac euismod massa pharetra.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Nullam dictum facilisis enim ac iaculis. Vivamus vel commodo nisi, a posuere risus. Suspendisse ut congue mi. Integer vitae maximus ligula. Donec bibendum luctus hendrerit. Aenean <strong>eros ante</strong>, placerat in <strong>tortor eget</strong>, feugiat dictum odio. Nulla facilisi.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Se ci sono collegamenti esterni: <a rel=\"noreferrer noopener\" href=\"https://www.google.it/\" target=\"_blank\">linkiamoli</a></p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>E voliamo anche un bottone</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>E voliamo anche un bottone</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:buttons -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button -->\r\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\">CALL TO ACTION</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons -->\r\n\r\n<!-- wp:spacer -->\r\n<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer --></div>\r\n<!-- /wp:group -->",
                
                'categories'  => array('dough_academy'),
            )
        );
        
        register_block_pattern(
            'dough/titolo_elenco',
            array(
                'title'       => __( 'Titolo Elenco', 'titolo-elenco' ),
                
                'description' => _x( 'Blocco con titolo e punto elenco', 'Block pattern description', 'dough' ),
                
                'content'     => "<!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"level\":3} -->\r\n<h3>Titolo e punto elenco</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:spacer {\"height\":24} -->\r\n<div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Se possibile spacchettiamo le informazioni in un <strong>punto elenco</strong>.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:list -->\r\n<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Nam nec felis at tortor accumsan hendrerit. Suspendisse lobortis odio eget finibus gravida. Quisque dolor augue, tempus ut lobortis vel, consequat dignissim turpis. Etiam porttitor lacus vitae elit lobortis fermentum.</li><li>Nullam dictum facilisis enim ac iaculis. Vivamus vel commodo nisi, a posuere risus. Suspendisse ut congue mi. Integer vitae maximus ligula. Donec bibendum luctus hendrerit. Aenean eros ante, placerat in tortor eget, feugiat dictum odio.</li><li>Nulla facilisi.</li></ul>\r\n<!-- /wp:list -->\r\n\r\n<!-- wp:spacer -->\r\n<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer --></div>\r\n<!-- /wp:group -->",
                
                'categories'  => array('dough_academy'), 
            )
        );
        
        register_block_pattern(
            'dough/separatore',
            array(
                'title'       => __( 'Separatore', 'separatore' ),
                
                'description' => _x( 'Linea orizzontale separatore', 'Block pattern description', 'dough' ),
                
                'content'     => "<!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:spacer {\"height\":24} -->\r\n<div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer -->\r\n\r\n<!-- wp:separator -->\r\n<hr class=\"wp-block-separator\"/>\r\n<!-- /wp:separator -->\r\n\r\n<!-- wp:spacer -->\r\n<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer --></div>\r\n<!-- /wp:group -->",
                
                'categories'  => array('dough_academy'), 
            )
        );
        
        register_block_pattern(
            'dough/immagine_singola',
            array(
                'title'       => __( 'Immagine Singola', 'immagine-singola' ),
                
                'description' => _x( 'Immagine singola con eventuale descrizione', 'Block pattern description', 'dough' ),
                
                'content'     => "<!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:image {\"id\":47,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-large\"><img src=\"http://bang.local/wp-content/uploads/2021/08/duncan-kidd-2HMPWWifKrs-unsplash-1024x683.jpg\" alt=\"\" class=\"wp-image-47\"/><figcaption>Immagine singola</figcaption></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:spacer -->\r\n<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer --></div>\r\n<!-- /wp:group -->",
                
                'categories'  => array('dough_academy'), 
            )
        );
        
        register_block_pattern(
            'dough/galleria_immagini',
            array(
                'title'       => __( 'Galleria Immagini', 'galleria_immagini' ),
                
                'description' => _x( 'Galleria Immagini in griglia', 'Block pattern description', 'dough' ),
                
                'content'     => "<!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:gallery {\"ids\":[151,127,135],\"linkTo\":\"none\"} -->\r\n<figure class=\"wp-block-gallery columns-3 is-cropped\"><ul class=\"blocks-gallery-grid\"><li class=\"blocks-gallery-item\"><figure><img src=\"http://sergiom24.sg-host.com/wp-content/uploads/2021/10/2021_Savoia-Pizza-4337DSCF4337-1024x683.jpg\" alt=\"\" data-id=\"151\" data-full-url=\"http://sergiom24.sg-host.com/wp-content/uploads/2021/10/2021_Savoia-Pizza-4337DSCF4337.jpg\" data-link=\"http://sergiom24.sg-host.com/2021_savoia-pizza-4337dscf4337/\" class=\"wp-image-151\"/></figure></li><li class=\"blocks-gallery-item\"><figure><img src=\"http://sergiom24.sg-host.com/wp-content/uploads/2021/10/2021_Savoia-Pizza-4498DSCF4498-1024x683.jpg\" alt=\"\" data-id=\"127\" data-full-url=\"http://sergiom24.sg-host.com/wp-content/uploads/2021/10/2021_Savoia-Pizza-4498DSCF4498.jpg\" data-link=\"http://sergiom24.sg-host.com/2021_savoia-pizza-4498dscf4498/\" class=\"wp-image-127\"/></figure></li><li class=\"blocks-gallery-item\"><figure><img src=\"http://sergiom24.sg-host.com/wp-content/uploads/2021/10/2021_Savoia-Pizza-3919DSCF3919-1024x683.jpg\" alt=\"\" data-id=\"135\" data-full-url=\"http://sergiom24.sg-host.com/wp-content/uploads/2021/10/2021_Savoia-Pizza-3919DSCF3919.jpg\" data-link=\"http://sergiom24.sg-host.com/2021_savoia-pizza-3919dscf3919/\" class=\"wp-image-135\"/></figure></li></ul></figure>\r\n<!-- /wp:gallery -->\r\n\r\n<!-- wp:spacer -->\r\n<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer --></div>\r\n<!-- /wp:group -->",
                
                'categories'  => array('dough_academy'), 
            )
        );

    }    
    add_action( 'init', 'XY_custom_wp_block_patterns' );