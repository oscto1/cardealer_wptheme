<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
      wp_head();
     ?>
     <title><?php if(is_home()){echo "Home";}else if(is_archive()){echo 'Cars';}else{echo the_field('model') . " | Cars" ;}?></title>
    </head>
        <body>
          <div class="topnav" id="myTopnav">
            <a href="<?php echo get_home_url(); ?>" id="logo" class="active">CARS DEALER</a>
            <a class="navit <?php echo is_home() ? "activen" : ""; ?>" id="btn_home" href="<?php echo get_home_url(); ?>">Home</a>
            <a class="navit <?php echo !is_home() ? "activen" : ""; ?>" id="btn_cars" href="<?php echo get_home_url(); ?>/cars/">Cars</a>
            <a href="javascript:void(0);" id="icon" class="icon" onclick="nav()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
