
<!DOCTYPE html>


<html <?php language_attributes(); ?>>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php bloginfo('name') ?> | 
    <?php is_front_page() ? bloginfo('description') : wp_title();?>
      
    </title>

    

    <!-- font-awesome core CSS -->
    <link href="<?php bloginfo ('template_url');?> /fontawesome/css/font-awesome.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo ('template_url');?> /css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <?php wp_head(); ?>

  </head>

  <body>
   <div class="blog-masthead">
      <div class="container-fluid">
      <header>
      <!--<section class ="logo"> 
        <img src="images/logo.png" alt="logo">-->
      
      <a href="index.html"><img src="<?php bloginfo ('template_url');?> /logo/logo.png" alt="logo"></a>
      <!--</section>-->
        <nav class="blog-nav">
  <!--Nav bar -->

           <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>

       
        </nav><!-- end of nav --> 
        <div class="redes">
      <a href="https://www.facebook.com/DR-Agency-378840682451043/?fref=ts" class="redes"><img src="<?php bloginfo ('template_url');?> /sociales/facebook.png" alt="facebook" height =60px ></a>
      <a href="https://www.instagram.com/dragencyrd/" class="redes"><img src="<?php bloginfo ('template_url');?> /sociales/instagram.png" alt="instagram"  height =60px></a>
      <a href="https://www.youtube.com/channel/UCS4DdOxFeyRA2NWclF-Ol7g" class="redes"><img src="<?php bloginfo ('template_url');?> /sociales/youtube.png" alt="youtube"  height =60px></a>
     </div>
        </header>
      </div>
    </div>
     
    
    <section class="showcase">
     <div class="container">
        <h1>Custom Bootstrap Wordpress Theme</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquam imperdiet odio eget fermentum. Cras a lacus ligula. Curabitur at vestibulum massa. Ut tincidunt lectus lectus, ac placerat nibh congue a. Morbi venenatis consequat tellus, at venenatis lorem feugiat vel. Ut eu metus et diam dapibus ornare eu sit amet sem. Nam lorem dolor, semper vel rutrum et, fermentum in enim. Duis semper auctor eros, at gravida lectus tincidunt tincidunt. Phasellus neque diam, finibus in lectus at, dictum fermentum diam. Proin justo felis, mattis in pulvinar et, sollicitudin ac lacus. Praesent hendrerit laoreet nisl, quis pulvinar velit auctor sed. Nullam eget lectus at nisi sagittis porttitor eu ac arcu. Aliquam cursus nisl sed tellus rutrum euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed pulvinar ex et massa dignissim lobortis.</p>
        <a class="btn btn-primary btn-lg" href="">Read More</a>
     </div>

   </section>