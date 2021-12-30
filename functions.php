<?php

function twisted_theme_scripts() {
  wp_enqueue_style('global template', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', 'all');	
  wp_enqueue_script('global scripts', get_template_directory_uri().'/assets/js/script.js', array(), '1.0', 'all');
  wp_enqueue_script('isotope masonry', 'https://npmcdn.com/isotope-layout@3.0.6/dist/isotope.pkgd.js', array(), '3.0.6', 'all');
  wp_enqueue_script('awesome icons', "https://kit.fontawesome.com/eb5e14c15e.js", array(), '5.15', 'all');
}
add_action('wp_enqueue_scripts', 'twisted_theme_scripts');

if( !function_exists('twisted_setup') ) {
  function twisted_setup() {
    // adding theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('image'));
    add_theme_support( 'editor-styles' );

    // custom header menu
    $args = array(
      'flex-width'    => true,
      'width'         => 1500,
      'flex-height'   => true,
      'height'        => 1000,
      'default-image' => get_template_directory_uri() . '/assets/images/first-section-bg.jpg',
    );
    add_theme_support('custom-header', $args);

    // custom menus
    function register_my_menus() {
      register_nav_menus(
        array(
          'header-menu' => __('Header Menu'),
          'footer-menu' => __('Footer Menu')
        )
      );
    }
    add_action('init', 'register_my_menus');

    // remove width & height attributes from images
    function remove_img_attr ($html) {
      return preg_replace('/(width|height)="\d+"\s/', "", $html);
    }
    
    add_filter( 'post_thumbnail_html', 'remove_img_attr' );

    // Custom background color.
    add_theme_support(
      'custom-background',
      array(
        'default-color' => 'd1e4dd',
      )
    );

    // Editor color palette.
    $black     = '#000000';
    $dark_gray = '#28303D';
    $gray      = '#39414D';
    $green     = '#D1E4DD';
    $blue      = '#D1DFE4';
    $purple    = '#D1D1E4';
    $red       = '#E4D1D1';
    $orange    = '#E4DAD1';
    $yellow    = '#EEEADD';
    $white     = '#FFFFFF';
  }
  add_action( 'after_setup_theme', 'twisted_setup' );
}

// Testimonial Custom Post Type
function testimonial_custom_post_type() {
  register_post_type('testimonial',
    array(
      'labels' => array(
        'name'          => __('Testimonials', 'textdomain'),
        'singular_name' => __('Testimonial', 'textdomain'),              
      ),
      'public'      => true,
      'has_archive' => false,
      'rewrite'     => array( 'slug' => 'testimonial' ),
      'menu_icon'   => 'dashicons-slides',
    )
  );
}
add_action('init', 'testimonial_custom_post_type');


