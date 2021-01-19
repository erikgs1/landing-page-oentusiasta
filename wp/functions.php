<?php 

function load_scripts(){
	wp_enqueue_script('script', get_template_directory_uri() . '/dist/all.js', array('jquery'), null, true );

    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '4.5.3', true );
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), '4.5.3', 'all' );

    wp_enqueue_style('style', get_template_directory_uri() . '/dist/style.css', array(), 1.0, 'all');
	wp_enqueue_style('slick', get_template_directory_uri() . '/slick/slick.css', array(), 1.0, 'all');
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/slick/slick-theme.css', array(), 1.0, 'all');
}
	
add_action('wp_enqueue_scripts', 'load_scripts');


function oentusiasta_config(){
    register_nav_menus(
        array(
			'my_main_menu_left' => 'Main Menu Left',
            'my_main_menu_right' => 'Main Menu Right',
            'footer_menu' => 'Footer Menu'
        )
    );
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'oentusiasta_config', 0);

function manifest_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Manifesto Subtítulo' ),
			'id'            => 'manifest-sub',
			'description'   => __( 'Adicionar subtítulo na página Manifesto'),
			'before_widget' => '<h3>',
			'after_widget'  => '</h3>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => __( 'Post Subtítulo' ),
			'id'            => 'post-sub',
			'description'   => __( 'Adiciona um subtítulo ao post'),
			'before_widget' => '<p>',
			'after_widget'  => '</p>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Redes sociais' ),
			'id'            => 'socials',
			'description'   => __( 'Código das redes sociais'),
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
		)
	);
}
add_action( 'widgets_init', 'manifest_widgets_init' );

// Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) {
	function wpex_pagination() {
		
		$prev_arrow = is_rtl() ? 'Próxima página' : 'Página Anterior';
		$next_arrow = is_rtl() ? 'Página Anterior' : 'Próxima página';
		
		global $wp_query, $query_Posts;
		if ( $query_Posts ) {
			$total = $query_Posts->max_num_pages;
		} else {
			$total = $wp_query->max_num_pages;
		}
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 0,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
}

// Verifica se não existe nenhuma função com o nome tp_count_post_views
if ( ! function_exists( 'tp_count_post_views' ) ) {
    // Conta os views do post
    function tp_count_post_views () {	
        // Garante que vamos tratar apenas de posts
        if ( is_single() ) {
        
            // Precisamos da variável $post global para obter o ID do post
            global $post;
            
            // Se a sessão daquele posts não estiver vazia
            if ( empty( $_SESSION[ 'tp_post_counter_' . $post->ID ] ) ) {
                
                // Cria a sessão do posts
                $_SESSION[ 'tp_post_counter_' . $post->ID ] = true;
            
                // Cria ou obtém o valor da chave para contarmos
                $key = 'tp_post_counter';
                $key_value = get_post_meta( $post->ID, $key, true );
                
                // Se a chave estiver vazia, valor será 1
                if ( empty( $key_value ) ) { // Verifica o valor
                    $key_value = 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } else {
                    // Caso contrário, o valor atual + 1
                    $key_value += 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } // Verifica o valor
                
            } // Checa a sessão
            
        } // is_single
        
        return;
        
    }
    add_action( 'get_header', 'tp_count_post_views' );
}

