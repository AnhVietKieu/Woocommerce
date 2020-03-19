<?php
/* 
Template Name: Archives
*/
?>
<?= get_header();?>
<section>
	<div class="container">

		
		
		<?= get_template_part('include/section','archive');?>


		
		<?php echo paginate_links();?>
		
	</div>
</section>
<?= get_footer();?> 