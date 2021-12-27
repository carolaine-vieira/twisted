<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="<?php echo get_avatar_url($user->ID, array('width'=>'16','height'=>'16')); ?>" />
    <title><?php bloginfo('name'); ?></title>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>      
<?php
  if ( is_home() || is_archive() || is_author() ) {
?>
    <script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<?php
  } 
?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js" defer></script>
    <script src="https://kit.fontawesome.com/eb5e14c15e.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=Playfair+Display:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet" />   

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" />    
<?php
  if ( is_single() ) {
?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/single-post.css" />
<?php
  } elseif (is_page()) {
?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/page.css" />
<?php
  }
?>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>  
    <header>
      <h2>
        <span>
          <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </span>
      </h2>

      <nav>
        <?php wp_nav_menu(array( 'theme_location' => 'header-menu' )); ?>
      </nav>
    </header>
