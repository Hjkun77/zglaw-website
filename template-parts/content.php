<?php
/**
 * Template Name: Featured with posts items Template
 */

get_header();

?>

<div class="template-part">
  <div class="section section-blocks">
    <div class="section-pad section-less-pad">
      <div class="container">
        <div class="section-head">
          <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </div>
        <div class="section-content">
          <div class="page-inner-container">
            <div class="featured-post">
		          <?php get_template_part('inc/template', 'featuredpost'); ?>
            </div>
            <div class="post-listing">
		          <?php get_template_part( 'template-parts/content', 'news'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php  get_footer();?>
