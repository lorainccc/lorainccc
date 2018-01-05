<?php

get_header();
?>
<div class="row">
	<div class="small-12 columns">
<?php	

 while ( have_posts() ) : the_post();

	 get_template_part( 'template-parts/content', 'search' );

 endwhile; // end of the loop.
?>
	</div>
</div>
	<?php
get_footer();

?>