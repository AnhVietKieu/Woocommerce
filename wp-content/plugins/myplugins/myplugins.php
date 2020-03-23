<?php
/*
	@package Myplugin
*/
/*
	Plugin Name: Myplugin
	Plugin URL: http://alecaddd.com/plugin
	Description: This is my plugin 
	Version: 1.0.0
	Author: AKV
	Author Url:http://alecaddd.com
	Liense: GPLv2 or later
	Test Domain: myplugins
*/
	
	defined('ABSPATH') or die('Cant access file');

	/**
	 * 
	 */
	class MyPlugin 
	{
		function __construct()
		{
			add_action( 'init',array($this,'custom_post_type'));
		}

		function activate()
		{
				echo "The plugin was activate";
		}

		function deactivate()
		{


		}

		function uninstall()
		{

		}

		function custom_post_type()
		{

			register_post_type('book',['public' => 'true','lable'=>'Books']);
		}



	}

	if(class_exists('Myplugin')){
		$myPlugin = new Myplugin();

	}

	
register_activation_hook( __FILE__, array($myPlugin ,'activate') );

register_deactivation_hook( __FILE__, array($myPlugin ,'deactivate') );

// register_uninstall_hook( __FILE__, array($myPlugin ,'uninstall') );

?>