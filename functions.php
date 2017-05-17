<?php
/**
 * PostPress functions and definitions
 *
 * @package WordPress
 * @subpackage PostPress 1.0.4
 * @since PostPress 1.0.0
 */

/*
 * Add support for a custom PostPress Settings.
 */

include_once( 'postpress-customizer.php' );
include_once( 'postpress-sanitize.php' );

/*
 * Enqueue scripts for the front end.
 */
function postpress_scripts() {
	wp_enqueue_style( 'postpress-styles.css',  get_template_directory_uri().'/css/postpress-styles.css', '1.0.2', true );
	wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0.4', true );
	wp_enqueue_script( 'ie10-viewport-bug-workaround', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'pp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1.0.0', true );
	wp_enqueue_script( 'pp-scripts', get_template_directory_uri() . '/js/ppscripts.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'postpress_scripts' );

/*
 * PostPress setup.
 */
add_action( 'after_setup_theme', 'postpress_setup' );
function postpress_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'flex-width'    => false,
		'width'         => 285,
		'flex-height'   => false,
		'height'        => 130,
		'header-text' 	=> array( 'site-title', 'site-description' ),
	) );
	$custom_header_args = array(
		'flex-width'    => false,
		'flex-height'   => false,
		'default-image' => get_template_directory_uri() . '/img/header-default.png',
		'uploads'       => true,
		'width'			=> 1704,
		'heigh'			=> 442,
	);
	add_theme_support( 'custom-header', $custom_header_args );
	$custom_bg_args = array(
		'default-color' => 'e0e0e0',
	);
	add_theme_support( 'custom-background', $custom_bg_args );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'postpress' ),
	) );
}

/*
 * Removes the class "tag" from the body_class array.
 * Because it conflicts with Bootstrap 4 .tag class.
 */
add_filter( 'body_class', 'adjust_body_class' );
function adjust_body_class( $classes ) {
	foreach ( $classes as $key => $value ) {
		if ( $value == 'tag' ) unset( $classes[ $key ] );
	}
	return $classes;
}

/**
 * Register widget areas.
 */
//Primary  Sidebar
function postpress_primary_sidebar_widgets_init() {
	$args_sidebar = array(
		'name' => __( 'Primary Sidebar','postpress' ),
		'id' => 'primary-sidebar',
		'description' => __( 'Add widgets here and these will show right below your main menu. Ideal for listing pages, archives or recent posts.','postpress' ),
		'before_widget' => '<div class="widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	);
	register_sidebar( $args_sidebar );
}
add_action( 'widgets_init', 'postpress_primary_sidebar_widgets_init' );

//Secondary  Sidebar
/**/
function postpress_secondary_sidebar_widgets_init() {
	$args_sidebar = array(
		'name' => __( 'Secondary Sidebar','postpress' ),
		'id' => 'secondary-sidebar',
		'description' => __( 'Add widgets here and these will show on the opposite side of your main content. Ideal for listing pages, archives or recent posts.','postpress' ),
		'before_widget' => '<div class="widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	);
	register_sidebar( $args_sidebar );
}
add_action( 'widgets_init', 'postpress_secondary_sidebar_widgets_init' );

//Top  Sidebar
function postpress_top_widgets_init() {
	$args_sidebar = array(
		'name' => __( 'Top Widgets','postpress' ),
		'id' => 'top-widgets',
		'description' => __( 'Add widgets here and these will show on the very top of your site, right above your content. Ideal for search bar.','postpress' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	);
	register_sidebar( $args_sidebar );
}
add_action( 'widgets_init', 'postpress_top_widgets_init' );


if ( ! function_exists( 'excerpt_more_link' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
 * Be sure to change the text domain to the one matching your theme.
 *
 * @since PostPress 1.0.4
 * @link https://github.com/wpaccessibility/a11ythemepatterns/blob/master/read-more-links/functions.php 
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function postpress_excerpt_more( $more ) {
	$link = sprintf( '<a href="%1$s" class="read-more">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading %s', 'postpress' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
		);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'postpress_excerpt_more' );
endif;

/* That's only if JetPack's is installed */
/*
add_theme_support( 'infinite-scroll', array(
	'container' => 'list-posts',
	'footer' => 'post',
) );
*/
/* TODO: http://code.tutsplus.com/tutorials/how-to-create-infinite-scroll-pagination--wp-24873 */

/*
 * Enqueue scripts for comments.
 */
function postpress_enqueue_comment_reply() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'postpress_enqueue_comment_reply' );

/*  This loads a nicer fonts and styles for the WYSIWYG editor
	http://codex.wordpress.org/Function_Reference/add_editor_style
*/
function postpress_add_editor_styles() {
	add_editor_style( 'css/custom-editor-style.css' );
}
add_action( 'after_setup_theme', 'postpress_add_editor_styles' );

/*
 * Set up the content width value based on the theme's design.
 */

if ( ! isset( $content_width ) ) $content_width = 900;

/* END WP Theme Check Recommendations */

?>
