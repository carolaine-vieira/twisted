<?php get_header(); ?>

    <div id="twisted-single-post">
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

      <section id="posts" class="page-container">
        <div class="post-container">
          <?php
            while (have_posts()):
              the_post();
              get_template_part('template-parts/content/content', 'single');
            endwhile;
          ?>
        </div> 
          
        <div id="post-options">
          <div class="category">
            <?php the_category(); ?>
          </div>

          <div class="item">
            <div class="item-title">Share this post</div>
            <div class="item-content">
              <?php get_template_part('template-parts/other/share-buttons'); ?>
            </div>
          </div>

          <div class="item">
            <div class="item-title">Post Info</div>
            <div class="item-content post-info">
              <div class="post-date">
                <span class="title">Posted on: </span>
                <?php the_date(); ?>
              </div>
              <div class="post-tags">
                <span class="title">Tags: </span>
                <?php the_tags(""); ?> 
                <!-- , "<span>/</span>" -->
              </div>
              <div class="post-shortlink">
                <span class="title">Short URL: </span>
                <span class="short"><?php echo wp_get_shortlink(); ?></span>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="item-title">Comments</div>
            <div class="item-content">
              <a href="#scroll-comment">See comments</a>
            </div>
          </div>

          <div class="item">
            <div class="item-title">Author Info</div>
            <div class="item-content">
            <?php the_author_posts_link(); ?>
            </div>
          </div>

          <div class="permalink-navigation">
            <?php
              the_post_navigation(array(
                'next_text' => '' . __('<b>Next:</b> ', 'twentyfifteen') . '</span> ' .
                    '<span class="screen-reader-text">' . __('Next post:', 'twentyfifteen') . '</span> ' .
                    '<span class="post-title">%title</span>',
                    
                'prev_text' => '' . __('<b>Previous:</b> ', 'twentyfifteen') . '</span> ' .
                    '<span class="screen-reader-text">' . __('Previous post:', 'twentyfifteen') . '</span> ' .
                    '<span class="post-title">%title</span>',
              ));
            ?>
          </div>
        </div> <!-- End of #post-options -->
      </section>

      <div class="comments-box">
        <div id="scroll-comment"></div>
        <?php
          if (comments_open() || get_comments_number()) :
              comments_template();
          endif;
        ?>
      </div>
    </div>

<?php get_footer(); ?>