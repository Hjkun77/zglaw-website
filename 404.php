<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ZgLaw
 */

get_header();
?>

	<div id="primary">
		<main id="main" class="site-main">

			<div class="section error-404 not-found">
        <div class="section-pad">
          <div class="container">
            <div class="section-head">
              <h1 class="page-title">
                <?php esc_html_e( 'SORRY, PAGE NOT FOUND.', 'zglaw' ); ?>
              </h1>
            </div>
            <div class="page-content">
              <p><?php esc_html_e( 'It looks like nothing was found at this location.', 'zglaw' ); ?></p>
            </div><!-- .page-content -->
          </div>
        </div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
