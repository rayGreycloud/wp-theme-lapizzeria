<!-- functions.php -->
<?php

function lapizzeria_styles() {
  // adding stylesheets
  wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '7.0' );
  wp_register_style( 'style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );

  // Enqueue style
  wp_enqueue_style( 'normalize');
  wp_enqueue_style( 'style');

}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');

// add menus
function lapizzeria_menus() {
  register_nav_menus(array(
    'header-menu' => __('Header Menu', 'lapizzeria'),
    'social-menu' => __('Social Menu', 'lapizzeria')
  ));
}

add_action('init', 'lapizzeria_menus');
 ?>
