        
        <div class="post grid-item post-image">
        <?php if (has_post_thumbnail()) : ?>
          <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
            <?php echo the_post_thumbnail(); ?>
          </a>
        <?php endif; ?>
        </div>
