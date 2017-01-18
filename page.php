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
          <div class="suscription">
            <h3>Recibe ofertas, promociones y mucho más.</h3>
            <?php dynamic_sidebar('suscripcion'); ?>
          </div>
          <div class="payoptions">
            <h3>Opciones de Pago</h3>
            <div class="divpagos-contenido  "><?php   dynamic_sidebar('opciones-de-pago'); ?></div>            
          </div>
          <div class="lastnews">
            <h3>Últimas actualizaciones</h3>
            <?php ultimas_paginas();  ?>            
          </div>
          <div class="facetravel">
            <iframe class="face"  src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FTravel-Zone%2F122124437856110&amp;width=300&amp;colorscheme=light&amp;show_faces=false&amp;stream=true&amp;header=false&amp;height=395" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          </div>          
        </div>
     </div>
   </div>
 </section> 

<?php
  get_footer();
?>