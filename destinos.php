<?php 
/*  Template Name: Destinos   */
 get_header();
?>
<section id="content">  <!--- BEGING THE PRINCIPAL SECTION OF ALL CONTENT -->
<div class="wrap-content zerogrid">
<section id="block02">
    <div class="col-2-3">
        <div class="mapeo"><?php the_breadcrumb(); ?></div> 
        <div class="contenido-cartelera">
            <?php // echo '<p>Estoy en destinos.... bla bla bla</p>';  ?>
            <div id="descripcion_categoria">
            <div class="meta">
            <span class="label-cat"> Categoría </span> 
            <span class="icon-cat"> &raquo <?php the_category(', '); ?> &raquo  </span> 
            <span class="label-fecha"><?php the_time(get_option('date_format')); ?></span> 
            </div>            
            </div>
            <div id="m-entradas-home">
            <?php // echo 'Single' ?>                        
            <?php
            while ( have_posts() ) : the_post();
            //          get_template_part( 'content', 'page' );
            the_content();           
            endwhile;
            ?>
            <?php // comments_template(); ?>
            <!-- address>Por <?php the_author_posts_link() ?></address -->
            </div>
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