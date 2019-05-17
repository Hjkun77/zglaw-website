<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ZgLaw
 */
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
				<?php the_content(); ?>
        <a href="<?php echo site_url(); ?>/news-articles"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Back to News and Articles</a>
      </div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
