<?php

function load_stylesheet()
{
	wp_register_style( 'stylesheet', get_template_directory_uri() .'/style.css', '', 1, 'all' );
	wp_enqueue_style( 'stylesheet' );

	wp_register_style( 'custom', get_template_directory_uri() .'/app.css', '', 1, 'all' );
	wp_enqueue_style( 'custom' );

}

add_action( 'wp_equeue_scripts', 'load_stylesheet');

function load_javascript()
{
	wp_register_script( 'javascript', get_template_directory_uri(). '/app.js', 'jquery', 1, true );
	wp_equeue_script('javascript');

}

add_action( 'wp_enqueue_script', 'load_javascript'); 

//add menu 

register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'woo-commerce-theme' ),
		) );

