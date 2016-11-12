<?php

function purpleBlog_resources() {

	/*-- stylesheets ---*/
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'bootstrap_theme', get_template_directory_uri() . '/css/bootstrap-theme.css' );
}

add_action( 'wp_enqueue_scripts', 'purpleBlog_resources' );
