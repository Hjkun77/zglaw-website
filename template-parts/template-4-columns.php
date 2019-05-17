<?php
/**
 * Template Name: 4 Column Template
 */
get_header();
while(have_posts()) {
	the_post();
	?>
	<div class="template-part bg-grey template-4-cols">
		<div class="section section-blocks">
			<div class="section-pad">
				<div class="container">
					<div class="section-head">
            <h1><?php the_title(); ?></h1>
          </div>
					<?php the_content(); ?>
					<?php get_template_part( 'template-parts/content', 'lawyers'); ?>
				</div>
			</div>
		</div>
	</div>
<?php } get_footer();?>
