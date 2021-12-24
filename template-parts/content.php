        <div class="post grid-item">
        <?php if (has_post_thumbnail()) : ?>
          <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
            <?php echo the_post_thumbnail(); ?>
          </a>
        <?php endif; ?>        
          <div class="post-description">
            <h3><a href="<?php the_permalink(); ?>"> <?php the_title();?> </a></h3>
            <?php the_excerpt(); ?>
          </div>
        </div>
