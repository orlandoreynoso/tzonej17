<?php 

/*
Template Name: PortadaTravelZone
 */

 get_header();


?>


<div class="slide">
    <div class="row">
      <div class="col-md-12">
        <?php include (TEMPLATEPATH . '/libs/banner.php');   ?> 
      </div>
    </div>
</div>

<section class="services-one">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      	<div class="coti">
        <?php //  dynamic_sidebar('acordion');  ?>
        <?php  dynamic_sidebar('cotizar');  ?>      		
      	</div>
      </div>
    </div>
  </div>  
</section>

 <section class="contenido-home">
   <div class="container">
     <div class="row">
         <div class="col-xs-12 col-md-8 contenido-portada">        
           <?php include (TEMPLATEPATH . '/libs/contenido-home.php');  ?>
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