    
    <section id="contact" class="pgScroll"
      <?php 
        if( get_field('contact_section_background_image', twisted_config_page()) ) {
      ?>
        style="background-image: url('<?php the_field( 'contact_section_background_image', twisted_config_page() ) ?>')"
      <?php          
        } else {
      ?>
        style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/contact-section-bg.jpg')"
      <?php
        }
      ?>      
    >
      <div class="left-container">
        <b><?php _e("Liked our work?", "twisted") ?></b>
        <i><?php _e("Send an email to contact us!", "twisted") ?></i>
      </div>

      <div class="right-container">
        <?php 
          if( get_field('contact_form_7_shortcode', twisted_config_page()) ) {
            echo do_shortcode( get_field( 'contact_form_7_shortcode', twisted_config_page()) ); 
          } 
        ?>
      </div>
    </section>
    
    <footer>
      <div class="social-media">
        <span><?php _e("Follow us to see more", "twisted") ?></span>
        <ul>
          <?php get_template_part('template-parts/other/social-icons-box'); ?>
        </ul>
      </div>

      <div class="container">
        <h2>
          <?php bloginfo('name');?>
          <sub>&copy; <?php echo date('Y'); ?></sub>
        </h2>
        <?php wp_nav_menu(array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-links' )); ?>
      </div>
    </footer>

    <a id="scroll-top" title="<?php _e("Scroll back to top", "twisted") ?>"><i class="fas fa-chevron-up"></i></a>

    <?php wp_footer(); ?>
  </body>
</html>
