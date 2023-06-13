<?php 
add_filter( 'wpcf7_autop_or_not', '__return_false' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
if ( ! function_exists( 'power_register_nav_menu' ) ) {

	function power_register_nav_menu(){
		register_nav_menus( array(
	    	'header_menu' => __( 'Header Menu'),
	    	'footer_menu'  => __( 'Footer Menu'),
		) );
	}
	add_action( 'after_setup_theme', 'power_register_nav_menu' );
}
function my_scripts() {
    wp_enqueue_script( 'main_js', get_template_directory_uri()."/assets/js/main.js", array( 'bootstrap', 'slick_carousel_js'), '', true);
    wp_enqueue_script( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js", '', true);
	wp_enqueue_script( 'jQuery', "https://code.jquery.com/jquery-3.6.3.js");
	wp_enqueue_script( 'slick_carousel_js', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array('jQuery'));
	wp_enqueue_script( 'select_2_js', get_template_directory_uri()."/node_modules/select2/dist/js/select2.js", array('jQuery'));
	wp_enqueue_style ( 'bootstrap_css', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css");
	wp_enqueue_style ( 'select_2_css', get_template_directory_uri()."/node_modules/select2/dist/css/select2.css");
	wp_enqueue_style ( 'slick_carousel', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css");
    wp_enqueue_style ( 'main_css', get_template_directory_uri()."/dist/css/main.css");
}
add_action('wp_enqueue_scripts', 'my_scripts');
add_image_size( 'primary', 263, 188 );
add_image_size( 'sm-img', 80, 80 );
add_image_size( 'custom-size', 596, 448 );
add_image_size( 'main-size', 517, 517 );

add_action( 'init', 'post_type_albina');
 
function post_type_albina() {
	register_post_type('albina',
		array(
			'label' => 'Albina',
			'public' => TRUE,
			'menu_icon' => 'dashicons-admin-users',
			'rewrite' => array( 'slug' => 'Albina', 'with_front' => false ), 
			'has_archive' => false,
  		)
  	);
	flush_rewrite_rules(false);
}


add_action( 'init', 'post_type_review_slider');
function post_type_review_slider() {
	register_post_type('review_slider',
		array(
			'label' => 'Review Slider',
			'public' => TRUE,
			'menu_icon' => 'dashicons-admin-page',
			'rewrite' => array( 'slug' => 'review_slider', 'with_front' => false ), 
			'has_archive' => false,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),

  		)
  	);
	flush_rewrite_rules(false);
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Writers', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Writer', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Writers', 'textdomain' ),
		'popular_items'              => __( 'Popular Writers', 'textdomain' ),
		'all_items'                  => __( 'All Writers', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'slider' ),
	);

	register_taxonomy( 'review_slider_category', 'review_slider', $args );
}