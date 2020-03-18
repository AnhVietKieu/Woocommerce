<?php
/* 
Template Name: Archives
*/
?>
<?= get_header();?>
<section>
	<div class="container">

		<?php if(is_active_widget('page-sidebar')):?>

		<?php dynamic_sidebar('page-sidebar');?>
	    <?php endif;?>
		
		<?= get_template_part('include/section','archive');?>
		
		<?php echo paginate_links();?>
		
	</div>
</section>
<?= get_footer();?> 