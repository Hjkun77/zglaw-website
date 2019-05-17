<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ZgLaw
 */

get_header();
?>

	<div id="primary" class="single-page-with-sidebar">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() )  {
			the_post();
			global $post;
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-single-main-content">
              <div class="single-post-profile">
                <div class="profile-image">
	                <?php the_post_thumbnail('single-lawyer'); ?>
                </div>
                <div class="profile-details">
	                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                  <small class="position">
		                <?php echo get_field('position');?>
                  </small>
                  <div class="practice-areas">
                    <h6>Practice Areas:</h6>
		                <?php
		                $areas = get_field('practice_areas');
		                if(!empty($areas)) {
			                echo '<p>'.$areas.'</p>';
		                }
		                ?>
                    <p>

                    </p>
                  </div>
                </div>
              </div>
			        <?php the_content(); ?>
              <a href="#" onclick="window.history.back();" class="back"><i class="fa fa-arrow-left"></i> Go back</a>
            </div>
            <div class="col-sm-6">
              <div class="other-sections">
                <div class="col-testimonials">
                  <?php
                    $field = get_field('content');
                    if(!empty($field)) {
                      echo $field;
                    }
                  ?>
                </div>
                <div class="col-others">
                  <?php
                    $contact = get_field('contact');
                    if(!empty($contact)) {
                      echo '<div class="contact">';
                        echo '<h5>Contact</h5>';
                        echo $contact;
                      echo '</div>';
                    }
                  ?>
                  <?php
                    $accolades = get_field('accolades');
                    if(!empty($accolades)) {
                      echo '<div class="accolades">';
                        echo ' <h5>Accolades</h5>';
                        echo $accolades;
                      echo '</div>';
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article><!-- #post-<?php the_ID(); ?> -->

		</main><!-- #main -->
	</div><!-- #primary -->
		<?php } ?>

<?php
get_footer();



