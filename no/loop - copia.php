<?php /*

<div id="main" class="group">

	<div id="blog" class="left-col">

		<?php if( have_posts() ): while ( have_posts() ): the_post();   ?>


		<div id="post">
			

	<h2><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h2>
	<div class="byline">Escrit por.. <?php the_author_posts_link(); ?>
		on <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a>	
		
	</div>

	<?php the_excerpt(); ?>
<?php endwhile; else: ?>
	<p><?php _e('No posts where found. sorry!'); ?></p>
<?php endif; ?>

<div class="navi">
	<div class="right">
		<?php previous_posts_link('Anterior'); ?> / <?php next_posts_link('siguiente'); ?>
		
	</div>
	
</div>

		</div>

	</div>	
	
</div>

*/


global $wp_rewrite;
 
$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
$total = $wp_query->max_num_pages;
 
$pag_args = array(
        'total' => $total,
        'current' => $current,
        'type' => 'list',
);
 
if( $wp_rewrite->using_permalinks() ) { // if pretty permalinks
 
   // obtenemos la URL actual
   $url_raw = "http://" .$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
   // eliminamos el parámetro paged
   $url_raw = preg_replace('/\/page\/[0-9]*/','',$url_raw);
   // obtenemos el parámetro post_type
   $pt_current = sanitize_text_field( $_GET['post_type'] );
   // construimos la URL
   $pag_args['base'] = user_trailingslashit( trailingslashit( remove_query_arg(array('s','post_type'),$url_raw)). "page/%#%/", 'paged'). "?s=" .get_query_var('s'). "&post_type=" .$pt_current;
 
} // end if pretty permalink
 
$pags_list = paginate_links($pag_args);
echo $pags_list;


 ?>