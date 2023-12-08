<?php
wp_footer();
?>
  <footer>
    <div class="footer-container">
      <div class="widgets-container">
        <div id="about" class="widget-holder">
        <?php
            if(is_active_sidebar("about-widget")) {
              dynamic_sidebar("about-widget");
            }
          ?>
        </div>
        <div id="adress" class="widget-holder">
          <?php
            if(is_active_sidebar("adress-widget")) {
              dynamic_sidebar("adress-widget");
            }
          ?>
      </div>
        <div id="social" class="widget-holder">
          <?php
            if(is_active_sidebar("social-widget")) {
              dynamic_sidebar("social-widget");
            }
          ?>
      </div>
    </div>
      <div class="copyright">
          <p class='copy-p'>Copyright © LifeNews 2023</p>
      </div>
    </div>
  </footer>
</body>
</html>
