<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ZgLaw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="section section-home-about bg-blue">
    <div class="container">
      <div class="section-pad">
         <div class="inner">
           <div class="section-title">
             <h1><?php the_title()?></h1>
           </div>
           <div class="section-content">
	           <?php the_content()?>
           </div>
         </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 order-md-12" id="side">
        <div class="home-sidebar">
          <div class="ratings section">
            <div class="section-pad section-less-pad">
              <div class="section-content">
				        <?php
				        echo get_field('content');
				        ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <div class="section section-blocks">
          <div class="section-pad section-less-pad no-pad-bottom">
            <div class="inner-row">
              <h2 class="h1">Practice Areas</h2>
							<?php get_template_part( 'template-parts/content', 'areas'); ?>
            </div>
          </div>
        </div>
        <div class="section section-blocks section-blog section-less-pad home-news">
          <div class="section-pad">
            <h2 class="h1">Recent Blogs</h2>
						<?php get_template_part( 'template-parts/content', 'news'); ?>
          </div>
        </div>
        <div class="section section-blocks section-blog section-less-pad section-last">
          <div class="section-pad">
            <h2 class="h1">Legal Watch</h2>
			      <?php get_template_part( 'template-parts/content', 'home-legal-watch'); ?>
          </div>
        </div>
      </div>

    </div>
  </div>

</article>
