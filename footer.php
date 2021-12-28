    
    <section id="contact" class="pgScroll">
      <div class="left-container">
        <b>Liked our work?</b>
        <i>Send an email to contact us!</i>
      </div>

      <div class="right-container">
        <form action="enviar.php" method="post" class="contact_form">
          <label for="inpt_name">Name</label>
          <input type="text" name="inpt_name" id="inpt_name" placeholder="Gisele Mattos" required />

          <label for="inpt_email">Email</label>
          <input
            type="email"
            name="inpt_email"
            id="inpt_email"
            placeholder="gisele.mattos@gmail.com"
            required
          />

          <label for="inpt_message">Message</label>
          <textarea
            name="inpt_message"
            id="message"
            cols="30"
            rows="4"
            placeholder="Your message"
            required
          ></textarea>

          <button type="submit" id="send_btn">Send message</button>
        </form>
      </div>
    </section>
    
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
