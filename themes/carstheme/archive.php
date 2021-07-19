<?php
  get_header();
  $terms = get_terms( array(
    'taxonomy' => 'brand',
    'hide_empty' => false,
  ));

    $args = array(
        'post_type' => 'cars',
        'tax_query' => array(
          array(
            'taxonomy' => 'brand',
            'field' => 'slug',
            'terms' => 'brand1',
          )
        ),
    );
    $query = new WP_Query( $args );
 ?>
      <div class="col-12 mt-3 pr-5 pl-5">
        <!-- Brands Slider -->
        <h2>Brands</h2>
        <div id="splide1" class="splide">
          <div class="splide__track">
            <u class="splide__list">
                <a class="splide__slide"  href="<?php echo get_home_url().'/cars/'; esc_attr( add_query_arg( 'brand', "" ) ); ?>">
                  <li class=" tec_item <?php echo $_GET['brand'] == null ? "actn"  : ""; ?>" id="all">
                    <h2 class="font-weight-bold">ALL</h2>
                    <span>All</span>
                  </li>
                </a>

               <?php
                 foreach($terms as $term) :
                ?>
                <a class="splide__slide" id="<?php echo $term->slug  ?>" href="<?php $query->set('paged', 1); echo get_home_url().'/cars/?brand='.$term->slug; ?>">
                  <li class=" tec_item <?php echo $_GET['brand'] == $term->slug ? "actn"  : ""; ?>">
                    <img loading="lazy" src="<?php echo get_template_directory_uri().$term->description; ?>">
                    <span><?php echo $term->name;?></span>
                  </li>
                </a>
                <?php
                   endforeach;
                 ?>
              </u>
            </div>
         </div>
         <!-- List of models -->
     </div>
     <div class="col-12 mt-3 pr-5 pl-5">
       <h2>Models</h2>
       <div class="row pr-2 pl-2">
         <?php
             if(have_posts()) :
                while(have_posts()) :
                   the_post();
         ?>

         <div class="col-md-4 col-md-offset-1 card-post">
             <h3><?php the_field( 'model' ); ?></h3>
             <div class='post-content d-flex flex-direction-column'>
               <?php
                 $field = get_field_object('brand');
                 $value = get_field('brand');
                 $label = $field['choices'][ $value ];
                 echo $label;
              ?>

            </div>
             <?php $image_gallery = get_field( 'image_gallery' ); ?>
             <?php if ( $image_gallery ) : ?>
                 <img class="img-fluid imag-post" src="<?php echo esc_url( $image_gallery['url'] ); ?>" alt="<?php echo esc_attr( $image_gallery['alt'] ); ?>" />
             <?php endif; ?>
             <a href="<?php the_title();?>"><div class="btn_cars" id="cta_main">More details</div></a>
         </div>
        <?php
                 endwhile;
                 ?>
                 <div class="col-md-12 mt-5 mb-5">
                   <?php the_posts_pagination(); ?>
                 </div>
                 <?php

              else :
        ?>
            <div class="col-12 d-flex flex-direction-column align-items-center" id="empty_con">
              <div class="d-flex flex-direction-row" id="fo">
                <img id="im-empt" class="f" src="<?php echo get_template_directory_uri().'/assets/images/empty.svg' ?>" alt="">
              </div>
              <h2 id="text3">No cars were found! Try with another brand.</h2>
            </div>
        <?php
             endif;
        ?>

       </div>

     </div>
       <?php get_footer(); ?>
  </body>
</html>
