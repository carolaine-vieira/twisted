<?php get_header(); ?>

    <div id="twisted-error404">
      <section id="first-section" style="background: #222 url(<?php header_image(); ?>)">
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
          <h1>Error 404</h1>        	
          <div class="description">
            This content could not be found.
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>