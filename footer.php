<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Demo_Swatbit_Seogram_Theme
 */

?>

	<footer id="colophon" class="site-footer page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);">
	<div class="container">
      <div class="row mb-5">
        <div class="col-lg-3 py-3">
          <h3>SEOGram</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis in iusto eligendi iure.</p>

          <div class="social-media-button">
          <?php if ( have_rows( 'footer_social_media', 'option' ) ) : ?>
            <?php while ( have_rows( 'footer_social_media', 'option' ) ) : the_row(); ?>
            <a href="<?php the_sub_field( 'footer_social_url' );  ?>"><?php the_sub_field( 'footer_icon' ); ?></span></a>
            <?php endwhile; ?>
          <?php else : ?>
            <?php // no rows found
              echo 'Please <a hred="'. home_url().'/wp-admin/admin.php?page=acf-options-theme-settings">add</a> social media';
            ?>
          <?php endif; ?>            
          </div>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Help & Support</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Contact Us</h5>
          <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
          <a href="#" class="footer-link">+00 1122 3344 5566</a>
          <a href="#" class="footer-link">seogram@temporary.com</a>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Newsletter</h5>
          <p>Get updates, news or events on your mail.</p>
          <form action="#">
            <input type="text" class="form-control" placeholder="Enter your email..">
            <button type="submit" class="btn btn-success btn-block mt-2">Subscribe</button>
          </form>
        </div>
      </div>

      <p class="text-center" id="copyright">Copyright &copy; 2020.</a></p>
    </div>

	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
