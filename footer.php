<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ZgLaw
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-blue">
		<div class="container">
      <div class="foot-content">
        <h4>Office Location</h4>
        <div class="row">
          <div class="col-md-6">
            <p>
              27th Floor, <br />88 Corporate Center 141 Sedeño Street, <br />PO Box CB-12531 Salcedo Village, Makati City 1227, Philippines
            </p>
          </div>
          <div class="col-md-6">
			      <div class="sitemap">
				     <!-- --><?php
/*				      wp_nav_menu( array(
					      'menu' => 'Footer Menu',
					      'theme_location' => 'Footer Menu',
					      'menu_id'        => 'footer-menu',
					      'menu_class' => 'footer-menu'
				      ) );
				      */?>
              <p class="copyright">Copyright © <?php echo date('Y');?> ZGLaw</p>
              <p class="copyright">Design by Frances To | Developed by Harvey Sison</p>
            </div>
          </div>
        </div>
      </div>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
