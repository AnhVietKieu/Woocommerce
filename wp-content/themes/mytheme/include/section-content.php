<!-- Các phần của nội dung page-->
<div class="blog-post">
          <h2 class="blog-post-title"><?= the_title();?></h2>
        <!--   <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p> -->

          <p>
          	<?php if(have_posts()) : while(have_posts()) : the_post(); 
	
	 			the_content();
          	
          	endwhile ; endif;?>
          </p>
        </div> 
    
      </div>

          <aside class="col-md-4 blog-sidebar">
         

         <!--  <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div> -->

          <?php if(is_active_sidebar('page-sidebar')):?>
         <?php dynamic_sidebar('page-sidebar');?>
             <?php endif;?>

          <!-- <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div> -->
        </aside> 