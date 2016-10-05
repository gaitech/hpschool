<?php 

// creating a function to add stylesheet
function HPSCHOOLS_add_parent_style() {
	wp_enqueue_style( 'virtue-style', get_template_directory_uri() . '/style.css', array() );
}

// add action name, function name
add_action( 'wp_enqueue_scripts', 'HPSCHOOLS_add_parent_style' );
/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/stylesheets/custom.css', array(), true);
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );