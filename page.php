<?php 
/*
Template Name: Interiores
Template Post Type: post, page, product
 */

 get_header();
?>


 <section class="contenido-home">
   <div class="container">
     <div class="row">
         <div class="col-xs-12 col-md-8 contenido-general">
          <div>
             <!-- h1><?php the_title(); ?></h1 -->
             <?php
              while ( have_posts() ) : the_post();
              // get_template_part( 'content', 'page' );
              the_content();           
              endwhile;
            ?>
            </div>
         </div>
        <div class="col-xs-12 col-md-4 contenido-laterales">
          <?php include (TEMPLATEPATH . '/libs/lateral.php'); ?>         
        </div>
     </div>
   </div>
 </section> 

<?php
  get_footer();
?>