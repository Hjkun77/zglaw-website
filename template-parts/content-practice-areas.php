<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ZgLaw
 */

?>

<div class="single-page-with-sidebar">
  <article id="post-<?php the_ID(); ?>" class="singlepage-with-fullwidth-image">
		<?php
		global $post;
		$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		?>
    <div class="full-width-image" style="background-image: url(<?php echo $image?>);">
      <div class="overlay"></div>
      <div class="container">
				<div class="page-inner-container">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div>
      </div>
    </div>
    <div class="container">
     <div class="page-inner-container">
       <div class="row">
         <div class="col-md-6 col-single-main-content">
			     <?php the_content(); ?>
         </div>
         <div class="col-sm-6">
           <div class="other-sections">
             <div class="col-testimonials">
					     <?php
					     $field = get_field('testimonials');
					     if(!empty($field)) {
						     echo $field;
					     }
					     ?>
             </div>
             <div class="col-others">
					     <?php
					     $contact = get_field('contact');
					     if(!empty($contact)) {
						     echo '<div class="contact">';
						     echo '<h5>Contact</h5>';
						     echo $contact;
						     echo '</div>';
					     }
					     ?>
					     <?php
					     $accolades = get_field('accolades');
					     if(!empty($accolades)) {
						     echo '<div class="accolades">';
						     echo ' <h5>Accolades</h5>';
						     echo $accolades;
						     echo '</div>';
					     }
					     ?>
             </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </article><!-- #post-<?php the_ID(); ?> -->
</div>
