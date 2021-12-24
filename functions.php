<?php

add_theme_support('post-thumbnails');
add_theme_support('post-formats', array( 'gallery', 'quote', 'image', 'video' ));

$args = array(
  'flex-width'    => true,
  'width'         => 1500,
  'flex-height'   => true,
  'height'        => 1000,
  'default-image' => get_template_directory_uri() . '/assets/images/first-section-bg.jpg',
);
add_theme_support('custom-header', $args);

function register_my_menus()
{
    register_nav_menus(
        array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu')
    )
    );
}
add_action('init', 'register_my_menus');
