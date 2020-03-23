<?php
/*
	@package PluginNew
*/
/*
	Plugin Name: PluginNew
	Plugin URL: http://alecaddd.com/plugin
	Description: This is my plugin 
	Version: 1.0.0
	Author: AKV
	Author Url:http://alecaddd.com
	Liense: GPLv2 or later
	Test Domain: pluginnew
*/
	/*
	This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
	*/

	defined('ABSPATH') or die('Cant access file');

	/**
	 * 
	 */
	class PluginNew
	{
	

		function __construct()
		{
			$this->create_post_type();
		}
		function register()
		{
			add_action('admin_enqueue_scripts',array($this,'enqueue'));
		}

		protected function create_post_type()
		{
			add_action('init',array($this,'custom_post_type'));
		}
		function activate()
		{
			$this->custom_post_type();
			flush_rewrite_rules( );
		}

		function deactivate()
		{

			flush_rewrite_rules( );
		}

		function uninstall()
		{

		}

		 function custom_post_type() {

    		register_post_type( 'book',['public'=>true,'lable' =>'Books']);
        }


        function enqueue()
        {
        	wp_enqueue_style( 'myplugnstyle',plugins_url('/assets/mystyle.css',__FILE__));

        	wp_enqueue_script( 'myplugnscript',plugins_url('/assets/myscript.js',__FILE__));
        }



	}

	if(class_exists('PluginNew')){

		$pluginNew = new PluginNew();
		$pluginNew->register();

	}

	
register_activation_hook( __FILE__, array($pluginNew ,'activate') );

register_deactivation_hook( __FILE__, array($pluginNew ,'deactivate') );

register_uninstall_hook( __FILE__, array($pluginNew,'uninstall') );