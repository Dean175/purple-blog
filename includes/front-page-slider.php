<?php

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
		'title'
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

	// registering the post type
	register_post_type( 'slider', $args );
}
add_action( 'init', 'pb_register_slider_post_type' );


/**
 * Register taxonomy for slider
 */

function pb_register_taxonomy() {

	$plural = 'Slider Categories';
	$singular = 'Slider Category';

	$labels = array(
		'name'							=> $plural,
		'singular_name'					=> $singular,
		'menu_name'						=> $plural,
		'all_items'						=> __( 'All ' . $plural ),
		'edit_item'						=> __( 'Edit ' . $singular ),
		'view_item'						=> __( 'View ' . $singular ),
		'update_item'					=> __( 'Update ' . $singular ),
		'add_new_item'					=> __( 'Add New ' . $singular ),
		'new_item_name'					=> __( 'New ' . $singular . ' Name' ),
		'parent_item'					=> __( 'Parent ' . $singular ),
		'parent_item_colon'				=> __( 'Parent ' . $singular . ':' ),
		'search_items'					=> __( 'Search ' . $plural ),
		'popular_items'					=> __( 'Popular ' . $plural ),
		'separate_items_with_commas'	=> __( 'Separate ' . $plural . ' with commas' ),
		'add_or_remove_items'			=> __( 'Add or remove ' . $plural ),
		'choose_from_most_used'			=> __( 'Choose from the most used ' . $plural ),
		'not_found'						=> __( 'No ' . $plural . ' found.' )
	);


	$args = array(
		'hierarchical'			=> false,
		'labels'				=> $labels,
		'show_ui'				=> true,
		'show_admin_column'		=> true,
		'update_count_callback'	=> '_update_post_term_count',
		'query_var'				=> true,
		'rewrite'				=> array( 'slug' => ''),
	);
	

	register_taxonomy( 'slider_category', 'slider', $args );
}
add_action( 'init', 'pb_register_taxonomy' );