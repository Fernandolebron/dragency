
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
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav>
      </div>
    </div>
    <section class="showcase">
     <div class="container">
        <h1>Custom Bootstrap Wordpress Theme</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent aliquam imperdiet odio eget fermentum. Cras a lacus ligula. Curabitur at vestibulum massa. Ut tincidunt lectus lectus, ac placerat nibh congue a. Morbi venenatis consequat tellus, at venenatis lorem feugiat vel. Ut eu metus et diam dapibus ornare eu sit amet sem. Nam lorem dolor, semper vel rutrum et, fermentum in enim. Duis semper auctor eros, at gravida lectus tincidunt tincidunt. Phasellus neque diam, finibus in lectus at, dictum fermentum diam. Proin justo felis, mattis in pulvinar et, sollicitudin ac lacus. Praesent hendrerit laoreet nisl, quis pulvinar velit auctor sed. Nullam eget lectus at nisi sagittis porttitor eu ac arcu. Aliquam cursus nisl sed tellus rutrum euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed pulvinar ex et massa dignissim lobortis.</p>
        <a class="btn btn-primary btn-lg" href="">Read More</a>
     </div>

   </section>