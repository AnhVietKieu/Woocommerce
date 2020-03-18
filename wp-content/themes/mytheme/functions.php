<?php
	
function load_style()
{
	wp_register_style( 'bootstrap',  get_template_directory_uri() . '/css/bootstrap.min.css','', false, 'all' );
	wp_enqueue_style( 'bootstrap');
}

add_action( 'wp_enqueue_scripts','load_style' );

function load_js()
{
	wp_register_script( 'js',get_template_directory_uri().'/js/bootstrap.min.js', 'jquery', false, true );
	wp_enqueue_script( 'js');
}

add_action( 'wp_enqueue_scripts','load_js' );

add_theme_support( 'menus' ); 

register_nav_menus( 

	array(
		'top-menu' => 'Top Menu',
		'mobile-menu' => 'Moble Menu Location'
	)
 );