<?php
/**
 * Template Name: Contact Form
 */
get_header();

	global $post;
	$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'contact' );
?>
	<div class="contact-section" style="background-image: url('<?php echo $image[0]; ?>')">
		<div class="overlay"></div>
		<div class="container">
      <div class="form-wrapper cf">
        <h1><?php the_title();?></h1>
        <?php the_content(); ?>
      </div>
    </div>
	</div>
<?php get_footer(); ?>

