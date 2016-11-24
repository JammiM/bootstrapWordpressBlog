<?php
  // Register Nav Walker class_alias
  // https://github.com/twittem/wp-bootstrap-navwalker
  require_once('wp_bootstrap_navwalker.php');

  //Theme Support
  function wpb_theme_setup() {

    //adds option to include a thumbnail on a post.
    add_theme_support('post-thumbnails');



    //Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));

  }//wpTheme_setup

  add_action('after_setup_theme','wpb_theme_setup');



  //  Excerpt length Control
  function set_excerpt_length(){
    return 30;
  }//set_excerpt_length

  add_filter('excerpt_length', 'set_excerpt_length' );
