<div class="contact js-contact">
  <h3 class="contact__title">Thanks for reaching out.</h3>
  <p class="contact__intro">
    Tell us a bit about your needs and we'll get back to you shortly.
  </p>
  <form class="js-contact-form" method="POST" action="http://127.0.0.1:9000/contact.php">
    <div class="form-line">
      <input type="text" name="contact__name" class="form-input" placeholder="your name" required>
      <input style="position: absolute; top: 0; left: 0; pointer-events:none; opacity: 0;" type="text" name="lastname" class="form-input" placeholder="your lastname" tabindex="9999">
    </div>
    <div class="form-line">
      <input type="email" name="contact__email" class="form-input" placeholder="your email" required>
    </div>
    <div class="form-line">
      <textarea name="contact__comment" id="contact-comment" class="form-input form-textarea contact__comment" 
                placeholder="your comment" required></textarea>
    </div>
    <div class="form-line">
      <input type="submit" class="asg-btn" value="Send">
    </div>
  </form>
  <div class="contact__intro contact__output">
    Thank you for contacting us.
  </div>

</div>
