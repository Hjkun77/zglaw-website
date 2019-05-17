<?php
$args = array(
	'post_type' => 'lawyers',
	'posts_per_page' => 16,
	'post_status' => 'publish',
	'orderby' => 'date',
	'order' => 'DESC',
	'paged' => $paged
);
$post_object = new WP_Query($args);
if($post_object->have_posts()) {
	?>
	<div class="row row-flex mh">
		<?php while($post_object->have_posts()) { $post_object->the_post(); ?>
			<div class="col-xs-12 col-md-4 col-lg-3">
				<div class="block-item">
					<div class="card-image">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('lawyer-listing');?>
						</a>
					</div>
					<div class="card-description">
						<h4>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h4>
						<?php
						$content = get_the_content($post_object->ID);
						echo wpautop(shorten_text($content, 50));
						?>
					</div>
				</div>
			</div>
		<?php }
		?>
	</div>
  <?php echo bootstrap_pagination($post_object); ?>
<?php } ?>