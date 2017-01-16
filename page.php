<?php 
/*
Template Name: Interior-general
 */
 get_header();
?>
<section id="content">  <!--- BEGING THE PRINCIPAL SECTION OF ALL CONTENT -->
  <div class="wrap-content zerogrid">
<section id="block02">
    <div class="col-2-3">
     <div class="mapeo">
          <!-- Breadcrumb -->
          <?php the_breadcrumb(); ?>
          <!-- Fin Breadcrumb -->
     </div> 
      <!-- div class="titulo-cartelera"><h2>Actualidad</h2></div -->
    <div class="contenido-cartelera">
      <?php // echo 'EN PAGE PAGE PAGE PAGE'; ?>
        <div class="clearing"></div>
          <?php
          // Start the loop.
          while ( have_posts() ) : the_post();
            // Include the page content template.
            get_template_part( 'content', 'page' );
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;
          // End the loop.
          endwhile;
          ?>
         <?php  the_content(); ?> 
        <div class="clearing"></div>
         <div class="division-home"><p>&nbsp;</p></div>        
        <div class="clearing"></div>
    </div>
    </div>
     <div class="col-1-5">
      <?php include (TEMPLATEPATH . '/libs/lateral-home.php');  ?>       
      </div>     
</section>
</div>
<div style="clear: both; "></div>
</section>
<?php
/*   if (is_page(7)) {*/

     get_footer();

/*   }*/
?>