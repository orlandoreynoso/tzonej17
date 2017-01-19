<?php 

/*
Template Name: Single
Template Post Type: post, page, product
 */

 get_header();


?>


 <section class="contenido-home">
   <div class="container">
     <div class="row">
         <div class="col-xs-12 col-md-8 contenido-general">

        <!-- ************** CONTENIDO DESPLEGABLE PARA EL BLOG ***  -->

  <article class="conten">
      <div class="mapeo"><?php the_breadcrumb(); ?></div>
<!-- *********************************** -->      

     <div class="contenido">
            <div class="date-cat">
              <div class="row">
                  <div class="col-xs-12 col-md-6 fecha"><i class="icon-date fa fa-calendar"></i><?php the_time('j F, Y'); ?></div>
                  <div class="col-xs-12 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php the_category (' , '); ?></a></div>
              </div>
            </div>
            <div class="info">
	        <!-- h1><?php //   the_title(); ?></h1 -->
	         <?php
	          while ( have_posts() ) : the_post();
	//          get_template_part( 'content', 'page' );
	          the_content();           
	          endwhile;
	          ?>
            </div>
      </div>   
<!-- **************************************** -->    
  </article>

        <!-- ************** FIN DEL CONTENIDO BLOG ***************  -->

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