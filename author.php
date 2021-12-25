<?php get_header(); ?>

    <section id="first-section" style="background: #222 url(<?php header_image(); ?>)" class="author-page">
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
        <?php $author_id = get_the_author_meta('ID'); ?>
        <h1>Posts by 
          <?php
            echo get_the_author_meta('first_name', $author_id);
            echo get_the_author_meta('last_name', $author_id);
          ?>
          (@<?php echo get_the_author_meta('nickname', $author_id); ?>)
        </h1>        	
        <div class="description">

        </div>
      </div>
    </section>

    <section id="posts">
      <div id="posts-container" class="grid author-page-posts">
        <?php
        $args = array( 'posts_per_page' => 15 );

        $the_query = new WP_Query($args);
        
        if ($the_query->have_posts()) :
           
            while ($the_query->have_posts()) : $the_query->the_post();
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