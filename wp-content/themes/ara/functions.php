<?php
  // Register Nav Walker class_alias
  // require_once('wp_bootstrap_navwalker.php');
  // Register Custom Navigation Walker
  if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
		// file does not exist... return an error.
		return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
	} else {
		// file exists... require it.
		require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	}

  //Theme support
  function wpb_theme_setup(){
    // Theme Support post image
   add_theme_support('post-thumbnails');


    //nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

    //Post Formats
		add_theme_support('post-formats', array('aside', 'gallery'));
  }

  add_action('after_setup_theme','wpb_theme_setup');

  // Exerpt control length
  function set_excerpt_length() {
    return 25;
   }
   add_filter('excerpt_length' , 'set_excerpt_length');
 
  //Widget Location

  //Customizer File
  require get_template_directory(). '/inc/customizer.php';