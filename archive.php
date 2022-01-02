<?php get_header(); ?>

    <div id="twisted-archive">
      <section id="first-section" style="background: #222 url(<?php header_image(); ?>)" class="author-page">
        <div class="social-media">
          <?php get_template_part('template-parts/other/social-icons-box'); ?>
        </div>

        <div class="left-container">          
          <?php the_archive_title( '<h1>', '</h1>' ); ?>          
          <div class="description">
            <?php the_archive_description(); ?>
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
              _e('Sorry, no posts matched your criteria.', 'twisted');
            endif; 
          ?>  
        </div>
      </section>

      <div id="pagination">
        <?php 
          the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( 'Previous Posts', 'twisted' ),
            'next_text' => __( 'Next Posts', 'twisted' ),
            )
          ); 
        ?>
      </div>
    </div>

<?php get_footer(); ?>