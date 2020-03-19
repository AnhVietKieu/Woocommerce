
<!-- noi dung cua danh muc-->
<div class="blog-post">
          <h2 class="blog-post-title"><?= the_title();?></h2>
        <!--   <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p> -->

          <p>
          	<?php if(have_posts()) : while(have_posts()) : the_post(); 
	
	 			the_content();?>
         
          	
         <?php 	endwhile ; endif;?>
          </p>
          <b>Create By:
          <?php the_author(); ?>

        </b>
        <b><?php echo"-".get_the_date();?></b>
        </div> 
      
    
      </div>