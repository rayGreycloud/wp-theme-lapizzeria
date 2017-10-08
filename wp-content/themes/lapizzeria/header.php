<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>La Pizzeria</title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <header class="site-header">
      <div class="container">

        <div class="logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img
            src="<?php echo get_template_directory_uri() ?>/img/logo.svg"
            class="logo-image"
            >
          </a>
        </div><!--.logo -->
        <div class="header-information">
          <div class="social-menu">
            <?php
            $args = array(
              'theme_location' => 'social-menu',
              'container' =>   'nav',
              'container_class' =>  'social-menu',
              'container_id' => 'social-menu',
              'link_before' =>  '<span class="sr-text">',
              'link_after' =>   '</span>'
            );
            wp_nav_menu($args);
             ?>
            <div class="address">
              <p><?php echo esc_html(get_option('lapizzeria_location')); ?></p>
              <p>Phone: <?php echo esc_html(get_option('lapizzeria_phone')); ?></p>
            </div>
          </div><!--.social-->
        </div><!--.header-information-->
      </div><!--.container-->
    </header>
    <div class="main-menu">
      <div class="mobile-menu">
        <a href="#" class="mobile"><i class="fa fa-bars"></i> Menu</a>
      </div>
      <div class="navigation container">
        <?php
          $args = array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'container_class' => 'site-nav'
          );
          wp_nav_menu($args);
         ?>
      </div>
    </div>
