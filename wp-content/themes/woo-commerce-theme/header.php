<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woo_commerce-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php get_template_directory_uri().'/css/style.css'?>">

	<?php wp_head(); ?>
	<style type="text/css">
		#hero
	   {
		height: 400px; 
		width: 100%; 
		background-image:url('image/images.jpg');
		background: #f0f0f0;
		}
		a{	
		padding:10px;
		}
		.topmenu{
			list-style-type: none;
			margin:0;
			padding: 0 2;

			li {
				list-style-type: none;
				a{
					color: green;
				}
			}
		}
	</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'woo-commerce-theme' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="container-fluid d-flex align-items-center " style="box-shadow: 0px 0px 20px rgba(0,0,0,0.25);"> 
			<a href="<?php bloginfo( 'url' );?>">
			<img src="<?php bloginfo( 'template_directory' );?>/image/logo.png"  class="img-fluid logo" style="height: 50px;width: auto;">
		</a>
			<nav>
				<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'     =>' topmenu d-flex'
			) );?>
			</nav>
			
		</div>

		<!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
