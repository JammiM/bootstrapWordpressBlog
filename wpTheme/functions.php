<?php
  // Register Nav Walker class_alias
  // https://github.com/twittem/wp-bootstrap-navwalker
  require_once('wp_bootstrap_navwalker.php');

  //Theme Support
  function wpb_theme_setup() {
    //Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));

  }//wpTheme_setup

  add_action('after_setup_theme','wpb_theme_setup');
