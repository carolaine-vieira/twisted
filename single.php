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

    <section id="single-post-container" class="page-container">
      <div class="post-container">
        <?php
            while (have_posts()): the_post();

            get_template_part('template-parts/content', 'single');
            ?>

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
        
      <div id="post-options">
        <div class="category">
          <?php the_category(); ?>
        </div>

        <div class="item">
          <div class="item-title">Share this post</div>
          <div class="item-content">
            <ul class="share-buttons">
              <li>
                <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" title="Share on Facebook" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li>
                <a class="share-twitter" href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta('twitter'); ?>" title="Tweet this" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a class="share-pinterest" href="//pinterest.com/pin/create/%20button?url=<?php echo urlencode(get_permalink($post->ID)); ?>&description=<?php the_title(); ?>" target="_blank" title="Pin it">
                  <i class="fab fa-pinterest"></i>
                </a>
              </li>
              <li>
                <a class="share-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=Jonaky_Blog" title="Share on Linkedin" target="_blank">
                  <i class="fab fa-linkedin"></i>
                </a>
              </li>
              <li>
                <a class="share-whatsapp" href="https://api.whatsapp.com/send?text=<?php the_title(); ?>: <?php the_permalink(); ?>" data-action="share/whatsapp/share" title="Share on Whatsapp" target="_blank">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </li>
              <li>
                <a class="share-email" href="mailto:type%20email%20address%20here?subject=I%20wanted%20to%20share%20this%20post%20with%20you%20from%20<?php bloginfo('name'); ?>&body=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Email to a friend/colleague" target="_blank">
                  <i class="fas fa-envelope"></i>
                </a>
              </li>
            </ul>
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
            <div class="comments-box">
              <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
              ?>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="item-title">Author Info</div>
          <div class="item-content">
            Author
          </div>
        </div>
      </div> <!-- End of #post-options -->
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