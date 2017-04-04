<?php

/*
Template Name: Special Layout
*/

get_header();?>
<div class= "container">
	<?php
if (have_posts()):
	while (have_posts()) : the_post(); ?>
<article class="post">
	<h3><?php the_title(); ?></h3>
	<hr class="not">
	
	
</article>
	<?php endwhile; 

	else: 
		echo '<p>No content found</p>';

	endif; ?>
</div>
	<?php
get_footer();
?>