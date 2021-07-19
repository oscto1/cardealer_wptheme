<?php
  get_header();
  $terms = get_terms( array(
    'taxonomy' => 'brand',
    'hide_empty' => false,
  ));
 ?>
      <div class="col-12 d-flex flex-direction-column align-items-center main-content">
        <div class="d-flex flex-direction-row" id="fo">
          <h1 class="f">4</h1>
          <img class="f" id="fl" src="<?php echo get_template_directory_uri().'/assets/images/flat.svg' ?>" alt="">
          <h1 class="f">4</h1>
        </div>
        <h2 id="text1">Oops... Page not found.</h2>
      </div>
      <?php get_footer(); ?>
    </body>
</html>
