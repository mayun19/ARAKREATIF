<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title><?php bloginfo('name'); ?> | 
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?> </title>
    <link rel="icon" href="img/ara_icon.ico">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" >

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300&amp;subset=cyrillic-ext" rel="stylesheet"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <?php wp_head();?>  
    <style> 
      #porto{
          background:url( <?php echo get_theme_mod('porto_image', get_bloginfo('template_url').'/img/ara-porto.png'); ?>) center center;

      }
    </style>	

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src=" <?php bloginfo('template_url');?>/bootstrap/js/bootstrap.js"></script>
</head>



<body>
  <!--Main layout-->
  <header id="header" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar justify-content-end navbar-expand-md navbar-dark primary-color fixed-top scrolling-navbar" style="">
      <div class="container">
        <!-- Navbar brand -->
        <div class="navbar-brand">
          <span id="header" class="navbar-brand mb-0 h1">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/ara2.PNG">
          </span>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#div" aria-controls="div" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <container class="collapse navbar-collapse" id="div">
          <nav class ="navbar-item ml-auto">
            <?php
            wp_nav_menu( array(
              'theme_location'  => 'primary',
                      'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                      'container'       => 'div',
                      'container_class' => 'collapse navbar-collapse',
                      'container_id'    => 'div',
                      'menu_class'      => 'navbar-nav ml-auto',
                      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'          =>  new WP_Bootstrap_Navwalker(),
                    ) );
            ?>       
          </nav>  
        </container>
      </div>
    </nav>