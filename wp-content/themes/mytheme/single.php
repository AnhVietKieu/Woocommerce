<!-- noi dung toan bo danh muc -->
<?= get_header();?>
<section>
	<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
         
		<?php if(has_post_thumbnail()):?>
			<img src="<?php the_post_thumbnail_url( 'post-thumbnail' );?>" alt="<?php the_title();?>" class="img-fluid">
		<?php endif;?>
		
		<?= get_template_part('include/section','category-content');?>
		<?php wp_link_pages();?>
	
</section>
<?= get_footer();?> 