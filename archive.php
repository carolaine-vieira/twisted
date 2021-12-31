<?php get_header(); ?>

    <div id="twisted-archive">
      <section id="first-section" style="background: #222 url(<?php header_image(); ?>)" class="author-page">
        <div class="social-media">
          <?php get_template_part('template-parts/other/social-icons-box'); ?>
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
            <?php echo get_the_author_meta('description', $author_id); ?>
          </div>
        </div>
      </section>

      <section id="posts">
        <div id="posts-container" class="grid author-page-posts">  
          <?php 
            if( have_posts() ):
              while( have_posts() ) : 
                the_post();
                get_template_part('template-parts/content/content', get_post_format());
              endwhile; 
            else:
              _e('Sorry, no posts matched your criteria.', 'textdomain');
            endif; 
          ?>  
        </div>
      </section>

      <div id="pagination">
        <?php 
          the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( 'Back', 'textdomain' ),
            'next_text' => __( 'Onward', 'textdomain' ),
            )
          ); 
        ?>
      </div>
    </div>

<?php get_footer(); ?>