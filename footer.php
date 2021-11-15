<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>

    <!-- <footer> -->
    <footer class="<?php echo esc_attr( is_page( 'portfolio' ) ? 'd-none' : '' ) ; ?>">
      <div class="container footer-container">
        <div class="copyright">
          <p class="text-white">© 2020 Sachie Hayashi. <br>All rights reserved</p>
        </div>
        <ul class="social-icons list-unstyled">
          <li>
            <a href="https://www.facebook.com/profile.php?id=100005175223062" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/sachie.hayashi/" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="https://github.com/sachie-hayashi" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </li>
        </ul>
      </div>
    </footer>
    
    <?php wp_footer(); ?>
  </body>
</html>