<?php
	$args = array(
		'posts_per_page' => 1,
		'meta_key' => '_is_ns_featured_post',
		'meta_value' => 'yes',
		'post_type' => 'post',
		'orderby' => 'date',
		'order' => 'DESC'
	);
	$featured = new WP_Query($args);
	if($featured->have_posts()) {
?>

<div class="row">
	<?php while ($featured->have_posts()) { $featured->the_post();?>
		<?php if(has_post_thumbnail()) { ?>
	<div class="col-md-7 image">
		<?php the_post_thumbnail('featured'); ?>
	</div>
	  <?php } ?>
	<div class="col-md-5 content">
		<small><?php echo get_the_date(get_option( 'date_format' ));?></small>
		<h4><?php the_title(); ?></h4>
		<?php
		$content = get_the_content($featured->ID);
		echo wpautop(shorten_text($content, 170));
		?>
		<a href="<?php the_permalink();?>" class="btn btn-ghost btn-bordered">Read More</a>
	</div>
			<?php }; wp_reset_postdata(); ?>
</div>
<?php } ?>