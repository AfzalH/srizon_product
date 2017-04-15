<?php
/**
 * Srizon Product functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Srizon_Product
 */

if ( ! function_exists( 'srizon_product_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function srizon_product_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Srizon Product, use a find and replace
		 * to change 'srizon_product' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'srizon_product', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'srizon_product' ),
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
		add_theme_support( 'custom-background', apply_filters( 'srizon_product_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'srizon_product_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function srizon_product_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'srizon_product_content_width', 640 );
}

add_action( 'after_setup_theme', 'srizon_product_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function srizon_product_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'srizon_product' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'srizon_product' ),
		'before_widget' => '<div class="col s12 m6"><section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'srizon_product_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function srizon_product_scripts() {
	$dev        = true;
	$version_no = '1.0.0';
	if ( $dev ) {
		$version_no = microtime( true );
	}
	wp_enqueue_style( 'materialize', get_template_directory_uri() . '/materialize.css', array(), $version_no );
	wp_enqueue_style( 'srizon_product-style', get_stylesheet_uri(), array(), $version_no );
	wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons' );

	wp_enqueue_script( 'materialize', get_template_directory_uri() . '/materialize.js', array( 'jquery' ), $version_no );
	wp_enqueue_script( 'srizon_product-js', get_template_directory_uri() . '/theme.js', array( 'jquery' ), $version_no );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'srizon_product_scripts', 5 );

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
