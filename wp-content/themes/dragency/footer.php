  </div>
  <footer class="blog-footer">
   
      <!--</section>-->
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?> </p>

      <p>Todos los derechos reservados  by <a href="https://softdevrd.com">SoftDev</a>.</p></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <?php wp_footer();?>


     <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scrolling-nav.js"></script>
       <script src="<?php echo get_template_directory_uri(); ?>/js/functionsjs.js"></script>
       <script>
$(document).ready( function() {
    $('#myCarousel').carousel({
    interval:   4000
  });
  
  var clickEvent = false;
  $('#myCarousel').on('click', '.nav a', function() {
      clickEvent = true;
      $('.nav li').removeClass('active');
      $(this).parent().addClass('active');    
  }).on('slid.bs.carousel', function(e) {
    if(!clickEvent) {
      var count = $('.nav').children().length -1;
      var current = $('.nav li.active');
      current.removeClass('active').next().addClass('active');
      var id = parseInt(current.data('slide-to'));
      if(count == id) {
        $('.nav li').first().addClass('active');  
      }
    }
    clickEvent = false;
  });
});
       
       </script>
  </body>
</html>
