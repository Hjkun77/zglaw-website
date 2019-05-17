<?php
/**
 * Template Name: 2 Column Template
 */
get_header();
while(have_posts()) {
	the_post();
	?>
	<div class="template-part template-2-cols">
		<div class="section section-blocks">
			<div class="section-pad">
				<div class="container">
					<div class="section-head">
						<h1><?php the_title(); ?></h1>
					</div>
				  <div class="page-inner-container">
            <div class="post-listing">
						  <?php the_content(); ?>
						  <?php get_template_part( 'template-parts/content', 'legal-watch'); ?>
            </div>
          </div>
				</div>
			</div>
		</div>
	</div>
<?php } get_footer();?>
