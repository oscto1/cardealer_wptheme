<?php get_header();

  $pics = array();

  $image_gallery = get_field( 'image_gallery');
  if ( $image_gallery ) :
    // Insert the url image into pics array if image exists
    array_push($pics, esc_url( $image_gallery['url'] ));
  endif;

  $image2 = get_field( 'image2');
  if ( $image2 ) :
    // Insert the url image into pics array if image exists
    array_push($pics, esc_url( $image2['url'] ));
  endif;

  $image3 = get_field( 'image3');
  if ( $image3 ) :
    // Insert the url image into pics array if image exists
    array_push($pics, esc_url( $image3['url'] ));
  endif;
 ?>
  <h2 class="col-md-12 mt-3 cont-left">Car details</h2>
  <div class="col-md-12 d-flex row maincontent">
    <div class="d-flex col-md-6 mt-3 cont-left">
      <h3><?php the_field( 'model' ); ?></h3>
      <h4><?php the_field( 'brand' ); ?></h4>
      <?php if(count($pics) > 1) {?>
      <div id="splide2" class="splide col-12">
       <div class="splide__track">
        <ul class="splide__list">
          <?php foreach($pics as $pic){ ?>
            <li class="splide__slide">
              <img class="img-fluid imgsing" src="<?php echo $pic ?>" alt="">
            </li>
          <?php } ?>
        </ul>
       </div>
     </div>
   <?php } else {?>
      <img class="img-fluid imgsing" src="<?php echo $pics[0] ?>" alt="">
    <?php } ?>
    </div>
    <div class="col-md-5 mt-3">
      <h3>Description</h3>
      <p class="col-md-5 text-wrap"><?php the_field( 'wysiwyg_field' ); ?></p>
      <a target="_blank" href="<?php the_field( 'cta' ); ?>"><div id="cta_main"><?php the_field( 'text_cta' ); ?></div></a>
    </div>
  </div>
  <?php get_footer(); ?>
  </body>
</html>
