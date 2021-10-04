<?php 

    /*Remove default wp gutemberg pattern
    -----------------------------------------*/
    function XY_removeCorePatterns() {
        remove_theme_support('core-block-patterns');
    }
    add_action('after_setup_theme', 'XY_removeCorePatterns');


    /*Add custom wp gutemberg pattern
    -----------------------------------------*/
    function XY_custom_wp_block_patterns() {

        // CATEGORY
        register_block_pattern_category(
            'dough_academy',
            array( 'label' => __( '🍕Dough Academy', 'dough' ) )
        );

        register_block_pattern(
            'dough/testo_immagine',
            array(
                'title'       => __( 'Testo Immagine', 'testo-immagine' ),
                
                'description' => _x( 'Two columns block with image and text', 'Block pattern description', 'dough' ),
                
                'content'     => "<!-- wp:group {\"align\":\"wide\"} -->\r\n<div class=\"wp-block-group alignwide\"><!-- wp:media-text {\"mediaId\":53,\"mediaLink\":\"http://sergiom24.sg-host.com/hello-world-3-in-evidenza/ph2-1024x683/\",\"mediaType\":\"image\",\"imageFill\":true} -->\r\n<div class=\"wp-block-media-text alignwide is-stacked-on-mobile is-image-fill\"><figure class=\"wp-block-media-text__media\" style=\"background-image:url(http://sergiom24.sg-host.com/wp-content/uploads/2021/08/ph2-1024x683-1.jpg);background-position:50% 50%\"><img src=\"http://sergiom24.sg-host.com/wp-content/uploads/2021/08/ph2-1024x683-1.jpg\" alt=\"\" class=\"wp-image-53 size-full\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:paragraph {\"placeholder\":\"Content…\",\"fontSize\":\"large\"} -->\r\n<p class=\"has-large-font-size\"> </p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus elementum dui nec velit pellentesque, eget faucibus dolor molestie. Integer quam neque, facilisis tempus condimentum porta, imperdiet vel urna. Praesent mattis eu urna non pretium. Integer convallis elit sit amet varius fringilla. Sed at pulvinar ligula. Mauris ullamcorper mattis metus sit amet venenatis. Aenean fermentum erat non tortor lobortis, ac imperdiet orci rutrum. Maecenas facilisis lacinia lacus et rutrum. Aenean semper ante eget tempor aliquam. Donec consequat felis et lobortis dapibus. Praesent placerat fringilla ullamcorper. Fusce molestie diam enim, in iaculis ex lobortis sed. Vivamus vitae arcu vulputate, mattis turpis et, lacinia est.</p>\r\n<!-- /wp:paragraph --></div></div>\r\n<!-- /wp:media-text -->\r\n\r\n<!-- wp:spacer {\"height\":50} -->\r\n<div style=\"height:50px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer --></div>\r\n<!-- /wp:group -->",
                
                'categories'  => array('dough_academy'),
            )
        );

        register_block_pattern(
            'dough/titolo_paragrafo',
            array(
                'title'       => __( 'Titolo Paragrafo', 'titolo-paragrafo' ),
                
                'description' => _x( 'Block headings and text', 'Block pattern description', 'dough' ),
                
                'content'     => "<!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"level\":3} -->\r\n<h3>Titolo e paragrafo</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:spacer {\"height\":24} -->\r\n<div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Secondo Jacob Nielsen, uno dei padri della scrittura per il <strong>web</strong>, <strong>le persone non leggono</strong> il testo: lo <strong>scannerizzano</strong>. Mettiamo in grassetto le <strong>parole chiave</strong>. Suddividiamo i paragrafi per evitare i \\\'<strong>muri di testo</strong>\\\'.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec felis at tortor accumsan hendrerit. Suspendisse lobortis odio eget finibus gravida. Quisque dolor augue, tempus ut <strong>lobortis</strong> vel, consequat dignissim turpis. Etiam porttitor lacus vitae elit lobortis fermentum. Nullam at <strong>imperdiet arcu</strong>, quis aliquam leo. Nunc tristique nisl vitae purus pulvinar, ac euismod massa pharetra.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Nullam dictum facilisis enim ac iaculis. Vivamus vel commodo nisi, a posuere risus. Suspendisse ut congue mi. Integer vitae maximus ligula. Donec bibendum luctus hendrerit. Aenean <strong>eros ante</strong>, placerat in <strong>tortor eget</strong>, feugiat dictum odio. Nulla facilisi.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Se ci sono collegamenti esterni: <a rel=\"noreferrer noopener\" href=\"https://www.google.it/\" target=\"_blank\">linkiamoli</a></p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:spacer {\"height\":50} -->\r\n<div style=\"height:50px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer --></div>\r\n<!-- /wp:group -->",
                
                'categories'  => array('dough_academy'),
            )
        );
        
        register_block_pattern(
            'dough/titolo_elenco',
            array(
                'title'       => __( 'Titolo Elenco', 'titolo-elenco' ),
                
                'description' => _x( 'Block headings and ul', 'Block pattern description', 'dough' ),
                
                'content'     => "<!-- wp:group -->\r\n<div class=\"wp-block-group\"><!-- wp:heading {\"level\":3} -->\r\n<h3>Titolo e punto elenco</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:spacer {\"height\":24} -->\r\n<div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Se possibile spacchettiamo le informazioni in un <strong>punto elenco</strong>.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:list -->\r\n<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Nam nec felis at tortor accumsan hendrerit. Suspendisse lobortis odio eget finibus gravida. Quisque dolor augue, tempus ut lobortis vel, consequat dignissim turpis. Etiam porttitor lacus vitae elit lobortis fermentum.</li><li>Nullam dictum facilisis enim ac iaculis. Vivamus vel commodo nisi, a posuere risus. Suspendisse ut congue mi. Integer vitae maximus ligula. Donec bibendum luctus hendrerit. Aenean eros ante, placerat in tortor eget, feugiat dictum odio.</li><li>Nulla facilisi.</li></ul>\r\n<!-- /wp:list -->\r\n\r\n<!-- wp:spacer {\"height\":50} -->\r\n<div style=\"height:50px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\r\n<!-- /wp:spacer --></div>\r\n<!-- /wp:group -->",
                
                'categories'  => array('dough_academy'), 
            )
        );
    }    
    add_action( 'init', 'XY_custom_wp_block_patterns' );