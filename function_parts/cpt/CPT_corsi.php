<?php
/*-------------------------------------------------
    ADD CUSTOM POST TYPE with custom TAXONOMY
--------------------------------------------------*/

    /*Replace = cpttaxonomy*/

    function XY_custom_corsi() {
        register_post_type( 'corsi',
            array(
                'labels'                =>          array(
                    'name'              =>          'Corsi', //nome principale nella sidebar
                    'singular_name'     =>          'Corsi',
                    'all_items'         =>          'Tutti i Corsi', //nome link per visualizzare tutti i post
                    'add_new'           =>          'Aggiungi nuovo Corsi', //nome link per aggiungere nuovo post
                    'add_new_item'      =>          'Aggiungi nuovo  Corsi', //titolo della pagina di aggiunta di un nuovo post
                    'edit_item'         =>          'Modifica corsi', //titolo della pagina di aggiunta di un nuovo post
                    'new_item'          =>          'Nuovo corsi',
                    'view_item'         =>          'Visualizza corsi',
                    'search_items'      =>          'Cerca', //testo nel pulsante di ricerca
                    'not_found'         =>          'Nessun elemento trovato',
                    'not_found_in_trash'=>          'Nessun elemento nel cestino',
                    'parent_item_colon' =>          '',
                ),
                'description'           =>          'Descrizione di cosa sono questi custom post',
                'public'                =>          true,
                'publicly_queryable'    =>          true,
                'exclude_from_search'   =>          false,
                'show_ui'               =>          true,
                'query_var'             =>          true,
                'menu_position'         =>          20,
                'menu_icon'             =>          'dashicons-beer', //Dashicon
                'rewrite'               =>          array(
                    'slug'              =>          'corsi',
                    'with-front'        =>          false,
                ),
                'has_archive'           =>          true,
                'capability_type'       =>          'post',
                'hierarchycal'          =>          false,
                'taxonomies'            =>          array(''),
                'show_in_rest'          =>          true, //gutemberg attivato
                'supports'              =>          array('title', 'author', 'editor', 'thumbnail', 'excerpt',      'revisions', 'custom-fields', 'comments', 'page-attributes') //campi supportati
            ), flush_rewrite_rules() /*fine delle opzioni*/
        );
    }

    // Inizializzazione della funzione
    add_action( 'init', 'XY_custom_corsi');

    //aggiunta categorie
    function XY_corsi_taxonomies() {
        register_taxonomy(
            'categoria_tag',
            'corsi',
            array(
                'labels' => array(
                    'name' => 'Categoria',
                    'add_new_item' => 'Aggiungi nuova categoria',
                    'new_item_name' => "Nuova categoria"
                ),
                'show_ui' => true,
                'show_tagcloud' => false,
                'hierarchical' => true,
                'show_admin_column' => true,
                'show_in_rest' => true,
            )
        );

    }

    add_action( 'init', 'XY_corsi_taxonomies', 0 );



    /*SHORTCODE
    -----------------------------*/
    add_shortcode( 'corsi', 'XY_display_corsi_custom_post_type' );

    function XY_display_corsi_custom_post_type($atts){
        ob_start();
        extract( shortcode_atts( array (
            'limit' => -1,
            'categoria' => '',
            'evidenza' => false
        ), $atts ) );

        $args = array(
            'post_type'         => 'corsi',
            'post_status'       => 'publish',
            'orderby'           => 'count',
            'order'             => 'ASC',
            'posts_per_page'    => -1,
            'categoria_tag'     =>  $categoria
        );
        
        if( $evidenza == true ) {
            $args['meta_query'][] = array(
                'relation'		=> 'AND',
                array(
                'key'	 	=> 'in_evidenza',
                'value'	  	=> array(true),
                'compare' 	=> 'IN',
                ),
            );
        };

        // STAMPA
        $XY_query = new WP_Query( $args );
        if( $XY_query->have_posts() ){ ?>

            <section>

                <div class="row subpage-hero mb-xxl">
                    <div class="col-12 col-lg-6 subpage-hero__text">
                            <p class="overtitle">Dough Academy</p> 
                            <h1 class="mb-m">Pizza Class</h1>
                            <p>
                                <span style="color:red;">P here.</span> 
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu viverra diam, nec maximus est. Vestibulum condimentum turpis id ipsum volutpat, non gravida leo consequat. Sed mi libero, rutrum in maximus aliquet, sollicitudin nec nunc. Vestibulum vulputate diam vitae lobortis tempus.
                            </p> 
                    </div>
                    <div class="col-12 col-lg-6 subpage-hero__img d-sm-none d-lg-flex">
                        <picture style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Dough_Academy_Savoia-Pizza-Class.jpg')">
                        </picture>
                    </div>
                </div>

                <div class="row">

                    <?php
                    // RICERCA POST NATIVI
                    while( $XY_query->have_posts() ){
                        $XY_query->the_post();
                        global $post;

                        //get alt text of thumbnail
                        $thumbnail_id  = get_post_thumbnail_id( $post->ID ); $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
                        ?>
                            <a href="<?php the_permalink(); ?>" class="col-12 col-lg-6 mb-xxl no-dec">
                                <article class="card casa">
                                    <div class="flex-top">
                                        <picture class="article__picture mb-m"><?php the_post_thumbnail(); ?></picture>
                                        <h2 class="article__title mb-s"><?php the_title(); ?></h2>
                                    </div>
                                    <div class="flex-bottom">
                                        <p class="article__excerpt p-little mb-m"><?php echo get_the_excerpt(); ?></p>
                                        <p class="link article__link">Scopri il corso</p>
                                    </div>
                                </article>
                            </a>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div> 

            </section>
            <?php
        } else {
            ?> <p>nessun corso</p> <?php
        }
        return ob_get_clean();
        wp_reset_query();
    }



?>