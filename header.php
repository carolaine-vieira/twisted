<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <?php 
          wp_nav_menu(
            array( 
              'theme_location' => 'header-menu',
              'menu_class'     => 'twisted-home-menu',
            )
          ); 
        ?>        
      </nav>      
    </header>

    <div id="controls">
      <?php 
        get_search_form();

        wp_nav_menu(
          array( 
            'theme_location' => 'header-menu',
            'menu_class'     => 'twisted-sidebar-menu',
          )
        ); 
      ?>  
    </div>
