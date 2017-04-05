
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
    
    <!--<h1 class="text-center">Example 3 - Increase entire navbar height</h1>-->


<!-- begin navigation !-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container-fluid "><!-- please put conainer or delimater OJO not terminated --> 
         
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a href=""> <img class="" src="<?php echo get_template_directory_uri(); ?>/logo/logo.png"  width= "150px"></a>
           
        </div>
        <div id="navbar" class="collapse navbar-collapse  ">
          
              <div class="nav navbar-nav navbar-left">
                   <!-- Adding Wordpress code for real pages --> 
                   <?php
                   wp_nav_menu( array(
                       'menu'              => 'primary',
                       'theme_location'    => 'primary',
                       'depth'             => 2,
                       'menu_class'        => 'nav navbar-nav')
                       
                   );
               ?>
                
          </div>
            <div class="nav navbar-nav navbar-right social hidden-sm hidden-md hidden-xs">
                 <a href=""> <img class="" src="<?php echo get_template_directory_uri(); ?>/sociales/facebook.png"  width= "60px"></a>

                 <a href=""><img class="" src="<?php echo get_template_directory_uri(); ?>/sociales/instagram.png"  width= "60px"></a>

                 <a href=""><img class="" src="<?php echo get_template_directory_uri(); ?>/sociales/youtube.png" width= "60px"></a>
                 </*?php get_search_form();?*/-->
                

               </div>
              
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>
  
  
    <section class="showcase">
     <div class="container">
        <h1>Custom Bootstrap Wordpress Theme</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquam imperdiet odio eget fermentum. Cras a lacus ligula. Curabitur at vestibulum massa. Ut tincidunt lectus lectus, ac placerat nibh congue a. Morbi venenatis consequat tellus, at venenatis lorem feugiat vel. Ut eu metus et diam dapibus ornare eu sit amet sem. Nam lorem dolor, semper vel rutrum et, fermentum in enim. Duis semper auctor eros, at gravida lectus tincidunt tincidunt. Phasellus neque diam, finibus in lectus at, dictum fermentum diam. Proin justo felis, mattis in pulvinar et, sollicitudin ac lacus. Praesent hendrerit laoreet nisl, quis pulvinar velit auctor sed. Nullam eget lectus at nisi sagittis porttitor eu ac arcu. Aliquam cursus nisl sed tellus rutrum euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed pulvinar ex et massa dignissim lobortis.</p>
        <a class="btn btn-primary btn-lg" href="">Read More</a>
     </div>

   </section>