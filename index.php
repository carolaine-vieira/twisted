<?php get_header(); ?>

    <section id="first-section" style="background-image: url(<?php header_image(); ?>)">
      <div class="social-media">
        <ul>
          <?php get_template_part('template-parts/other/social-icons-box'); ?>
        </ul>
      </div>

      <div class="left-container">
        <?php
          $query = new WP_Query(array( 'post_type' => 'twisted' ));
          if( $query -> have_posts() ) {
            $query -> the_post();          
        ?>
        <h1><?php the_field('blog_first_section_title'); ?></h1>
        <div class="description"><?php the_field('blog_first_section_description'); ?></div>
        <?php
          } else {
        ?>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <div class="description"><?php bloginfo( 'description' ); ?></div>
        <?php
          }
          wp_reset_postdata();
        ?>
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
            _e('Sorry, no posts matched your criteria.', 'textdomain');
          endif; 
        ?> 
      </div>
    </section>

    <div id="pagination">
      <?php 
        $args = array(
          'base'               => '%_%',
          //'format'             => '?paged=%#%',
          'total'              => 1,
          'current'            => 0,
          'show_all'           => false,
          'end_size'           => 1,
          'mid_size'           => 2,
          'prev_next'          => true,
          'prev_text'          => __('« Previous'),
          'next_text'          => __('Next »'),
          'type'               => 'plain',
          'add_args'           => false,
          'add_fragment'       => '',
          'before_page_number' => '',
          'after_page_number'  => ''
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