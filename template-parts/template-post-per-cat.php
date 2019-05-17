<?php
/**
 * Template Name: Posts per Category
 */
get_header();
while(have_posts()) {
	the_post();
	?>
	<div class="template-part template-4-cols post-cat-page">
		<div class="section section-blocks">
			<div class="section-pad">
				<div class="container">
				  <div class="page-inner-container">
            <div class="section-head">
              <h1><?php the_title(); ?></h1>
            </div>
					  <?php the_content(); ?>
					  <?php get_template_part( 'template-parts/content', 'lawyers-per-cat'); ?>
          </div>
				</div>
			</div>
		</div>
	</div>
<?php } get_footer();?>
