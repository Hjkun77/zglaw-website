<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ZgLaw
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function zglaw_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'zglaw_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function zglaw_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'zglaw_pingback_header' );

function shorten_text($s_text, $i_limit = 20, $b_html=FALSE, $s_append='...') {
	$s_text = strip_shortcodes($s_text);
	$s_text = (!$b_html)? strip_tags($s_text):$s_text;
	$i_chars_text = strlen($s_text);
	$s_text = substr($s_text." ",0,$i_limit);
	$s_text .= ($i_chars_text > $i_limit)? $s_append:'';
	$s_text = (!$b_html)? $s_text:titan_close_html($s_text);
	return $s_text;
}
function register_my_menus() {
	register_nav_menus(
		array(
			'new-menu' => __( 'Footer Menu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );

if(!function_exists('bootstrap_pagination')) {
	function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true ) {
		if ( null === $wp_query ) {
			global $wp_query;
		}
		$pages = paginate_links( [
				'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
				'format'       => '?paged=%#%',
				'current'      => max( 1, get_query_var( 'paged' ) ),
				'total'        => $wp_query->max_num_pages,
				'type'         => 'array',
				'show_all'     => false,
				'end_size'     => 3,
				'mid_size'     => 1,
				'prev_next'    => true,
				'prev_text'    => __( 'Prev' ),
				'next_text'    => __( 'Next' ),
				'add_args'     => false,
				'add_fragment' => ''
			]
		);
		if ( is_array( $pages ) ) {
			//$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
			$pagination = '<div class="navigation"><ul class="pagination justify-content-end">';
			foreach ( $pages as $page ) {
				$pagination .= '<li class="page-item"> ' . str_replace( 'page-numbers', 'page-link', $page ) . '</li>';
			}
			$pagination .= '</ul></div>';
			if ( $echo ) {
				echo $pagination;
			} else {
				return $pagination;
			}
		}
		return null;
	}
}

//Disable HTML auto-formatting in the editor like automatic adding of <p> and <br>
function disable_wp_autoformatting($content) {
	global $post;
	if(get_post_meta($post->ID, 'disable_auto_formatting', true) == 1) {
		remove_filter('the_content', 'wpautop');
	}
	return $content;
}
add_filter( "the_content", "disable_wp_autoformatting", 1 );


function get_all_authors($post_id) {
	$coauthors = get_coauthors( $post_id );

	$html = '';

	foreach ($coauthors as $coa) {
		$coa_name = $coa->data->display_name;
		$coa_tag = get_the_author_meta( 'tagline', $coa->data->ID );

		$html .= '<p class="post-meta"><a href="'. get_author_posts_url( $coa->data->ID ) .'">'. $coa_name .'</a> '. $coa_tag .'</p>';
	}

	echo $html;
}

function get_all_authors_with_avatar($post_id) {
	$coauthors = get_coauthors( $post_id );

	$html = '';

	foreach ($coauthors as $coa) {

		$html .= get_avatar( get_the_author_meta( 'user_email', $coa->data->ID ), 133, get_bloginfo('stylesheet_directory'). '/images/blog/profile.jpg', 'Alt' );

	}

	echo $html;
}
function get_all_authors_with_avatar_and_desc($post_id) {
	$coauthors = get_coauthors( $post_id );

	$html = '';

	foreach ($coauthors as $coa) {
		$coa_name = $coa->data->display_name;
		$coa_tag = get_the_author_meta( 'tagline', $coa->data->ID );

		$html .= '
		<div class="author">
	    '. get_avatar( get_the_author_meta( 'user_email', $coa->data->ID ), 133, get_bloginfo('stylesheet_directory'). '/images/blog/profile.jpg' ) .'
	    <div class="author-data">
	    <h5>'.get_the_author_meta( 'display_name', $coa->data->ID ).'</h5><p>'. get_the_author_meta( 'user_description', $coa->data->ID ) .'</p>
</div>
	  </div>';

	}

	echo $html;
}

function get_sub_category(){
	$post_categories = array();
	foreach((get_the_category()) as $category) {
		$post_category = $category->cat_name;
	}
	return $post_category;
}