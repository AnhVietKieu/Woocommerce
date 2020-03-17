<?php get_header();?>
<div id="hero">
	<div class="container d-flex align-items-center justify-content-center h-100">
		<h1>Welcome my shop</h1>
	</div>
</div>
<div class="content">
	<div class="container">
		<img src="<?php the_post_thumbnail_url('post_image');?>" class="img-fluid md-5">
		

		<h1><?php the_title();?></h1>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<?php the_content();?>
	<?php endwhile ; endif;?>
	</div>
	
</div>
<?php get_footer();?>