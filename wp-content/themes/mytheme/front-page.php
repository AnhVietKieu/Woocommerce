<?= get_header();?>
<div class="container">
         <?php $image_header = get_field('silder_header_id',get_the_ID());

          foreach ($image_header as $key => $value) {

            ?>

             <div class="mySlides">
                  
                  <img src="<?php echo $value['image_id'];?>" style="width:100% ; height: 500px;">
              </div>
      
            <?php
            
          }

        ?>
      
 

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>
      </div>

<section>
		<?= get_template_part('include/section','content');?>
</section>
<?= get_footer();?> 