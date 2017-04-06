<?php
get_header();?>

   
 <section class="  slide-wrapper">
        <div class="multiclass container-fluid">
            <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                 </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item item1 active">
                        <div class="fill" style=" background-color:#48c3af;">
                            <div class="inner-content">
                                <div class="carousel-img">
                                    <img src="http://vocefalandoingles.com/wp-content/uploads/2016/09/sofa.png" alt="sofa" class="img img-responsive" />
                                </div>
                                <div class="carousel-desc">

                                    <h2>Modern Designer Sofa</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item item2">
                        <div class="fill" style="background-color:#b33f4a;">
                            <div class="inner-content">
                                <div class="carousel-img">
                                    <img src="http://cdn.homedit.com/wp-content/uploads/2011/08/137CLUB2ST.png" alt="white-sofa" class="img img-responsive" />
                                </div>
                                <div class="carousel-desc">

                                    <h2>Vintage Style Sofa</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item item3">
                        <div class="fill" style="background-color:#7fc2f4;">
                            <div class="inner-content">
                                <div class="col-md-6">

                                    <div class="carousel-img">
                                        <img src="http://vocefalandoingles.com/wp-content/uploads/2016/09/sofa.png" alt="sofa" class="img img-responsive" />
                                    </div>
                                </div>

                                <div class="col-md-6 text-left">
                                    <div class="carousel-desc">

                                        <h2>Stylish Sofa</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
       

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

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://placehold.it/1200x400/16a085/ffffff&text=About Us">
                <div class="carousel-caption">
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
                <img src="http://placehold.it/1200x400/e67e22/ffffff&text=Projects">
                <div class="carousel-caption">
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
                <div class="carousel-caption">
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
                <div class="carousel-caption">
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
            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Lorem
                ipsum dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Lorem ipsum
                dolor sit</small></a></li>
        </ul>
    </div>
    <!-- End Carousel -->
</div>













<hr>
   
<div class="container-fluid menuthree">
    <h1 >Nuestros Proyectos</h1>
    <p></p>
    
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
       

        <div class="carousel-inner">
            <div class="item active">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
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

            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#"><?php the_title(); ?><small><?php the_excerpt(); ?></small></a>
                 <?php endwhile; ?>
            
                  <?php wp_reset_query(); ?>

                  <?php endwhile; 

                  else: 
                      echo '<p>No content found</p>';
                  endif; ?></li>
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