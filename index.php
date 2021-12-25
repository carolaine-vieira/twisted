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
        <h1>Best click of your life</h1>
        <div class="description">
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
      <div id="posts-container" class="grid">
        <?php
          $args = array(
            'posts_per_page' => 15,
          );
          $the_query = new WP_Query($args);
          
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
              $the_query->the_post();
              the_post();
              get_template_part('template-parts/content', get_post_format());
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
                  get_template_part('template-parts/testimonial');
          endwhile;

          wp_reset_postdata();
        ?>
      </div>
    </section>

    <section id="contact">
      <div class="left-container">
        <b>Liked our work?</b>
        <i>Send an email to contact us!</i>
      </div>

      <div class="right-container">
        <label for="inpt_name">Name</label>
        <input type="text" name="inpt_name" id="" placeholder="Gisele Mattos" />

        <label for="inpt_email">Email</label>
        <input
          type="email"
          name="inpt_email"
          id=""
          placeholder="gisele.mattos@gmail.com"
        />

        <label for="inpt_message">Message</label>
        <textarea
          name="inpt_message"
          id="message"
          cols="30"
          rows="4"
          placeholder="Your message"
        ></textarea>
      </div>
    </section>

<?php get_footer(); ?>