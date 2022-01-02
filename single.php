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
          <?php get_template_part('template-parts/other/social-icons-box'); ?>
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
            <div class="item-title"><?php _e("Share this post", "twisted"); ?></div>
            <div class="item-content">
              <?php get_template_part('template-parts/other/share-buttons'); ?>
            </div>
          </div>

          <div class="item">
            <div class="item-title"><?php _e("Post Information", "twisted"); ?></div>
            <div class="item-content post-info">
              <div class="post-date">
                <span class="title"><?php _e("Posted on", "twisted"); ?>: </span>
                <?php the_date(); ?>
              </div>
              <?php 
                if(has_tag()) {
              ?>
              <div class="post-tags">
                <span class="title"><?php _e("Tags", "twisted"); ?>: </span>                
                <?php the_tags(""); ?>
              </div>
              <?php
                } 
              ?> 
              <div class="post-shortlink">
                <span class="title"><?php _e("Short URL", "twisted"); ?>: </span>
                <span class="short"><?php echo wp_get_shortlink(); ?></span>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="item-title"><?php _e("Comments", "twisted"); ?></div>
            <div class="item-content comments">
              <span class="title"><?php comments_number() ?></span>
              <a href="#scroll-comment"><?php _e("Write a response", "twisted"); ?></a>
            </div>
          </div>

          <div class="item">
            <div class="item-title"><?php _e("Author", "twisted"); ?></div>
            <div class="item-content author">
            <?php the_author_posts_link(); ?>
            </div>
          </div>

          <div class="permalink-navigation">
            <?php
              the_post_navigation(array(
                'prev_text' => '<span>' . __('Previous:', 'twisted') . '</span> ' .
                    '<span class="screen-reader-text">' . __('Previous post:', 'twisted') . '</span> ' .
                    '<span class="post-title">%title</span>',
                    
                'next_text' => '<span>' . __('Next:', 'twisted') . '</span> ' .
                    '<span class="screen-reader-text">' . __('Next post:', 'twisted') . '</span> ' .
                    '<span class="post-title">%title</span>',
              ));
            ?>
          </div>
        </div> <!-- End of #post-options -->
      </section>

      <div class="comments-box pgScroll">
        <div id="scroll-comment"></div>
        <?php
          if (comments_open() || get_comments_number()) :
              comments_template();
          endif;
        ?>
      </div>
    </div>

<?php get_footer(); ?>