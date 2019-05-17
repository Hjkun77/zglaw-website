<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ZgLaw
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="pushmenu">

	<header id="masthead" class="site-header fixed-top">
		<div class="container">
      <div class="d-flex flex-row justify-content-between flex-wrap align-items-center">
        <div class="site-branding">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand">
            <img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="ZGLaw" class="img-fluid"/>
          </a>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
          <div class="main-menu">
		      <?php
		      wp_nav_menu( array(
			      'theme_location' => 'menu-1',
			      'menu_id'        => 'primary-menu',
			      'menu_class' => 'accd accd-menu'
		      ) );
		      ?>
          </div>
          <div class="mobile-display">
            <button class="navbar-toggler toggle-menu menu-right push-body" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar top-bar"></span>
              <span class="icon-bar middle-bar"></span>
              <span class="icon-bar bottom-bar"></span>
            </button>

          </div>


        </nav><!-- #site-navigation -->
      </div>
    </div>
	</header><!-- #masthead -->
  <div class="collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="SlideOut">
	  <?php
	  wp_nav_menu( array(
		  'theme_location' => 'menu-1',
		  'menu_id'        => 'primary-menu',
		  'menu_class' => 'accd accd-menu'
	  ) );
	  ?>
  </div>
  <?php if(is_front_page()) { ?>
  <div class="slideshow">
	  <?php
	  while(have_posts()) {
		  the_post();

		  if(is_front_page()) {
			  $args = array(
				  'posts_per_page' => -1,
				  'orderby' => 'date',
				  'order' => 'DESC',
				  'post_type' => 'feedback',
				  'post_status' => 'publish'
			  );
			  $post_object = new WP_Query($args);
			  if($post_object->have_posts()) { ?>
          <ul class="rslides">
	          <?php
	          $i = 0;
	          while($post_object->have_posts()) {
		          $post_object->the_post();
		          $image = wp_get_attachment_url( get_post_thumbnail_id($post_object->post_id) );
		          ?>
              <li style="background-image: url(<?php echo $image?>);">
                <div class="feedback-content">
                  <div class="overlay"></div>
                  <div class="container">
                    <div class="carousel-content">
			                <?php the_content(); ?>
                      <div class="separator"></div>
                      <small>Client feedback, <?php the_title(); ?></small>
                    </div>
                  </div>
                </div>
              </li>
		          <?php $i++; } wp_reset_postdata(); ?>
          </ul>
			  <?php } } }?>
  </div>
  <?php } ?>
	<div id="content">
