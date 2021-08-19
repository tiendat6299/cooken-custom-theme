<?php

function cooken_files() {
    wp_enqueue_style( 'bootstrap_cooken', get_theme_file_uri( '/css/bootstrap.min.css' ), array(), '4.1.3' );
    wp_enqueue_script( 'bootstrap_cooken', get_theme_file_uri( '/js/bootstrap.min.js' ), array( 'jquery' ), '4.1.3', true );
    wp_register_style( 'cooken_main_styles', get_stylesheet_uri() );
    wp_enqueue_style( 'cooken_main_styles');
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}

add_action('wp_enqueue_scripts', 'cooken_files');


/* carousel */

function cooken_carousel() {
    wp_enqueue_style( 'carousel-file-1', get_template_directory_uri() . '/owlcarousel/assets/owl.carousel.min.css',false,'1.1','all');
    wp_enqueue_style( 'carousel-flie-2', get_template_directory_uri() . '/owlcarousel/assets/owl.theme.default.min.css',false,'1.1','all');
    wp_enqueue_script( 'carousel-file-3', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'carousel-file-4', get_template_directory_uri() . '/jquery.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'carousel-file-5', get_template_directory_uri() . '/carousel/carousel-custom.js', array ( 'jquery' ), true);
}
add_action('wp_enqueue_scripts', 'cooken_carousel');


/* Create menu */

register_nav_menu( 'primary-menu', __('Primary Menu', 'cooken') );

if ( !function_exists('cooken_menu')) {
    function cooken_menu($menu) {
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container' => $menu
        );
        wp_nav_menu( $menu );
    }
}

/* logo */

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function theme_prefix_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}