<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ZgLaw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="section section-default">
    <div class="section-pad">
      <div class="container">
        <div class="section-head">
	        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div>
        <?php
          if(has_post_thumbnail()) {
        ?>
        <div class="template-fw-image">
		      <?php the_post_thumbnail('fw-image'); ?>
        </div>
        <?php } ?>
        <div class="template-content">
		      <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
