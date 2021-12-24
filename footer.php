    <footer>
      <div class="social-media">
        <span>Follow us to see more</span>
        <ul>
          <li>
            <a href=""><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a href=""><i class="fab fa-instagram"></i></a>
          </li>
        </ul>
      </div>

      <div class="container">
        <h2>
          <?php bloginfo('name');?>
          <sub>&copy; <?php echo date('Y'); ?></sub>
        </h2>
        <?php wp_nav_menu(array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-links' )); ?>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
