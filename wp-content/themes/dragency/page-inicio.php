<?php
get_header();?>

 <div class="carousel fade-carousel slide col-md-12" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item item1 active">
                        <div class="fill" style=" background-color:#7fb537;">
                            <div class="inner-content">
                                <div class="carousel-img">
                                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                    <?php query_posts(array(
                                        'category_name'  => 'banner1',
                                        'posts_per_page' => 1
                                      )); while (have_posts()) : the_post(); ?>
                                     <a href="#" class="thumbnail "><img src="" alt="" style="max-width:100%;"><?php the_post_thumbnail('banner-full'); ?></a>
                                </div>
                                <!--<div class="carousel-desc">

                                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>-->
                
                <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?>

                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="item item2">
                        <div class="fill" style="background-color:#7fb537;">
                            <div class="inner-content">
                                 <div class="carousel-img">
                                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                    <?php query_posts(array(
                                        'category_name'  => 'banner1',
                                        'posts_per_page' => 1
                                      )); while (have_posts()) : the_post(); ?>
                                     <a href="#" class="thumbnail"><img src="" alt="" style="max-width:100%;"><?php the_post_thumbnail('banner-full'); ?></a>
                                </div>
                                <!--<div class="carousel-desc">

                                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>-->
                
                <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?>

                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="item item3">
                        <div class="fill" style="background-color:#7fb537;">
                            <div class="inner-content">
                                 <div class="carousel-img">
                                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                    <?php query_posts(array(
                                        'category_name'  => 'banner1',
                                        'posts_per_page' => 1
                                      )); while (have_posts()) : the_post(); ?>
                                     <a href="#" class="thumbnail"><img src="" alt="" style="max-width:100%;"><?php the_post_thumbnail('banner-full'); ?></a>
                                </div>
                                <!--<div class="carousel-desc">

                                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>-->
                
                <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?>

                                <!--</div>-->
                            </div>
                        </div>
                    </div>
  </div> 
</div>
       

<!-- Servicios part --> 
   <section class="boxes">
   <h1>Servicios</h1>
   <p></p>
    <p></p>
      <div class="container-fluid">
            <div class="row">
                 <!-- start servicio 1 -->
                 <div class="col-md-4">
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
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

                <!-- start servicio 2 -->
                 <div class="col-md-4">
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
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
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
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
<!--End of Servicios part --> 

<!-- Nuestros proyectos --> 
<br>
          <br>
<div class="menuthree">
    <h1 >Nuestros proyectos</h1>
    <p></p>
<div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
         <?php
                  if (have_posts()):
                  while (have_posts()) : the_post(); ?>
              <?php query_posts(array(
                  'category_name'  => 'proyectos1',
                  'posts_per_page' => 1
                )); while (have_posts()) : the_post(); ?>
               <a href="#"><img src="" alt="" style="max-width:100%;"><?php the_post_thumbnail('banner-image'); ?></a>
           <div class="carousel-caption">
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
          </div>
          <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?>
        </div><!-- End Item -->
 
         <div class="item ">
         <?php
                  if (have_posts()):
                  while (have_posts()) : the_post(); ?>
              <?php query_posts(array(
                  'category_name'  => 'proyectos1',
                  'posts_per_page' => 1
                )); while (have_posts()) : the_post(); ?>
               <a href="#"><img src="" alt="" style="max-width:100%;"><?php the_post_thumbnail('banner-image'); ?></a>
           <div class="carousel-caption">
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
          </div>
          <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?>
        </div><!-- End Item -->
        
        <div class="item ">
         <?php
                  if (have_posts()):
                  while (have_posts()) : the_post(); ?>
              <?php query_posts(array(
                  'category_name'  => 'proyectos3',
                  'posts_per_page' => 1
                )); while (have_posts()) : the_post(); ?>
               <a href="#"><img src="" alt="" style="max-width:100%;"><?php the_post_thumbnail('banner-image'); ?></a>
           <div class="carousel-caption">
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
          </div>
          <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?>
        </div><!-- End Item -->
        
        <div class="item ">
         <?php
                  if (have_posts()):
                  while (have_posts()) : the_post(); ?>
              <?php query_posts(array(
                  'category_name'  => 'proyectos4',
                  'posts_per_page' => 1
                )); while (have_posts()) : the_post(); ?>
               <a href="#"><img src="" alt="" style="max-width:100%;"><?php the_post_thumbnail('banner-image'); ?></a>
           <div class="carousel-caption">
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
          </div>
          <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?>
        </div><!-- End Item -->


      <ul class="nav nav-pills nav-justified">
        

            <li data-target="#myCarousel" data-slide-to="0" class="active">
               <?php
                 if (have_posts()):
                  while (have_posts()) : the_post(); ?>

                <?php query_posts(array(
                  'category_name'  => 'proyectos1',
                  'posts_per_page' => 1
                )); while (have_posts()) : the_post(); ?>
                  <a href="#"><?php the_title(); ?><small><?php the_excerpt(); ?></small></a>
                <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?></li>

          <li data-target="#myCarousel" data-slide-to="1">
            <?php
                 if (have_posts()):
                  while (have_posts()) : the_post(); ?>

                <?php query_posts(array(
                  'category_name'  => 'proyectos1',
                  'posts_per_page' => 1
                )); while (have_posts()) : the_post(); ?>
                  <a href="#"><?php the_title(); ?><small><?php the_excerpt(); ?></small></a>
                <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?></li>
          <li data-target="#myCarousel" data-slide-to="2">
            <?php
                 if (have_posts()):
                  while (have_posts()) : the_post(); ?>

                <?php query_posts(array(
                  'category_name'  => 'proyectos3',
                  'posts_per_page' => 1
                )); while (have_posts()) : the_post(); ?>
                  <a href="#"><?php the_title(); ?><small><?php the_excerpt(); ?></small></a>
                <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?></li>
          <li data-target="#myCarousel" data-slide-to="3">
            <?php
                 if (have_posts()):
                  while (have_posts()) : the_post(); ?>

                <?php query_posts(array(
                  'category_name'  => 'proyectos4',
                  'posts_per_page' => 1
                )); while (have_posts()) : the_post(); ?>
                  <a href="#"><?php the_title(); ?><small><?php the_excerpt(); ?></small></a>
                <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?></li>
        </ul>


    </div><!-- End Carousel -->
  </div>
</div>
</div>
<!-- end of projects -->
         <br>
          <br>
         <!--Clientes que confian en nosotros -->        
<div class="menuthree2">
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
     <br>
     <br>
 <!--Ower Clients thoughts --> 
 <div class="container-fluid">
  <div class=" menuthree2">
    <h1>Experiencias de Nuestros Clientes </h1>
  </div>

    <div class="container-fluid broun-block">
          <?php
if (have_posts()):
  while (have_posts()) : the_post(); ?>

  <?php if (is_page('inicio')) { ?>
   

  <?php query_posts(array(
    'category_name'  => 'opinion1',
    'posts_per_page' => 3
)); while (have_posts()) : the_post(); ?>
  <div class="col-md-4" id="">
    <div class="block-text rel zmin">
      <p class="titlelenght">"<?php the_content(); ?>"</p>
      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
  </div>
  <div class="person-text rel">
    <?php the_post_thumbnail('small-thumbnail');?>
  <p class="titlelenght"><?php the_title(); ?></p><br>
</div>

  </div>
  
  <?php endwhile; ?>
  
  <?php wp_reset_query(); ?>
  

    <?php }?>

  <?php endwhile; 

  else: 
    echo '<p>No content found</p>';

  endif; ?>
    </div>
</div>
<?php get_footer();?>