<?php
/**
 * bt-creative functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bt-creative
 */

if ( ! function_exists( 'bt_creative_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bt_creative_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bt-creative, use a find and replace
	 * to change 'bt-creative' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bt-creative', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'bt-creative' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bt_creative_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'bt_creative_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bt_creative_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bt_creative_content_width', 640 );
}
add_action( 'after_setup_theme', 'bt_creative_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bt_creative_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bt-creative' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bt-creative' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bt_creative_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bt_creative_scripts() {
	wp_deregister_script( 'jquery' );
	$jquery_cdn = '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js';
	wp_enqueue_script( 'jquery', $jquery_cdn, array(), '20130115', true );

	wp_enqueue_style( 'bt-creative-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bt-creative-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bt-creative-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, false);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bt_creative_scripts' );

// 	wp_enqueue_script( 'jquery', false, false, false, false );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Custom Post Types
add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
 register_post_type( 'paintings', 
 array(
      'labels' => array(
      	'name' => __( 'paintings' ),
      	'singular_name' => __( 'painting' ),
      	'add_new' => __( 'Add New' ),
      	'add_new_item' => __( 'Add New Painting' ),
      	'edit' => __( 'Edit' ),
      	'edit_item' => __( 'Edit Painting' ),
      	'new_item' => __( 'New Painting' ),
      	'view' => __( 'View Painting' ),
      	'view_item' => __( 'View Painting' ),
      	'search_items' => __( 'Search Paintings' ),
      	'not_found' => __( 'No Paintings found' ),
      	'not_found_in_trash' => __( 'No Paintings found in Trash' ),
      	'parent' => __( 'Parent Painting' ),
      ),
 'public' => true,
      'menu_position' => 4,
      'rewrite' => array('slug' => 'paintings'),
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
      'taxonomies' => array('category', 'post_tag'),
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
     )
  );
	register_post_type( 'drawings', 
 array(
      'labels' => array(
      	'name' => __( 'drawings' ),
      	'singular_name' => __( 'Drawing' ),
      	'add_new' => __( 'Add New' ),
      	'add_new_item' => __( 'Add New Team Drawing' ),
      	'edit' => __( 'Edit' ),
      	'edit_item' => __( 'Edit Drawing' ),
      	'new_item' => __( 'New Drawing' ),
      	'view' => __( 'View Drawing' ),
      	'view_item' => __( 'View Drawing' ),
      	'search_items' => __( 'Search drawings' ),
      	'not_found' => __( 'No drawings found' ),
      	'not_found_in_trash' => __( 'No drawings found in Trash' ),
      	'parent' => __( 'Parent Drawing' ),
      ),
 'public' => true,
      'menu_position' => 4,
      'rewrite' => array('slug' => 'drawings'),
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
      'taxonomies' => array('category', 'post_tag'),
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
     )
  );
	register_post_type( 'photographs', 
 array(
      'labels' => array(
      	'name' => __( 'photographs' ),
      	'singular_name' => __( 'Photograph' ),
      	'add_new' => __( 'Add New' ),
      	'add_new_item' => __( 'Add New Team Photograph' ),
      	'edit' => __( 'Edit' ),
      	'edit_item' => __( 'Edit Photograph' ),
      	'new_item' => __( 'New Photograph' ),
      	'view' => __( 'View Photograph' ),
      	'view_item' => __( 'View Photograph' ),
      	'search_items' => __( 'Search photographs' ),
      	'not_found' => __( 'No photographs found' ),
      	'not_found_in_trash' => __( 'No photographs found in Trash' ),
      	'parent' => __( 'Parent Photograph' ),
      ),
 'public' => true,
      'menu_position' => 4,
      'rewrite' => array('slug' => 'photographs'),
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
      'taxonomies' => array('category', 'post_tag'),
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
     )
  );
}
