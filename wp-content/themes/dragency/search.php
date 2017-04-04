<?php
get_header();
?>
<div class="container ">
	<div class="row">
            <div class="col-xs-12 col-md-8 ">
<?php
if (have_posts()): ?>
	<h2> Resultados para : <?php the_search_query();?></h2>
<?php
	while (have_posts()) : the_post(); ?>


              
              <article class="post">
              	
              	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              		<p class="post-info"><?php the_time('F jS, Y')?> | by <a href="<?php
		 echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in 

		 <?php
		 	$categories = get_the_category();
		 	$separator = ", "; 
		 	$output = ''; 

		 	if($categories){

		 		foreach($categories as $category){

		 			$output .= '<a href=" '. get_category_link($category->term_id) .'"> '. $category->cat_name . ' </a>' . $separator;
		 		}

		 		echo  trim($output, $separator); 
		 	}

		 ?>

		</p>
          <?php the_post_thumbnail('small-thumbnail'); ?>
            

	<?php echo the_excerpt();?>


</article>

        
	<?php endwhile; 

	else: 
		echo '<p>Su búsqueda no obtuvo resultados, inténtelo nuevamente. Gracias </p>';

	endif; ?>
	</div> 
	  <div class="col-xs-6 col-md-4 ">
    <p>
      <div class="hidden-sm hidden-md hidden-xs">
      	<?php echo do_shortcode( '[wp_ad_camp_3]' );?>
      </div>  
    
  <div >
    <h3>Lo Último en Ofrezcome</h3>
    <hr class="not">
 <?php 
	/// New opinions
    $readPosts = new wp_query('posts_per_page=3');


	if ($readPosts->have_posts()):
	while ($readPosts->have_posts()) : $readPosts->the_post(); ?>
		<div class="row">
			<div class="col-xs-12 col-sm-6">
		<?php the_post_thumbnail('small-thumbnail'); ?></div>
		<div class="col-xs-12 col-sm-6 paragraph"><h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5></div>
		</div>
		<hr>
	<?php endwhile; 

	else: 
		echo '<p>Nada para mostrar</p>';

	endif; 
	wp_reset_postdata();?>
</div>
<hr>
<div class="hidden-lg">
<h3>Chismiando</h3>
<hr class="not">
<?php 
	/// New opinions
    $newPosts = new wp_query('cat=7');


	if ($newPosts->have_posts()):
	while ($newPosts->have_posts()) : $newPosts->the_post(); ?>
<div class="row">
			<div class="col-xs-12 col-sm-6">
		<?php the_post_thumbnail('small-thumbnail'); ?></div>
		<div class="col-xs-12 col-sm-6 paragraph"><h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5></div>
		</div>
	<?php endwhile; 

	else: 
		echo '<p>Nada para mostrar</p>';

	endif; 
	wp_reset_postdata();?>
</div>
</div>
	</div> 

	</div> 
<?php
get_footer();
?>