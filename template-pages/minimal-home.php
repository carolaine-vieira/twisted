<?php
/**
* Template Name: Minimal Home
*
* @package WordPress
* @subpackage Twisted
* @since Twisted 1.0
*/

?>

<?php get_header(); ?>

    <section id="twiste-minimal-template" style="background-image: url(<?php header_image(); ?>)">
      <div class="container">
        <div class="info">
          <h1><?php bloginfo( 'name' ); ?></h1>
          <div class="subtitle"><?php bloginfo( 'description' ); ?></div>
          <div class="blog-link">
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php _e("Enter site", "twisted") ?></a>
          </div>
        </div>
      </div>

      <div class="social-links">
        <?php get_template_part('template-parts/other/social-icons-box'); ?>
      </div>
    </section>

    <?php wp_footer(); ?>
  </body>
</html>
