<?php
get_header();?>

   <section class="boxes">
     <div class="container fluid">
       <div class="row">
        <!-- start servicio 1 -->
         <div class="col-md-4">
            <?php
if (have_posts()):
  while (have_posts()) : the_post(); ?>
          <div class="box">
             <i class="fa fa-camera-retro" aria-hidden="true" ></i>
            <?php query_posts(array(
    'category_name'  => 'servicio1',
    'posts_per_page' => 1
)); while (have_posts()) : the_post(); ?>
           
             <h3><?php the_title(); ?> </h3>
             <p><?php the_content(); ?></p>
           </div>
           <?php endwhile; ?>
  
  <?php wp_reset_query(); ?>
  

    
    <?php endwhile; 

  else: 
    echo '<p>No content found</p>';

  endif; ?>
        

         </div>
<!-- end servicio 1 -->
         <!-- start servicio 1 -->
         <div class="col-md-4">
                   <?php
if (have_posts()):
  while (have_posts()) : the_post(); ?>
          <div class="box">
             <i class="fa fa-video-camera" aria-hidden="true" ></i>
            <?php query_posts(array(
    'category_name'  => 'servicio2',
    'posts_per_page' => 1
)); while (have_posts()) : the_post(); ?>
           
             <h3><?php the_title(); ?> </h3>
             <p><?php the_content(); ?></p>
           </div>
           <?php endwhile; ?>
  
  <?php wp_reset_query(); ?>
  

    
    <?php endwhile; 

  else: 
    echo '<p>No content found</p>';

  endif; ?>
        

         </div>
<!-- end servicio 1 -->

         <!-- start servicio 1 -->
         <div class="col-md-4">
                   <?php
if (have_posts()):
  while (have_posts()) : the_post(); ?>
          <div class="box">
             <i class="fa fa-film" aria-hidden="true" ></i>
            <?php query_posts(array(
    'category_name'  => 'servicio3',
    'posts_per_page' => 1
)); while (have_posts()) : the_post(); ?>
           
             <h3><?php the_title(); ?> </h3>
             <p><?php the_content(); ?></p>
           </div>
           <?php endwhile; ?>
  
  <?php wp_reset_query(); ?>
  

    
    <?php endwhile; 

  else: 
    echo '<p>No content found</p>';

  endif; ?>
        

         </div>
<!-- end servicio 1 -->
       </div> <!-- Row --> 

     </div>

   </section>

<hr>
   
<div class="menuthree">
    <h1 >Empresas que Confían en Nosotros </h1>
    <p></p>
    
    <?php
      if (have_posts()):
        while (have_posts()) : the_post(); ?>
          <div class="item active">
             <div class="row">
               <?php query_posts(array(
                  'category_name'  => 'clientes',
                  'posts_per_page' => -1
                )); while (have_posts()) : the_post(); ?>
                  <div class="col-md-4">
                       <a href="#" class="thumbnail"><img src="" alt="" style="max-width:100%;"><?php the_post_thumbnail('small-thumbnail'); ?></a>
                  </div>
                  <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?>
              </div>
                    
          </div><!-- item active -->
</div><!--.item-->
                 
<div class="menuthree">
    <h1 >Empresas que Confían en Nosotros </h1>
    <p></p>
    
    <?php
      if (have_posts()):
        while (have_posts()) : the_post(); ?>
          <div class="item active">
             <div class="row">
               <?php query_posts(array(
                  'category_name'  => 'clientes',
                  'posts_per_page' => -1
                )); while (have_posts()) : the_post(); ?>
                  <div class="col-md-4">
                       <a href="#" class="thumbnail"><img src="" alt="" style="max-width:100%;"><?php the_post_thumbnail('small-thumbnail'); ?></a>
                  </div>
                  <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?>
              </div>
                    
          </div><!-- item active -->
</div><!--.item-->     
  

<?php get_footer();?>