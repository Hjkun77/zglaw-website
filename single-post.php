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

	<div id="primary">
		<main id="main" class="site-main post-single">

			<?php
			while ( have_posts() ) :
				the_post();
				$postId = get_the_ID();
			  ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="container">

            <div class="single-content">
              <div class="section-header aligncenter">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <div class="post-meta-details">
                  <span class="post-date"><?php the_date() ?></span> |
                  <span class="post-author">Posted by <?php the_author_posts_link(); ?></span>
                  <a href="#Comment" class="d-none"><?php comments_number( 'Share your comment', 'One comment', '% comments' ); ?></a>
                </div>
              </div>
              <div class="single-featured">
								<?php the_post_thumbnail('single-featured'); ?>
              </div>
              <div class="single-post-content">
                <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-540564c55662ab68"></script>
								<?php the_content(); ?>
                <a href="<?php echo site_url(); ?>/news-articles"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Back to News and Articles</a>
              </div>
              <div id="Author">
	              <?php get_all_authors_with_avatar_and_desc($postId) ?>
              </div>
            </div>
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
	            comments_template();
            endif;
            ?>
          </div>
        </article><!-- #post-<?php the_ID(); ?> -->



			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
