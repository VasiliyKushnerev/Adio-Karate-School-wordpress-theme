<?php
/**
 * Adio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Adio
 */

if ( ! function_exists( 'adio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function adio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Adio, use a find and replace
		 * to change 'adio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'adio', get_template_directory() . '/languages' );

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
			'main menu' => esc_html__( 'Main menu', 'adio' ),
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
		add_theme_support( 'custom-background', apply_filters( 'adio_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'adio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function adio_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'adio_content_width', 640 );
}
add_action( 'after_setup_theme', 'adio_content_width', 0 );

function adio__languages(){
    load_theme_textdomain( 'adio', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'adio__languages' );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function adio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'adio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'adio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'adio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function adio_scripts() {
	wp_enqueue_style( 'adio-style', get_stylesheet_uri() );
	wp_enqueue_style( 'adio-general', get_template_directory_uri() . '/layouts/css/style.css', array(), '1.0',false );

    wp_enqueue_script('jquery');
   // wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script( 'adio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'adio-init', get_template_directory_uri() . '/js/init.js', array(), '20151215', true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/libs/aos.js', array(), '20151215', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/libs/slick.min.js', array(), '20151215', true );

	wp_enqueue_script( 'adio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'adio_scripts' );

/**
 * Enqueue scripts and styles for Admin.
 */
function ale_add_scripts($hook) {
    if ( $hook == 'post.php' || $hook == 'post-new.php' || $hook == 'page-new.php' || $hook == 'page.php' ) {
        wp_enqueue_script( 'adio_metaboxes', get_template_directory_uri()  . '/js/admin/metaboxes.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox') );

  }

    wp_enqueue_style( 'adio-admin', get_template_directory_uri() . '/layouts/css/admin.css', array(), '1.0', false );
}
add_action( 'admin_enqueue_scripts', 'ale_add_scripts', 10 );

/**
 * Trim words quotes
 */
add_filter( 'excerpt_length', function(){
    return 17;
} );

/**
 * Removing the quotation mark at the end
 */
add_filter('excerpt_more', function($more) {
    return '...';
});


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Init TGM plagins installer.
 */
require get_template_directory() . '/inc/tgm-list.php';
/**
 * Init Metaboxes Options.
 */
require get_template_directory() . '/inc/metaboxes.php';
/**
 * Init Config theme file.
 */
require get_template_directory() . '/inc/config.php';
/**
 * Init Theme Options Settings.
 */
require get_template_directory() . '/inc/redux-options.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


