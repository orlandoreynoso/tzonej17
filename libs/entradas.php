<?php 

/*====================== ESTO ES PARA LAS CATEGORIAS ===============================*/
// original 
function show_category_posts( $atts ){
        extract(shortcode_atts(array(
                'cat'=> ''
        ), $atts));
        query_posts('cat='.$cat.'&orderby=date&order=ASC&posts_per_page=-1');
        if ( have_posts() ){
                $content = '<ul>';
                while ( have_posts() ){
                        the_post();
                        $content .= the_title('<li><a href="'.get_permalink().'">', '</a></li>', true);
                        previous_image_link();
                        the_excerpt();
                }
                $content .= '</ul>';
        }
        //Reset query
        wp_reset_query();
        return $content;
}
add_shortcode('mostrar_cat', 'show_category_posts');



function ultimas_entradas(){
$args=array(
'post_type' => 'post',
'post_status' => 'publish',
'orderby' => 'ASC',
'posts_per_page' => '10',
//'post_parent__not_in' => '930,2639,1326,1300',
);
  // The Query
$the_query = new WP_Query( $args );    
// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
<div class="list">
    <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a> 
    <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>
        <?php }} else {
        echo 'No hay artículos';    
    // no se encontraron artículos
}
/* Restore original Post Data */
wp_reset_postdata();  
}
/*=====================================*/
function ultimas_paginas(){
/*==================================*/
    /**
     * The WordPress Query class.
     * @link http://codex.wordpress.org/Function_Reference/WP_Query
     *
     */
    $args_10 = array(
        //Post & Page Parameters
        'post__not_in' => array(214),
        'post_parent__not_in'  => array(214),
        'post_type' => 'any',
        'post_status' => 'publish',
        //Order & Orderby Parameters
        'order'               => 'DESC',
        'orderby'             => 'date',
        //Pagination Parameters
        'posts_per_page'         => 4,
        'posts_per_archive_page' => 10,
    );
// $query = new WP_Query( $args_10 );
$args5 =array(
// post_parent    
'post__not_in' => array('930,1326,1300,2639'),
'post_type' => 'page',
'post_status' => 'publish',
'orderby' => 'ASC',
'posts_per_page' => '5',
);
  // The Query
$the_query = new WP_Query( $args_10);    
// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
<div class="list">
    <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a> 
    <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>
        <?php }} else {
        echo 'No hay artículos';    
    // no se encontraron artículos
}
/* Restore original Post Data */
 wp_reset_postdata();  
}
function obtener_categoria($nombre,$id){    ?>
    <div id="titulo_<?php echo $id; ?>">
        <div id="name_cat">
            <h3><?php echo $nombre; ?> &raquo; </h3>
            <h3><?php the_category(); ?></h3>
        </div>
        <div id="date_cat">
            <span class="date">Publicación: <?php the_time('j F, Y'); ?></span>
        </div>        
    </div>
      <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt();  
}
/*==========  Obtener homilia ==============================*/
function obtener_homilia($nombre,$id){    ?>
    <div id="titulo_<?php echo $id; ?>">
        <div id="name_cat">
            <h3><?php echo $nombre; ?> &raquo;</h3>
            <!-- h3><?php the_category(); ?></h3 -->
        </div>
        <div id="date_cat">
            <span class="date">Publicación: <?php the_time('j F, Y'); ?></span>
        </div>        
    </div>
      <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      <!-- h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2 -->
      <p>
        <?php excerpt('22'); ?>...[<a href="<?php the_permalink(); ?>">.....</a>]
      </p>
      <?php // the_excerpt();  
        // excerpt('22');
}
/*============= Obtener Reflexion ==========================*/
function obtener_reflexion($nombre,$id,$dia){    ?>
    <div id="titulo_<?php echo $id; ?>">
        <div id="name_cat">
            <h3><?php echo $nombre; ?> &raquo;</h3>
            <!-- h3><?php the_category(); ?></h3 -->
        </div>
        <div id="date_cat">
            <span class="date">Publicación: <?php the_time('j F, Y'); ?></span>
        </div>        
    </div>
      <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      <!-- h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2 -->
      <p>
        <?php excerpt('22'); ?>...[<a href="<?php the_permalink(); ?>">.....</a>]
      </p>
      <?php // the_excerpt();  
        // excerpt('22');
}
/*==========================================================*/
/*==========================================================*/
function obtener_pagina($nombre,$id){    ?>
    <div id="titulo_<?php echo $id; ?>">
        <div id="name_cat">
            <h3><?php echo $nombre; ?> &raquo;</h3>
            <!-- h3><?php the_category(); ?></h3 -->
        </div>
        <div id="date_cat">
            <span class="date">Publicación: <?php the_time('j F, Y'); ?></span>
        </div>        
    </div>
      <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt();  
}
function create_query($categoria, $perpage){
    $args = array(                
                'cat' => ''.$categoria.'',
                'posts_per_page' => ''.$perpage.'',
    );  
    return $args;
}
function create_page($pagina, $perpage){
    $args = array(                
        'post_type' => 'page',
        'post_parent'       => ''.$pagina.'',         
        'posts_per_page'         => ''.$perpage.'',
    );  
    return $args;
}
function dia($numero){
switch ($numero) {
    case '1':
        echo 'LUNES';
        break;
    case '2':
        echo 'MARTES';
        break;
    case '3':
        echo 'MIÉRCOLES';
        break;
    case '4':
        echo 'JUEVES';
        break;
    case '5':
        echo 'VIERNES';
        break;    
    default:
        echo '>>';
        break;
}
}
?>
