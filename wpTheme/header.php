<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset=" <?php bloginfo('charset'); ?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content=" <?php bloginfo('description'); ?>">

    <title>
      <?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <link href=" <?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href=" <?php bloginfo('stylesheet_url'); ?> " rel="stylesheet">

    <?php wp_head(); ?>

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">

          <!--
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
          -->
          <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
               'container_id'      => 'bs-example-navbar-collapse-1',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
       ?>



        </nav>
      </div>
    </div>



    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
        <p class="lead blog-description"><?php bloginfo('description'); ?></p>
      </div>
