<?php 

// creating a function to add stylesheet
function HPSCHOOLS_add_parent_style() {
	wp_enqueue_style( 'virtue-style', get_template_directory_uri() . '/style.css', array() );
}

// add action name, function name
add_action( 'wp_enqueue_scripts', 'HPSCHOOLS_add_parent_style' );