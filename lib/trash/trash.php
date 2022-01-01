<form action="<?php echo get_template_directory_uri(); ?>/enviar.php" method="post" class="contact_form">
  <label for="inpt_name">Name <span class="required">*</span></label>
  <input type="text" name="inpt_name" id="inpt_name" placeholder="Gisele Mattos" required />

  <label for="inpt_email">Email <span class="required">*</span></label>
  <input
    type="email"
    name="inpt_email"
    id="inpt_email"
    placeholder="gisele.mattos@gmail.com"
    required
  />

  <label for="inpt_message">Message <span class="required">*</span></label>
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