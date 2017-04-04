<?php
get_header();
if (have_posts()):
	while (have_posts()) : the_post(); ?>
<article class="post">
	<h3><?php the_title(); ?></h3>
	<hr class="not">
	<p><?php the_content();?></p>

</article>
	<?php endwhile; 

	else: 
		echo '<p>No content found</p>';

	endif; 
get_footer();
?>