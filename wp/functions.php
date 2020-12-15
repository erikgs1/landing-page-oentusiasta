<?php 

function load_scripts(){
	wp_enqueue_script('script', get_template_directory_uri() . '/dist/all.js', array('jquery'), null, true );

    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '4.5.3', true );
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), '4.5.3', 'all' );

    wp_enqueue_style('style', get_template_directory_uri() . '/dist/style.css', array(), 1.0, 'all');
	wp_enqueue_style('slick', get_template_directory_uri() . '/slick/slick.css', array(), 1.0, 'all');
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
		
		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
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
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
	
}