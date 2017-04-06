
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

    <!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo ('template_url');?> /css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php bloginfo ('template_url');?> /css/scrolling-nav.css" rel="stylesheet">

       <!-- font-awesome core CSS -->
    <link href="<?php bloginfo ('template_url');?> /fontawesome/css/font-awesome.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo ('template_url');?> /css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <?php wp_head(); ?>

  </head>
   <body  <?php body_class(); ?>>

  
    
    <!--<h1 class="text-center">Example 3 - Increase entire navbar height</h1>-->

 <!-- begin navigation !-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container-fluid "><!-- please put conainer or delimater OJO not terminated --> 
         
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class=" page-scroll" href=""> <img class="" src="<?php echo get_template_directory_uri(); ?>/logo/logo.png"  width= "150px"></a>
           
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
                 <a href="https://www.facebook.com/DR-Agency-378840682451043/?fref=ts"> <img class="" src="<?php echo get_template_directory_uri(); ?>/sociales/facebook.png"  width= "60px"></a>

                 <a href="https://www.instagram.com/dragencyrd/"><img class="" src="<?php echo get_template_directory_uri(); ?>/sociales/instagram.png"  width= "60px"></a>

                 <a href="https://www.youtube.com/channel/UCS4DdOxFeyRA2NWclF-Ol7g"><img class="" src="<?php echo get_template_directory_uri(); ?>/sociales/youtube.png" width= "60px"></a>
                 </*?php get_search_form();?*/-->
                

               </div>
              
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>

 <div class="container-fluid">
