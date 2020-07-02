
<footer class="text-info myTheme jumbotron ">
  <div class="container">
  <?php
  // wp_nav_menu(
  //   array(
  //   'theme_location' => 'footer-menu',
  //  //  'menu' => 'Top Bar',
  //   'menu_class' => 'top-bar'
  //   )
  // );
  ?>
</div>
 <p class="footerText"><?php echo get_theme_mod('garden_footerMessage'); ?></p>


  <div class="row">
    <i class="fab fa-facebook-square px-2 fa-4x"></i>
    <i class="fab fa-twitter-square px-2 fa-4x"></i>
    <a href="https://chrisawesomeusername.github.io/my-portfolio/">Developer Portfolio</a>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
