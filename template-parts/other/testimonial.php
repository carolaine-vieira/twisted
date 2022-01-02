        
        <div class="slide">
          <img
            src="<?php echo the_field('testimonial_background_image'); ?>"
            alt="<?php the_field('testimonial_alternative_title'); ?>"
            class="slide-background"
          />
          <div class="slide-description-overlay">
            <div class="slide-description">
              <img
                src="<?php echo the_field('testimonial_icon_image'); ?>"
                alt="<?php the_field('testimonial_alternative_title_icon'); ?>"
              />
              <h3><?php the_field('testimonial_name'); ?> <?php _e("said", "twisted"); ?>:</h3>
              <p><?php the_field('testimonial_testimonial_text'); ?></p>
            </div>
          </div>
        </div>
