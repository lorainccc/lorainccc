<?php

get_header();

	while ( have_posts() ) : the_post();

	 get_template_part( 'template-parts/content', 'search' );

 endwhile; // end of the loop.

get_footer();

?>