<?php get_header(); ?>

    <section id="first-section" style="background-image: url(<?php header_image(); ?>)">
      <div class="social-media">
        <ul>
          <li>
            <a href=""><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a href=""><i class="fab fa-instagram"></i></a>
          </li>
        </ul>
      </div>

      <div class="left-container">
        <h1><?php 
              if (the_field('blog_first_section_title')) {
                
              } else {
                bloginfo( 'name' );
              }
            ?></h1>
        <div class="description">
          <?php the_field('intro_blog_title'); ?>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi sint
          impedit nesciunt assumenda repellendus commodi aliquam quidem!
          Perferendis tempore asperiores, magni placeat explicabo excepturi
          aperiam unde nobis minima temporibus commodi.
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
          $args = array(
            'posts_per_page' => 15,
          );
          $the_query = new WP_Query($args);
          
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
              $the_query->the_post();
              the_post();
              get_template_part('template-parts/content/content', get_post_format());
            endwhile;
          else:
            _e('Sorry, no posts matched your criteria.', 'textdomain');
          endif;
          
          wp_reset_postdata();
        ?>
      </div>

      <!-- <div class="read-more">Load More Posts</div> -->
    </section>

    <section id="testimonial">
      <div class="slide-container">
        <?php
          $args = array(
            'post_type' => 'testimonial',
            'order'   => 'ASC',
            'posts_per_page' => 6
          );
          $query = new WP_Query($args);

          while ($query -> have_posts()) :
            $query -> the_post();
            get_template_part('template-parts/other/testimonial');
          endwhile;

          wp_reset_postdata();
        ?>
      </div>
    </section>

<?php get_footer(); ?>