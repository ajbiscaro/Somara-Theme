<?php

/***
* Set the content width based on the theme's design and stylesheet.
***/
if ( ! isset( $content_width ) )
    $content_width = 654; /* pixels */


/***
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which runs
* before the init hook. The init hook is too late for some features, such as indicating
* support post thumbnails.
***/
	
if ( ! function_exists( 'radnorproperty_setup' ) ):
function my_theme_name_setup() {
 
    //Custom functions that act independently of the theme templates
    require( get_template_directory() . '/inc/tweaks.php' );
 
    //Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );
 
	//Enable support for the Aside Post Format
    //add_theme_support( 'post-formats', array( 'aside' ) );
 
	//Enable Featured Thumbnail
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 240, 310 );

 
	//Register area for custom menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'My_Theme_Name' ),
    ) );
}
endif;
add_action( 'after_setup_theme', 'my_theme_name_setup' );
	
/***
* Enqueue scripts and styles
***/
function my_theme_scripts_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bjqs', get_template_directory_uri() . '/css/bjqs.css' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
	
	wp_deregister_script('jquery');
	wp_register_script( 'jquery', ( 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js' ), false, null, true );
    wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script('basic-slider', get_template_directory_uri() . '/js/bjqs-1.3.min.js',array('jquery'));
	wp_enqueue_script('site', get_template_directory_uri() . '/js/site.js');
 
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts_styles' );

/***
* Register Widget Area
***/
function my_theme_widgets_init() {
	register_sidebar(array(
		'name'			=> 'Sidebar Widgets',
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the footer section of the site.', 'twentythirteen' ),
		'before_widget'	=> '<div class="widget">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3>',
		'after_title' 	=> '</h3>'
	));	
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

//Create Slider Post Custom Post Type
add_action( 'init', 'create_slider_item' );
function create_slider_item() {
	$labels = array(
		'name' => 'Slider Item',
		'singular_name' => 'Slider Item',
		'add_new' => 'Add New Item',
		'add_new_item' => 'Add New Slider Item',
		'edit' => 'Edit',
		'edit_item' => 'Edit Slider Item',
		'new_item' => 'New Slider Item',
		'view' => 'View',
		'view_item' => 'View Slider Item',
		'search_items' => 'Search Slider Item',
		'not_found' => 'No Slider Item Item found',
		'not_found_in_trash' => 'No Slider Item found in Trash',
		'parent' => 'Parent Slider Item'		
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_position' => 25,
		'supports' => array(
			'title',
			'thumbnail',
			'editor'
		),
		'menu_icon' => 'dashicons-format-gallery',
		'has_archive' => true
	);
	
    register_post_type( 'slider-item', $args );
}
add_image_size('slider-img-size', '544', '238', true);

// Create Display Shortcode
add_shortcode( 'slider_item', 'slider_item_display' );
function slider_item_display() { 	
	//WP_Query data
    $query = new WP_Query( array(
        'post_type' => 'slider-item'
    ) );
	
	//Display HTML
	if ( $query->have_posts() ) { 
		while ( $query->have_posts() ) : $query->the_post(); ?>
			<li>
				<?php the_post_thumbnail('slider-img-size'); ?>
			</li>
		<?php 
		endwhile;
		wp_reset_postdata();  
	}
}	
?>