    <footer>
    <?php
      $args = array(
        'theme_location' => 'header-menu',
        'container' => 'nav',
        'after' => '<span class="separator"> | </span>'
      );
      wp_nav_menu($args);
    ?>

      <div class="location">
        <p>6708 NE Sandy Blvd, Portland, OR 97213</p>
        <p>Phone:  (971) 555-1234</p>
      </div>

      <p class="copyright">All rights reserved <?php echo date('Y')?></p>
    </footer>

  <?php wp_footer(); ?>

  </body>
</html>
