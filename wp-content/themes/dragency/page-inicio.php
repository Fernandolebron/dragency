<?php
get_header();?>
<div class="container-fluid banner">

   <div>
        <!-- Wrapper for slides -->
         <?php
      if (have_posts()):
        while (have_posts()) : the_post(); ?>

        <div class="carousel-inner">
            <div class="item active">
              <?php query_posts(array(
                  'category_name'  => 'banner',
                  'posts_per_page' => 1
                )); while (have_posts()) : the_post(); ?>
               <a href="#"><img src="" alt="" style="max-width:100%;"><?php the_post_thumbnail('banner-image'); ?></a>
               
                <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?>
            </div>

</div>
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
    <h1 >Nuestros Proyectos</h1>
    <p></p>
    
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
         <?php
      if (have_posts()):
        while (have_posts()) : the_post(); ?>

        <div class="carousel-inner">
            <div class="item active">
              <?php query_posts(array(
                  'category_name'  => 'proyectos1',
                  'posts_per_page' => 1
                )); while (have_posts()) : the_post(); ?>
               <a href="#"><img src="" alt="" style="max-width:100%;"><?php the_post_thumbnail('banner-image'); ?></a>
                <div class="carousel">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="http://placehold.it/1200x400/e67e22/ffffff&text=Projects">
                <div class="carousel">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="http://placehold.it/1200x400/2980b9/ffffff&text=Portfolio">
                <div class="carousel">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="http://placehold.it/1200x400/8e44ad/ffffff&text=Services">
                <div class="carousel">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <ul class="nav nav-pills nav-justified">
           <?php
      if (have_posts()):
        while (have_posts()) : the_post(); ?>

      <?php query_posts(array(
                  'category_name'  => 'proyectos1',
                  'posts_per_page' => 1
                )); while (have_posts()) : the_post(); ?>

            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#"><?php the_title(); ?><small><?php the_excerpt(); ?></small></a></li>
                 <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?>
            <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Lorem ipsum
                dolor sit</small></a></li>
        </ul>
    </div>
    <!-- End Carousel -->
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