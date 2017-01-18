<?php 
/* devuelve el directorio de stilo de css, y se le asigna a temppath */
define('TEMPPATH',get_bloginfo('stylesheet_directory'));
/*En esto concatenamos la carpeta images*/
define('IMAGES',TEMPPATH. "/images");
//define('HOME',bloginfo('url' ));
// Esto es para aderir una imágen destacada.
add_theme_support('post-thumbnails');
//add_image_size( $name, $width, $height, $crop );
the_post_thumbnail('thumbnail',1024,1024,true);       // Tamaño de la miniatura 150x150 píxeles 
the_post_thumbnail('medium');          // Tamaño de la mediano 300x300 píxeles
the_post_thumbnail('large');   
the_post_thumbnail('full'); // La resolución original
set_post_thumbnail_size(1024,1024,true );

add_image_size('mscthumb', 1024, 1024, true);
the_post_thumbnail( 'mscthumb');



include (TEMPLATEPATH . '/libs/menux.php');
include (TEMPLATEPATH . '/libs/breadcrumb.php');
include (TEMPLATEPATH . '/libs/entradas.php');
include (TEMPLATEPATH . '/libs/widget.php');
include (TEMPLATEPATH . '/libs/paginacion.php');
paginacion();
include (TEMPLATEPATH . '/libs/totop.php');


?>