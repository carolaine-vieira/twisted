    
    <section id="contact" class="pgScroll"
      <?php
        $query = new WP_Query(array( 'post_type' => 'twisted' ));
        if( $query -> have_posts() ) {
          $query -> the_post(); 

        if(get_field('contact_section_background_image')) { 
      ?>
          style="background-image: url('<?php the_field('contact_section_background_image') ?>')"
        <?php
          } else {
        ?>
          style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/contact-section-bg.jpg')"
        <?php }
        } else {
      ?>
        style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/contact-section-bg.jpg')"
      <?php
        }
        wp_reset_postdata();
      ?>
    >
      <div class="left-container">
        <b>Liked our work?</b>
        <i>Send an email to contact us!</i>
      </div>

      <div class="right-container">
        <?php
          $query = new WP_Query(array( 'post_type' => 'twisted' ));
          if( $query -> have_posts() ) {
            $query -> the_post(); 
            if( get_field('contact_form_7_shortcode') ) {
              echo do_shortcode(get_field('contact_form_7_shortcode'));  
            }
          }
          wp_reset_postdata();
        ?>        
      </div>
    </section>
    
    <footer>
      <div class="social-media">
        <span>Follow us to see more</span>
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

    <a id="scroll-top" title="Scroll back to top"><i class="fas fa-chevron-up"></i></a>

    <?php wp_footer(); ?>
  </body>
</html>
