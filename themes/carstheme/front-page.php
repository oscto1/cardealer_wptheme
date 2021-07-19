<?php
  get_header();
 ?>

    <div class="col-12 d-flex align-items-center main-content" id="main">
      <p id="text">Hi! this is the homepage of my Cars Dealer template.</p>
      <a href="<?php echo get_home_url(); ?>/cars/"><div id="cta_main">Learn More</div></a>
      <img class="img-fluid" id="img_main" src="<?php echo get_template_directory_uri().'/assets/images/CarMain.png' ?>" alt="">
    </div>
    <?php get_footer(); ?>
  </body>
</html>
