<?php get_header(); ?>

    <div id="twisted-page">
      <section id="first-section" 
        <?php if (has_post_thumbnail()) : ?>
          style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
        <?php else: ?>
          style="background: #222 url(<?php header_image(); ?>)"
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

      <section id="posts">
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

<?php get_footer(); ?>