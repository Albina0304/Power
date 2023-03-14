<?php 
add_theme_support( 'menus' );
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
    // wp_enqueue_script( 'jQuery', "https://code.jquery.com/jquery-3.6.3.js");
  
    wp_enqueue_script( 'main_js', get_template_directory_uri()."/assets/js/main.js", array('jQuery', 'bootstrap'), '', true);
	// wp_enqueue_script( 'slick', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", '', true);
    wp_enqueue_script( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js", '', true);
	wp_enqueue_script( 'jQuery', "https://code.jquery.com/jquery-3.6.3.js");
    wp_enqueue_style ( 'main_css', get_template_directory_uri()."/dist/css/main.css",);
	// wp_enqueue_style ( 'main_slick', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", '', true);
	// <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


}
add_action('wp_enqueue_scripts', 'my_scripts');
add_image_size( 'custom-size', 263, 188 );
add_image_size( 'primary', 263, 188 );
add_image_size( 'sm-img', 80, 80 );
