<?php

/*-- link stylesheets and scripts -- */
function purpleBlog_resources() {

	/*-- stylesheets ---*/
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'bootstrap_theme', get_template_directory_uri() . '/css/bootstrap-theme.css' );
}

add_action( 'wp_enqueue_scripts', 'purpleBlog_resources' );


// creating a custom post type of slider
function pb_register_slider_post_type() {

	$singular = 'Slider';
	$plural = 'Sliders';

	$labels = array(
		'name' 					=> $plural,
		'singular_name' 		=> $singular,
		'add_new' 				=> 'Add New',
		'add_new_item'			=> 'Add New ' . $singular,
		'edit_item'				=> 'Edit ' . $singular,
		'new_item'				=> 'New ' . $singular,
		'view_item'				=> 'View ' . $singular,
		'search_items'			=> 'Search ' . $plural,
		'not_found'				=> 'No ' . $plural . ' found',
		'not_found_in_trash'	=> 'No ' . $plural . ' found in Trash',
		'parent_item_colon'		=> 'Parent ' . $singular,
		'all_items'				=> 'All ' . $plural

	);

	$supports = array(
		'title',
		'editor',
		'author',
		'thumbnail',
		'custom-fields'
	);

	$rewrite = array(
		'slug'					=> 'slide',
		'with_front'			=> true,
		'feeds'					=> true,
		'pages'					=> true
	);

	$args = array(
		'labels' 				=> $labels,
		'public' 				=> true,
		'description'			=> 'Front page slider',
		'exclude_from_search'	=> true,
		'publicly_queryable'	=> true,
		'show_ui'				=> true,
		'show_in_nav_menus'		=> true,
		'show_in_menu'			=> true,
		'show_in_admin_bar'		=> true,
		'menu_position'			=> 100,
		'menu_icon'				=> 'dashicons-slides',
		'capability_type'		=> 'post',
		'map_meta_cap'			=> true,
		'hierarchical'			=> false,
		'supports'				=> $supports,
		'has_archive'			=> false,
		'rewrite'				=> $rewrite,
		'query_var'				=> true,
		'can_export'			=> true,
		'delete_with_user'		=> false,

	);

	register_post_type( 'slider', $args );
}
add_action( 'init', 'pb_register_slider_post_type' );

/**
 * Register Theme Features
 *
 */
function pb_custom_theme_features() {

	/*-- add featured image option --*/
	add_theme_support( 'post-thumbnails' );

	/*-- add custom logo support --*/
	$args = array(
		'height'		=> 115,
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
