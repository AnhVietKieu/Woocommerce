<?= get_header();?>
<section>
	<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            <?= the_title();?>
          </h3>
	
		
		<?= get_template_part('include/section','content');?>
	
</section>
<?= get_footer();?> 