<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo("encoding")?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head(); ?>
</head>
<body>



<nav class="navbar navbar-expand-lg  navbar-dark bg-color fixed-top">
  <div class="container px-0 px-md-3">
    <div class="toggleCont ps-4 ps-lg-0 pt-2 pt-lg-0">
      <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
        Noda<br>Byg ApS  <!-- Have to do something like image  -->
        <?php
        if(function_exists('the_custom_logo')){
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);
        } 
        
        ?>
        <img src='<?php echo $logo[0] ?>' alt="">
        <div class="div-logo-test">
        <img src="<?php the_field("home_gallery_1");?>" width="60px" alt="">
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    
    <div class="colFix">
      <?php
          wp_nav_menu( array(
              'theme_location'    => 'top-menu',
              'depth'             => 1,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'navbarSupportedContent',
              'menu_class'        => 'navbar-nav  ms-auto',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
          ?>
    </div>
  </div>
</nav>

<div class="container-fluid px-0">

