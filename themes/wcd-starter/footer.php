<?php
/**
 * The template for displaying the footer.
 *
 * @package White_Canvas_Design_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer has-background-primary" role="contentinfo">
				<div class="footer-wrapper container content-wrapper">
          <?php 
          $post_id = get_field( 'business_info_id', 'option' );
          $email = get_field( 'contact_email', $post_id );
          ?>

          <div class="footer-contact-wrapper">
            <a href="mailto:<?php echo $email; ?>"  class="footer-text"><?php echo $email; ?></a><span class="mr-5"></span>
            <?php get_template_part( 'template-parts/icon/icons-social' ); ?>    
          </div>

          <div class="privacy-terms-wrapper">
            <?php wp_nav_menu( array( 'menu' => 'Privacy Policy' ) ); ?>
          </div>

          <div class="copyright-wrapper">
            <p class="footer-text">Copyright BLANK <?php echo date('Y'); ?>.&nbsp;</span>Website design by <a href="https://whitecanvasdesign.ca" target="_blank" rel="noopener noreferrer">White Canvas Design.</a></p>
          </div>

        </div><!-- .footer-wrapper -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

    <?php wp_footer(); ?>
    <?php get_template_part( 'template-parts/footer/footer-scripts' ); ?>

	</body>
</html>
