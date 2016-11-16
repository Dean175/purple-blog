<?php

$dir = __DIR__;

/*-- link stylesheets and scripts -- */
function purpleBlog_resources() {

	/*-- stylesheets ---*/
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'bootstrap_theme', get_template_directory_uri() . '/css/bootstrap-theme.css' );
}

add_action( 'wp_enqueue_scripts', 'purpleBlog_resources' );

require_once ( $dir . '/includes/front-page-slider.php' );
require_once ( $dir . '/includes/slider-meta-box.php' );

/**
 * Register Theme Features
 *
 */
function pb_custom_theme_features() {

	/*-- add featured image option --*/
	add_theme_support( 'post-thumbnails' );

	/*-- add custom logo support --*/
	$args = array(
		'height'		=> 70,
		'width'			=> 200,
		'flex-height' 	=> true,
		'flex-width'  	=> true,
		'header-text' 	=> array( 'site-title', 'site-description' )
	);
	add_theme_support( 'custom-logo', $args );
}
add_action( 'after_setup_theme', 'pb_custom_theme_features' );

// output the logo
function theme_prefix_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		if ( has_custom_logo() ) {
			the_custom_logo();
		}
	}

}


/*-- add menu option ---*/
add_theme_support('nav-menus');
if ( function_exists('register_nav_menus')) {
	register_nav_menus(
		array(
		'main' => 'Main Nav'
		)
	);
}
