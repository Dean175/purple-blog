<?php

/**
 * Adding meta box to the slider page
 *
 */
function pb_add_slider_meta_box() {
	add_meta_box( 
		'front-page-slider',
		'Slider Contents',
		'pb_slider_meta_box_callback',
		'slider',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'pb_add_slider_meta_box' );

/**
 * Add slider-meta-box script
 */
function pb_slider_register_admin_script() {
	wp_enqueue_media();
	wp_enqueue_script( 'pb_slider_meta', get_template_directory_uri() . '/js/slider-meta.js', array( 'jquery', 'media-upload' ), '1.12.4', true);
}
add_action( 'admin_enqueue_scripts', 'pb_slider_register_admin_script' );

/**
 * Rendering the Meta Box
 *
 */
function pb_slider_meta_box_callback() {
    echo 'Setup your slider contents here.';
    ?>

    <div id="slider-metabox-wrap">
    	<img id="image-tag">
    	<input type="hidden" id="img-hidden-field" name="custom_image_data">
    	<input type="button" id="image-upload-button" class="button" value="Add Image">
    	<input type="button" id="image-delete-button" class="button" value="Remove Image">
    </div>

    <?php
}