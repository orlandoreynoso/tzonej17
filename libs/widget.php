<?php 

/*====== funcion para widgets dinamicos ===========*/
// El apk viene del css
// Tags: white, two-columns, responsive layout
// Text Domain: apk
function apk_register_sidebars(){
    register_sidebar(
        array(
            'name' => __('Sidebar principal','apk'),
             'id' => 'main_sidebar',
             'descripcion' => __('Este es el sidebar principal'.'apk'),
             'before_widget' => '<div id="%1$s" class="widget %2s">',
             'after_widget' => '</div>',
             'before_title' => '<h3 class="widget-title">',
             'after_title' => '</h3>'
            ));
}
add_action('widgets_init' ,'apk_register_sidebars');
    if (function_exists('register_sidebar')) {
        register_sidebar(
            array(
                'name' => 'Suscripcion',
                'id' => 'suscripcion'
        ));
    }
    if (function_exists('register_sidebar')) {
        register_sidebar(
            array(
                'name' => 'Acordion',
                'id' => 'acordion'
        ));
    }
    if (function_exists('register_sidebar')) {
        register_sidebar(
            array(
                'name' => 'Opciones de pago',
                'id' => 'opciones-de-pago'
        ));
    }
    if ( function_exists('register_sidebar') ){
        register_sidebar(array(
        'name' => 'Barra Lateral Inicio',
        'id' => 'solo_inicio',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>'
        ));
    } 
    if ( function_exists('register_sidebar') ) {
        register_sidebar(array(
        'name' => 'Tercera Barra Lateral',
        'id' => 'tercera_barra',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        ));
    }

    if ( function_exists('register_sidebar') ) {
        register_sidebar(array(
        'name' => 'Seleccionar Destino',
        'id' => 'cotizar'
        ));
    }

?>