<?php
get_header();
/**
 * Template Name: Fullwidth Image and Content
 */

	while(have_posts()) {
		the_post();
	?>
    <div class="template-section">
	    <?php
	    if(has_post_thumbnail()) {
		    ?>
        <div class="template-fw-image">
			    <?php the_post_thumbnail('fw-image'); ?>
        </div>
	    <?php } ?>
      <div class="container">
        <div class="template-content">
			    <?php the_content(); ?>
        </div>
      </div>
    </div>

<?php } get_footer(); ?>
