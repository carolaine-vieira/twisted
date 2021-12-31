        <ul>
          <?php
            $query = new WP_Query(array( 'post_type' => 'twisted' ));
            if( $query -> have_posts() ) {
              $query -> the_post();  
          ?>

          <?php if(get_field('twisted_facebook_link')) { ?>
            <li>
              <a target="_blank" href="<?php the_field('twisted_facebook_link'); ?>"><i class="fab fa-facebook"></i></a>
            </li>
          <?php } ?>
          <?php if(get_field('twisted_instagram_link')) { ?>
            <li>
              <a target="_blank" href="<?php the_field('twisted_instagram_link'); ?>"><i class="fab fa-instagram"></i></a>
            </li>
          <?php } ?>
          <?php if(get_field('twisted_youtube_link')) { ?>
            <li>
              <a target="_blank" href="<?php the_field('twisted_youtube_link'); ?>"><i class="fab fa-youtube"></i></a>
            </li>
          <?php } ?>
          <?php if(get_field('twisted_whatsapp_link')) { ?>
            <li>
              <a target="_blank" href="<?php the_field('twisted_whatsapp_link'); ?>"><i class="fab fa-whatsapp"></i></a>
            </li>
          <?php } ?>
          <?php if(get_field('twisted_tiktok_link')) { ?>
            <li>
              <a target="_blank" href="<?php the_field('twisted_tiktok_link'); ?>"><i class="fab fa-tiktok"></i></a>
            </li>
          <?php } ?>
          <?php if(get_field('twisted_another_website_link')) { ?>
            <li>
              <a target="_blank" href="<?php the_field('twisted_another_website_link'); ?>"><i class="fas fa-globe-americas"></i></a>
            </li>
          <?php } ?>

          <?php
            }
            wp_reset_postdata();
          ?>
        </ul>