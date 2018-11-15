<?php
  /* ==============
     DEFAULT FOOTER
     ============== */
?>
    <footer id="footer" class="page-section" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
      <div class="contact-wrap">
        <div id="contact-close">Close Contact Information</div>
        <div class="contact-info">
          <?php
            ex_contact('phone');
            ex_contact('email');
            echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');
          ?>
        </div>
        <div class="contact-map">
          <iframe class="ignore-ratio" width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJZbb6t2_4rlQRY5CwAmPR2h4&key=AIzaSyC4iJs4RinRXukkFLMwRlZJr8TzWKdGLIE" allowfullscreen></iframe>
        </div>
        <p class="copyright">&copy; <?php echo date('Y'); ?> <?php ex_brand('legal'); ?></p>
      </div>
    </footer>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
