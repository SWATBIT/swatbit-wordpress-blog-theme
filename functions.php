<?php
/**
 * Demo Swatbit Seogram Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Demo_Swatbit_Seogram_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function demo_swatbit_seogram_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Demo Swatbit Seogram Theme, use a find and replace
		* to change 'demo-swatbit-seogram-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'demo-swatbit-seogram-theme', get_template_directory() . '/languages' );

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

	// CMBM start

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'demo-swatbit-seogram-theme' ),
			'secondary' => esc_html__( 'Secondary', 'demo-swatbit-seogram-theme' ),
		)
	);

	// CMBM end

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'demo_swatbit_seogram_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'demo_swatbit_seogram_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function demo_swatbit_seogram_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'demo_swatbit_seogram_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'demo_swatbit_seogram_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function demo_swatbit_seogram_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'demo-swatbit-seogram-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'demo-swatbit-seogram-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'demo_swatbit_seogram_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function demo_swatbit_seogram_theme_scripts() {
	wp_enqueue_style( 'demo-swatbit-seogram-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'demo-swatbit-seogram-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'demo-swatbit-seogram-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'demo_swatbit_seogram_theme_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// CMBM(change made by me) start

// Registering Bootstrap Scripts

function demo_swatbit_seogram_theme_bootstrap_scripts() {
	wp_enqueue_style( 'maicons', get_template_directory_uri() . '/assets/css/maicons.css', array());
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array());
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/vendor/animate/animate.css', array());
	wp_enqueue_style( 'css-theme', get_template_directory_uri() . '/assets/css/theme.css', array());

	wp_enqueue_script( 'js-jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array());
	wp_enqueue_script( 'js-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array());
	wp_enqueue_script( 'js-google-maps', get_template_directory_uri() . '/assets/js/google-maps.js', array());
	wp_enqueue_script( 'js-wow', get_template_directory_uri() . '/assets/vendor/wow/wow.min.js', array());
	wp_enqueue_script( 'js-theme', get_template_directory_uri() . '/assets/js/theme.js', array());


}
add_action( 'wp_enqueue_scripts', 'demo_swatbit_seogram_theme_bootstrap_scripts' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Adding active class in menu item
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

// ACF Options Pages
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Theme General Settings'),
            'menu_title'  => __('Theme Settings'),
            'redirect'    => false,
        ));

        // Add sub page.
        acf_add_options_page(array(
            'page_title'  => __('About'),
            'menu_title'  => __('About'),
            'parent_slug' => $parent['menu_slug'],
        ));
		acf_add_options_page(array(
            'page_title'  => __('Services'),
            'menu_title'  => __('Services'),
            'parent_slug' => $parent['menu_slug'],
        ));
		acf_add_options_page(array(
            'page_title'  => __('Blog'),
            'menu_title'  => __('Blog'),
            'parent_slug' => $parent['menu_slug'],
        ));
		acf_add_options_page(array(
            'page_title'  => __('Contact'),
            'menu_title'  => __('Contact'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}