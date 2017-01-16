<?php 
// Esto es para aderir una imágen destacada.
add_theme_support('post-thumbnails');
//add_image_size( $name, $width, $height, $crop );
/* devuelve el directorio de stilo de css, y se le asigna a temppath */
define('TEMPPATH',get_bloginfo('stylesheet_directory'));
/*En esto concatenamos la carpeta images*/
define('IMAGES',TEMPPATH. "/images");
// Esto es para aderir una imágen destacada.
add_theme_support('post-thumbnails');
//add_image_size( $name, $width, $height, $crop );


include (TEMPLATEPATH . '/libs/menux.php');
include (TEMPLATEPATH . '/libs/breadcrumb.php');
include (TEMPLATEPATH . '/libs/entradas.php');
include (TEMPLATEPATH . '/libs/widget.php');
include (TEMPLATEPATH . '/libs/paginacion.php');
paginacion();
include (TEMPLATEPATH . '/libs/totop.php');


?>