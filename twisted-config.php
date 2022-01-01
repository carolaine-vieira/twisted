<?php
/**
* Template Name: Twisted Configuration Page
*
* @package WordPress
* @subpackage Twisted
* @since Twisted 1.0
*/

?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/simple-form.js"></script>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>  

    <section id="twiste-minimal-template" class="twisted-config-page">
      <div class="container">
        <div class="info">
          <h1>Twisted Config Page</h1>
        </div>
      </div>
    </section>

    <?php wp_footer(); ?>
  </body>
</html>
