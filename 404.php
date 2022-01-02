<?php get_header(); ?>

    <div id="twisted-error404">
      <section id="first-section" style="background: #222 url(<?php header_image(); ?>)" class="author-page">
        <div class="social-media">
          <?php get_template_part('template-parts/other/social-icons-box'); ?>
        </div>

        <div class="left-container">
          <h1><?php _e("Error 404", "twisted") ?></h1>        	
        </div>
      </section>

      <section id="error404-message">
        <div class="container">
          <i class="fas fa-exclamation"></i>
          <h3><?php _e("This content could not be found.", "twisted") ?></h3>
        </div>
      </section>
    </div>

<?php get_footer(); ?>