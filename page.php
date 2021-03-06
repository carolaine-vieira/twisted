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
          <?php get_template_part('template-parts/other/social-icons-box'); ?>
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
          <?php
            endwhile;
          ?>
        </div> 
      </section>

      <?php if (comments_open() || get_comments_number()) : ?>
        <div class="comments-box pgScroll">
          <?php comments_template(); ?>
        </div>
      <?php endif; ?>
    </div>     

<?php get_footer(); ?>