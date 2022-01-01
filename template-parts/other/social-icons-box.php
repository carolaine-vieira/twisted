        <ul>
          <?php 
            if( get_field('twisted_facebook_link', twisted_config_page()) ) {
          ?>
              <li><a target="_blank" href="<?php echo the_field('twisted_facebook_link', twisted_config_page()); ?>"><i class="fab fa-facebook"></i></a></li>
          <?php
            }
          ?>
          <?php 
            if( get_field('twisted_instagram_link', twisted_config_page()) ) {
          ?>
              <li><a target="_blank" href="<?php echo the_field('twisted_instagram_link', twisted_config_page()); ?>"><i class="fab fa-instagram"></i></a></li>
          <?php
            }
          ?>
          <?php 
            if( get_field('twisted_youtube_link', twisted_config_page()) ) {
          ?>
              <li><a target="_blank" href="<?php echo the_field('twisted_youtube_link', twisted_config_page()); ?>"><i class="fab fa-youtube"></i></a></li>
          <?php
            }
          ?>    
          <?php 
            if( get_field('twisted_whatsapp_link', twisted_config_page()) ) {
          ?>
              <li><a target="_blank" href="<?php echo the_field('twisted_whatsapp_link', twisted_config_page()); ?>"><i class="fab fa-whatsapp"></i></a></li>
          <?php
            }
          ?> 
          <?php 
            if( get_field('twisted_tiktok_link', twisted_config_page()) ) {
          ?>
              <li><a target="_blank" href="<?php echo the_field('twisted_tiktok_link', twisted_config_page()); ?>"><i class="fab fa-tiktok"></i></a></li>
          <?php
            }
          ?>
          <?php 
            if( get_field('twisted_another_website_link', twisted_config_page()) ) {
          ?>
              <li><a target="_blank" href="<?php echo the_field('twisted_another_website_link', twisted_config_page()); ?>"><i class="fas fa-globe-americas"></i></a></li>
          <?php
            }
          ?>
        </ul>