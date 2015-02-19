<?php

// add any new or customised functions here

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	// Loads our main stylesheet.
	wp_enqueue_style( 'juridica-child-style', get_stylesheet_uri(), array('style'), 'v1' );

}


/* 
function zblackbeard_custom_script_fix()
{
	if ( !wp_is_mobile() ){

		wp_enqueue_script('zerif_script_child', get_stylesheet_directory_uri() .'/js/zerif.js', array('zerif_scrollReveal_script'), '201202067', true); 

	}else{

		wp_enqueue_script('zerif_script_child', get_stylesheet_directory_uri() .'/js/zerif.js', array(), '201202067', true); 

	}
	
}

add_action( 'wp_enqueue_scripts', 'zblackbeard_custom_script_fix', 100 ); */