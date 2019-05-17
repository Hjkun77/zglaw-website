<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ZgLaw
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
      <div class="section">
      <div class="section-pad">
      <div class="container">
      <div class="inner-container">

        <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();
          $postId = get_the_ID();
          $the_post_date = get_the_date();
        ?>
            <div class="l-wmb">
              <div class="archive-content">
                <div class="post-header">
                  <h5 class="post-cat"><?php echo get_sub_category();?></h5>
                  <h6 class="post-date"><?php echo $the_post_date ?></h6>
                  <h1 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                  <div class="d-block d-md-none">
			              <?php
			              if ( function_exists( 'coauthors_posts_links' ) ) {
				              get_all_authors($postId);
			              } else {
				              the_author_posts_link();
			              }
			              ?>
                    <a href="#" class="addthis_button_facebook_share" fb:share:layout="link"></a>
                  </div>
                </div>
                <div class="archive-thumbnail">
                  <a href="<?php the_permalink();?>"><?php the_post_thumbnail('single-featured') ?></a>
                </div>
	              <div class="c-container">
		              <?php echo shorten_text(get_the_excerpt(), 200) ?><a href="<?php the_permalink();?>">Keep Reading</a> </p>
                </div>
              </div>
            </div>
        <?php
        endwhile;
        ?>
      </div>
      </div>
      </div>
      </div>
  <?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
