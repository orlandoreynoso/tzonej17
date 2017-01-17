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

 <section>
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <?php include (TEMPLATEPATH . '/libs/contenido-home.php');  ?>
       </div>
     </div>
   </div>
 </section> 




<section id="content">  <!--- BEGING THE PRINCIPAL SECTION OF ALL CONTENT -->

  <div class="wrap-content zerogrid">

       <!-- INICIA DIV DE LOGO Y YOUTUBE  -->
      <div style="clear: both"></div>  

      <div style="clear: both"></div>  

<section id="block02">
<div style="clear: both"></div>
<div class="col-2-3">
 <div class="mapeo">
      <!-- Breadcrumb -->
      <?php the_breadcrumb(); ?>
      <!-- Fin Breadcrumb -->
 </div> 

  <!-- div class="titulo-cartelera"><h2>Actualidad</h2></div -->


</div>

<div class="col-1-5">
  <?php  include (TEMPLATEPATH . '/libs/lateral-home.php');  ?>
</div>     


      <div style="clear: both"></div>
</section>  <!-- ENDED THE PRINCIPAL SECTION OF THE CONTENT  -->
  

<?php 

/*   if (is_page(7)) {*/
     get_footer();
/*   }*/

?>