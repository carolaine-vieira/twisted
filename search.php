<?php get_header(); ?>

    <section id="first-section" style="background: #222 url(<?php header_image(); ?>)" class="author-page">
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
        <?php $author_id = get_the_author_meta('ID'); ?>
        <h1>Posts by 
          <?php echo get_the_author_meta('first_name', $author_id); ?> 
          <?php echo get_the_author_meta('last_name', $author_id);?>
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
          $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
          $args = array(
            'posts_per_page' => 2,
            'paged' => $paged,
          );
          global $query;
          $query = new WP_Query($args);
          
          if ($query -> have_posts()) :
            while ($query -> have_posts()) :
              $query -> the_post();
              the_post();
              get_template_part('template-parts/content/content', get_post_format());
            endwhile;
          else:
            _e('Sorry, no posts matched your criteria.', 'textdomain');
          endif;
          
          wp_reset_postdata();
        ?>
      </div>
      
      <!-- <div class="read-more">Load More Posts</div> -->
    </section>

    <div class="ee">
      <?php
        echo paginate_links(
            array(
              'current'=> max(1, get_query_var('paged')),
              'total' => $query -> max_num_pages,
              'mid_size' => 2
          )
        );
      ?>
    </div>

<?php get_footer(); ?>