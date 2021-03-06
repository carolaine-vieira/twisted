<?php get_header(); ?>

    <section id="first-section" style="background-image: url(<?php header_image(); ?>)">
      <div class="social-media">
        <ul>
          <?php get_template_part('template-parts/other/social-icons-box'); ?>
        </ul>
      </div>

      <div class="left-container">
        <h1>
          <?php 
            if( get_field('blog_first_section_title', twisted_config_page()) ) {
              the_field('blog_first_section_title', twisted_config_page());
            } else {
              bloginfo( 'name' );
            }
          ?>
        </h1> 
        <div class="description">
          <?php
            if( get_field('blog_first_section_description', twisted_config_page()) ) {
              the_field('blog_first_section_description', twisted_config_page());
            } else {
              bloginfo( 'description' );
            }
          ?>
        </div>
      </div>

      <div class="right-container">
        <?php
          $args = array(
            'post_type' => 'testimonial',
            'order'   => 'ASC',
            'posts_per_page' => 3
          );
          $query = new WP_Query($args);

          while ($query -> have_posts()) :
            $query -> the_post();
        ?>
            <div class="review">
              <div class="icon">
                <img
                  src="<?php echo the_field('testimonial_icon_image'); ?>"
                  alt="<?php the_field('testimonial_alternative_title_icon'); ?>"
                />
              </div>
              <div class="information-container">
                <div class="information">
                  <p><b><?php the_field('testimonial_name'); ?></b> &mdash; <?php the_field('testimonial_product_type'); ?></p>
                  <div class="star-rate"></div>
                </div>
              </div>
            </div>
        <?php
          endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </section>
    
    <section id="posts">
      <div id="posts-container" class="grid pgScroll">
        <?php 
          if( have_posts() ):
            while( have_posts() ) : 
              the_post();
              get_template_part('template-parts/content/content', get_post_format());
            endwhile; 
          else:
            _e('Sorry, no posts matched your criteria.', 'twisted');
          endif; 
        ?> 
      </div>
    </section>

    <div id="pagination">
      <?php 
        $args = array(
          'mid_size'           => 2,
          'prev_next'          => true,
          'prev_text'          => __('?? Previous'),
          'next_text'          => __('Next ??'),
        );

        the_posts_pagination( array($args)
        ); 
      ?>
    </div>

    <?php
      $args = array(
        'post_type' => 'testimonial',
        'order'   => 'ASC',
        'posts_per_page' => 6
      );
      $query = new WP_Query($args);

      if( $query -> have_posts() ) :        
    ?>
    <section id="testimonial">
      <div class="slide-container">
        <?php
          while ($query -> have_posts()) :
            $query -> the_post();
            get_template_part('template-parts/other/testimonial');
          endwhile;
        ?>
      </div>
    </section>
    <?php      
      endif;

      wp_reset_postdata();
    ?>

<?php get_footer(); ?>