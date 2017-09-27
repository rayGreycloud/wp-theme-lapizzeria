<!-- header.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>La Pizzeria</title>
    <?php wp_head(); ?>
  </head>
  <body>

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
              <p>6708 NE Sandy Blvd, Portland, OR 97213</p>
              <p>Phone: (971) 570-4496</p>
            </div>
          </div><!--.social-->
        </div><!--.header-information-->
      </div><!--.container-->
    </header>
    <div class="main-menu">
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
