<?php
/**
 * Template Name: 3 Column Template
 */
get_header();
	while(have_posts()) {
		the_post();
?>
		<div class="template-part">
			<div class="section section-blocks">
				<div class="section-pad">
					<div class="container">
						<div class="page-inner-container">
              <div class="section-head">
                <h1><?php the_title(); ?></h1>
              </div>
							<?php get_template_part( 'template-parts/content', 'areas'); ?>
            </div>
					</div>
				</div>
			</div>
		</div>
<?php } get_footer();?>
