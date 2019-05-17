<div class="inner-row">
	<?php
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 6,
		'post_status' => 'publish',
		'category_name' => 'news',
		'orderby' => 'date',
		'order' => 'DESC'
	);
	$post_object = new WP_Query($args);
	if($post_object->have_posts()) {
		?>
    <div class="row">
			<?php while($post_object->have_posts()) { $post_object->the_post();  ?>
        <div class="blog-col col-xs-12 col-lg-6">
          <div class="blog-item">
            <div class="card-image">
              <a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('news-listing');?>
              </a>
            </div>
            <div class="card-description">
              <small><?php echo get_the_date(get_option( 'date_format' ));?></small>
              <h5>
                <a href="<?php the_permalink(); ?>">
									<?php
									/*if(is_front_page()) {
										echo mb_strimwidth(get_the_title(), 0, 30, '...');
									} else {
										the_title();
									}*/
									echo mb_strimwidth(get_the_title(), 0, 50, '...');
									?>
                </a>
              </h5>
              <a href="<?php the_permalink();?>" class="btn btn-ghost btn-bordered">Read More</a>
            </div>
          </div>
        </div>
			<?php } ?>
    </div>
	<?php } ?>
</div>