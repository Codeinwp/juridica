<?php
// add any new or customised functions here

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	// Loads our main stylesheet.
	wp_enqueue_style( 'juridica-child-style', get_stylesheet_uri(), array('style'), 'v1' );

}


function juridica_custom_script_fix()
{
//  wp_enqueue_script('lawyeria_script_child', get_stylesheet_directory_uri() .'../juridica/js/wrapall.js', array(''), '201202067', true); 

	wp_register_script('lawyeria_script_child', get_stylesheet_directory_uri().'/js/wrapall.js', array('jquery') );
    wp_enqueue_script('lawyeria_script_child');
	
	
	wp_enqueue_script('juridica-nicescroll',get_stylesheet_directory_uri().'/js/jquery.nicescroll.js',array('jquery'),'12121',true);
    wp_enqueue_script('juridica-nicescroll-script',get_stylesheet_directory_uri().'/js/juridica-nicescroll.js',array('jquery','juridica-nicescroll'),'12121',true);	
	
}

add_action( 'wp_enqueue_scripts', 'juridica_custom_script_fix', 100 );