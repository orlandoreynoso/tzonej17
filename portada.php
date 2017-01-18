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
       <div class="col-md-12 contenido-portada">        
         <?php include (TEMPLATEPATH . '/libs/contenido-home.php');  ?>
       </div>
     </div>
   </div>
 </section> 

<section class="secciones">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <P>Recibe ofertas, promociones y mucho más.</P>
        <?php    dynamic_sidebar('suscripcion');        ?>    
        <h1>OPCIONES DE PAGO</h1>
        <div class="divpagos-contenido  "><?php   dynamic_sidebar('opciones-de-pago'); ?></div>  
      </div>
      <div class="col-md-6">
        <?php ultimas_paginas();  ?>
        <iframe class="face_cocos"  src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FTravel-Zone%2F122124437856110&amp;width=440&amp;colorscheme=light&amp;show_faces=false&amp;stream=true&amp;header=false&amp;height=395" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:440px; height:395px;" allowTransparency="true"></iframe>                                  
      </div>
    </div>
  </div>
  
</section>


<?php 
  get_footer();
?>