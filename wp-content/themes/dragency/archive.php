<?php
get_header();
if (have_posts()):

	?>
     <h2> <?php 
     if( is_category() ){

     	$categories = get_the_category();
 
if ( ! empty( $categories ) ) {
    echo esc_html( $categories[0]->name );   
}
     } elseif (is_tag()){
     	echo "tag";
     } elseif (is_author() ) {
     	echo "Author";
     } elseif(is_page()){
     	echo "Page";
     } elseif(is_day() ){
     	echo "Day archive";
     }elseif (is_month()) {
     	echo "Month";
     }elseif (is_year()) {
     	echo 'year';
     }else{
     	echo "Archives:";
     }

     ?></h2>
<?php
	while (have_posts()) : the_post(); ?>

<div class="row">
            <div class="col-xs-6 col-sm-3">
              
              
           </div>
 </div>
<article class="post">
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	
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
	<p><?php the_content();?></p>
</article>
	<?php endwhile; 

	else: 
		echo '<p>No content found</p>';

	endif; 
get_footer();
?>