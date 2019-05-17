<?php
$args = array(
	'post_type' => 'practice_areas',
	'posts_per_page' => 9,
	'post_status' => 'publish',
	'orderby' => 'date',
	'order' => 'ASC'
);
$post_object = new WP_Query($args);
if($post_object->have_posts()) {
	?>
	<div class="row row-flex mh">
		<?php while($post_object->have_posts()) { $post_object->the_post(); ?>
			<div class="col-xs-12  <?php if(is_front_page()){echo 'col-md-6';} else{echo 'col-md-4';}?>">
				<div class="block-item">
					<div class="card-image">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('post-featured');?>
						</a>
					</div>
					<div class="card-description">
						<h4>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h4>
						<?php
/*						$content = get_the_content($post_object->ID);
						echo wpautop(shorten_text($content, 170));
						*/?><!--
						<a href="<?php /*the_permalink(); */?>" class="read-more-link">Read more <i class="fa fa-arrow-right"></i></a>-->
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
<?php } ?>