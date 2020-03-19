<!-- Các phần của nội dung page-->



       <?php $image = get_field('silder_id',get_the_ID());

           $title = get_field('title_id',get_the_ID());
            echo $title;
            ?>



      <div class="row mb-2">

          <?php if(($image)): foreach($image as $key =>$value):?>

        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <?php echo $value['title_id'];?>
          
           <img class="card-img-right flex-auto d-none d-md-block img-thumbnail" src="<?php echo $value['silder_image'];?>" style="width: 200px;height: 200px;" alt="Card image cap">
          </div>
        </div>
        <?php endforeach; endif;?>
    </div>

<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            <?= the_title();?>
          </h3>
    <div class="blog-post">
          <h2 class="blog-post-title"></h2>
        <!--   <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p> -->

          <p>
          	<?php if(have_posts()) : while(have_posts()) : the_post(); 
	
	 			the_content();
          	
          	endwhile ; endif;?>
          </p>
      </div> 
    
      </div>

          <aside class="col-md-4 blog-sidebar">
         

     

          <?php if(is_active_sidebar('page-sidebar')):?>
         <?php dynamic_sidebar('page-sidebar');?>
             <?php endif;?> 

         
        </aside> 