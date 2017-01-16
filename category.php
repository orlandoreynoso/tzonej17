<?php   
/*  Template Name: Categorias    */
 ?>
<?php get_header(); ?>
<section id="content">  <!--- BEGING THE PRINCIPAL SECTION OF ALL CONTENT -->
<div class="wrap-content zerogrid">
<section id="block02">
    <div class="col-2-3">
              <div id="titulo">
                <div class="mapeo"><?php the_breadcrumb(); ?></div>
              </div>       
            <?php // echo '<p>Estoy en category, es decir el listado de entradas.</p>'; ?>
          <div id="descripcion_categoria">
            <div id="name_cat">
            <!-- span>&nbsp;</span -->
            <!-- a class="cat"><?php the_category (); ?></a -->
            </div>    
            <div id="fecha">
            <span class="icon">&raquo;</span>    
            <span class="date"><?php the_time('j F, Y'); ?></span>  
            </div>
          </div>
            <div class="contenido">
              <?php // echo  'estoy en category';      ?>                
<!-- *********************************** -->      
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="post resume">
              <div class="post-title">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div class="meta">
                  <span class="label-cat"> Categoría </span> 
                  <span class="icon-cat"> &raquo <?php the_category(', '); ?> </span> 
                  <span class="label-fecha"><?php the_time(get_option('date_format')); ?></span> 
                  </div>
              </div><!-- /header -->
              <div class="cont-all">
                <div class="linkit"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>                     
                <div class="the-content"><?php the_excerpt();  ?></div>
                <div class="continuar-read"><a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Continuar leyendo &rarr;','apk'); ?></a></div>
              </div>  
            </article>
<?php endwhile; ?>
<div class="pagination">
  <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
  <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
</div>
<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>
<!-- **************************************** -->                  
            </div>
            </div>
	    <div class="col-1-5">
	      <?php include (TEMPLATEPATH . '/libs/lateral-home.php');  ?>       
	    </div>            
</section>
</div>
<div style="clear: both; "></div>
</section>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>