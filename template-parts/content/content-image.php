        
        <div class="post grid-item post-image">
        <?php if (has_post_thumbnail()) : ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
          </a>
        <?php endif; ?>
        </div>
