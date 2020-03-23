<?php

/*
	* Trigger this file on Plugin uninstall
	*@packega PluginNew
*/

	if(!define('WP_UNINSTALL_PLUGIN'))
	{
		die();
	}

	//Clean datebase

	// $book = get_posts(array(
	// 	'post_type'=>'book',
	// 	'numberposts' =>-1
	// ));

	// foreach ($books as $book) {
	// 	wp_delete_post( $book->ID, true);
	// }

	global $wpdb;

	$wpdb->query("Delete From wp_posts where post_type ='book'");

	$wpdb->query("Delete From wp_postmeta where post_id not in(select id from wp_posts)");

	$wpdb->query("Delete From wp_term_relations where post_id not in(select id from wp_posts)");