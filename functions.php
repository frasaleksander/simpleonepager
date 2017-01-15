<?php
/**
 * simpletheme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package simpletheme
 */
ini_set( 'upload_max_size' , '64M' );


if ( ! function_exists( 'simpletheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function simpletheme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on simpletheme, use a find and replace
	 * to change 'simpletheme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'simpletheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Custom Logo
	 */
	/*
	add_theme_support( 'custom-logo', array(
		'width'       => 300,
		'flex-width' => true,
	));*/



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
		'primary' => esc_html__( 'Primary', 'simpletheme' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'simpletheme_custom_background_args', array(
		'default-color' => '#fff',
		'default-image' => '',
	) ) );


}
endif;
add_action( 'after_setup_theme', 'simpletheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function simpletheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'simpletheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'simpletheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function simpletheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'simpletheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'simpletheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'simpletheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function simpletheme_css_scripts() {
	wp_enqueue_style(  'animate', get_template_directory_uri() . '/css/animate.css/animate.css' );
	wp_enqueue_style(  'simpletheme', get_template_directory_uri() . '/stylesheets/style.css' );
}

function simpletheme_js_scripts() {
	wp_enqueue_script( 'simpletheme-js', get_template_directory_uri() . '/build/build.js', array(), '', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'simpletheme_css_scripts' );
add_action( 'wp_enqueue_scripts', 'simpletheme_js_scripts'  );


require_once get_template_directory() . '/inc/constants.php';

require_once get_template_directory() . '/inc/class.ExtClass.php';

/**
 * Include TGM for required plugin instal
 */
require_once get_template_directory() . '/inc/tgm/tgm-plugins.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';

require_once get_template_directory() . '/template-parts/navigation/navigation.php';

/**
 * Customizer additions.
 * Include Kirki for faster workflow
 * Include customizer parts
 */
require_once get_template_directory() . '/inc/wp-customizer/customizer.php';
require_once SIMPLETHEME_CUSTOMIZER_PATH . '/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require_once get_template_directory() . '/inc/jetpack.php';
