

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
