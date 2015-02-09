<?php 

/***
* Creates a nicely formatted and more specific title element text
* for output in head of document, based on current view.
*
* @param string $title Default title text for current view.
* @param string $sep Optional separator.
* @return string Filtered title.
***/
function my_theme_name_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'my_theme_name' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'my_theme_name_title', 10, 2 );


/*** 
 * Add page slug as body class. also include the page parent 
***/
function my_theme_name_body_classes($classes, $class='') {
	global $wp_query;
	if(isset($wp_query->post)){
		$post_id = $wp_query->post->ID; 
		if(is_page($post_id )){
			$page = get_page($post_id);
			if($page->post_parent>0){
				$parent = get_page($page->post_parent);
				$classes[] = 'page-'.sanitize_title($parent->post_title);
			}
			$classes[] = 'page-'.sanitize_title($page->post_title);
		}
	}
	return $classes;
}
add_filter('body_class','my_theme_name_body_classes');

