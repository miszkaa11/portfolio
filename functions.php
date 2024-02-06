<?php
/**
 * portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package portfolio
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
function portfolio_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on portfolio, use a find and replace
		* to change 'portfolio' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'portfolio', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'portfolio' ),
		)
	);

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
			'portfolio_custom_background_args',
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
add_action( 'after_setup_theme', 'portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfolio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'portfolio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'portfolio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function portfolio_scripts() {

	wp_deregister_script( 'jquery' );
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js', false, NULL, false );
    wp_register_script('jqueryui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js', false, NULL, true );

	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jqueryui' );

	wp_enqueue_script('Font Awesome', 'https://kit.fontawesome.com/5eef977532.js');

	// wp_enqueue_style( 'rwd', get_template_directory_uri() . '/components/UI/rwd.css' );
	// wp_enqueue_style( 'components', get_template_directory_uri() . '/components/UI/components.css' );
	// wp_enqueue_style( 'variables', get_template_directory_uri() . '/components/UI/variables.css' );

	wp_enqueue_style( 'variables', get_template_directory_uri() . '/css/style.css' );

	wp_enqueue_style( 'portfolio-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'portfolio-style', 'rtl', 'replace' );

	wp_enqueue_script( 'portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/components/scripts/scripts.js', array('jquery'), true );

	wp_enqueue_script( 'main-script-2', get_template_directory_uri() . '/components/scripts/lazyloading.js', array('jquery'), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

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

// Shortcode
add_filter('acf/format_value/type=textarea', 'do_shortcode');

// AOS Init
add_action( 'wp_enqueue_scripts', 'add_aos_animation' );
function add_aos_animation() {
	wp_enqueue_style('AOS_animate', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
	wp_enqueue_script('AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
}

// Max Upload
@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '1000' );

// Work Gallery Post
function work_gallery_render_post($post) {
	?>

		<div class="gallery__inner">
			<div class="gallery-text">
				<h3 class="gallery__header header-m" data-aos="zoom-in"><?php the_field('work_gallery_title'); ?></h3>
				<p class="gallery__text text" data-aos="zoom-in"><?php the_field('work_gallery_content'); ?></p>
				<a href="<?php echo get_permalink($post)?>" class="gallery__link" data-aos="zoom-in">See more</a>
			</div>
			<div class="gallery-image">
				<img src="" data-src="<?php the_field('work_gallery_image'); ?>" alt="Work Image" class="gallery__image lazyload-image" data-aos="zoom-in">
				<a href="<?php echo get_permalink($post)?>" class="mobile__link" data-aos="zoom-in">See more</a>
			</div>
		</div>
			
	<?php
}