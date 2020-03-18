<!-- Các chuyên mục  -->
<div class="blog-post">
        
        
        <!--   <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p> -->

          <p>
          	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <h2 class="blog-post-title"><?= the_title();?></h2>
                <hr>
	
	 			       <?=  the_excerpt();?>

          	<a href="<?= the_permalink()?>" class="btn btn-primary">Read</a>
          <?php	endwhile ; endif;?>
          </p>
        </div> 
    
      </div>