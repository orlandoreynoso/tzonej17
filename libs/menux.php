<?php 

/*      <div class="iconos-01">
            <h2>Tv en línea</h2>
            <a class="linkopacity" href="<?php bloginfo('url'); ?>/tv-en-linea/"><img src="<?php echo IMAGES; ?>/ico_tvenvivo.png"></a>
      </div>
*/



$args = array(
  'menu'            => 'nav',
  'menu_id' => 'navlist',
  'menu_class'      => 'cssmenu zerogrid'
);
    
if (function_exists('register_nav_menus')) 
{
    register_nav_menus($args);
} 

function showMenu(){
    $args = array(
        'menu'            => 'nav',
        'menu_id' => 'navlist',
        'menu_class'      => 'zerogrid cssmenu'
    );
    wp_nav_menu($args);
}
?>