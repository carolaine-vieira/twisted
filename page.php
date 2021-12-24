<?php get_header(); ?>

    <section id="first-section" 
      <?php if (has_post_thumbnail()) : ?>
        style="background-image: url(<?php the_post_thumbnail_url(); ?>)" class="first-section-single"
      <?php else: ?>
        style="background: #222 url(<?php header_image(); ?>)" class="first-section-single"
      <?php endif; ?>
    >
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
        <h1><?php the_title(); ?></h1>
        <div class="description">
          <?php the_excerpt(); ?>
        </div>
      </div>
    </section>

    <section id="single-post-container">
      <div class="post-container type-page">
        <?php
          while (have_posts()): the_post();
        ?>
              <div class="post-single">          
                <?php the_content(); ?>
              </div>        

              <div class="permalink-navigation">
                <?php
                  the_post_navigation(array(
                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Next', 'twentyfifteen') . '</span> ' .
                        '<span class="screen-reader-text">' . __('Next post:', 'twentyfifteen') . '</span> ' .
                        '<span class="post-title">%title</span>',
                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('Previous', 'twentyfifteen') . '</span> ' .
                        '<span class="screen-reader-text">' . __('Previous post:', 'twentyfifteen') . '</span> ' .
                        '<span class="post-title">%title</span>',
                  ));
                ?>
              </div>

            <?php
              endwhile;
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