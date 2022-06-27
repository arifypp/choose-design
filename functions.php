<?php
/**
 * Choose Design functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Choose_Design
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
function choose_design_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Choose Design, use a find and replace
		* to change 'choose-design' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'choose-design', get_template_directory() . '/languages' );

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
			'Primary' => esc_html__( 'Primary', 'choose-design' ),
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
			'choose_design_custom_background_args',
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
add_action( 'after_setup_theme', 'choose_design_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function choose_design_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'choose_design_content_width', 640 );
}
add_action( 'after_setup_theme', 'choose_design_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function choose_design_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'choose-design' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'choose-design' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'choose_design_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function choose_design_scripts() {
	wp_enqueue_style( 'choose-design-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'choose-design-style', 'rtl', 'replace' );

	// Bootstrap css
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/asset/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all' );
	// Bootstrap Icon css
	wp_enqueue_style( 'bootstrap-icon', get_template_directory_uri() . '/asset/vendor/bootstrap-icons/bootstrap-icons.css', array(), '1.0', 'all' );
	// Swiper css
	wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/asset/vendor/swiper/swiper-bundle.min.css', array(), '1.0', 'all' );
	// Glightbox css
	wp_enqueue_style( 'glight-css', get_template_directory_uri() . '/asset/vendor/glightbox/css/glightbox.min.css', array(), '1.0', 'all' );
	// Style css
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/asset/css/style.css', array(), '1.0', 'all' );

	// Boostrap js
	wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/asset/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0', true );
	// AOS js
	wp_enqueue_script( 'aos-scripts', get_template_directory_uri() . '/asset/vendor/aos/aos.js', array(), '1.0', true );
	// Swiper js
	wp_enqueue_script( 'swiper-scripts', get_template_directory_uri() . '/asset/vendor/swiper/swiper-bundle.min.js', array(), '1.0', true );
	// Glight js
	wp_enqueue_script( 'glight-scripts', get_template_directory_uri() . '/asset/vendor/glightbox/js/glightbox.min.js', array(), '1.0', true );
	// Main js
	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/asset/js/main.js', array(), '1.0', true );	

	wp_enqueue_script( 'choose-design-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'choose-design-customizer', get_template_directory_uri() . '/js/customizer.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'choose_design_scripts' );

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

/**
 *
 * Codestar Framework
 * A Simple and Lightweight WordPress Option Framework for Themes and Plugins
 *
 */
require_once get_theme_file_path() .'/inc/codestar-framework.php';

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


// Wpkses for theme function
function cb_kses( $input ) {
    $allowed_tags = array(
        //formatting
        'strong' => array(),
        'em'     => array(),
        'b'      => array(),
        'i'      => array(),
        'br'      => array(),
        //links
        'a'     => array(
            'href' => array(),
            'class' => array()
        ),
        //links
        'p'     => array(
            'class' => array()
        )
    );
    $input =  wp_kses( $input, $allowed_tags );
    return  $input;
}



function add_class_to_href( $classes, $item ) {
    if ( in_array('current_page_item', $item->classes) ) {
        $classes['class'] = 'active';
    }
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_href', 10, 2 );

/**
 *
 * TGM Plugin Activation Framework
 * A Simple and Lightweight WordPress Option Framework for Themes and Plugins
 *
 */
require_once get_theme_file_path() .'/inc/plugin.php';

/**
 *
 * Add description in feature image
 *
 */
add_action('admin_footer', function() {
    global $pagenow;
    if('post.php' == $pagenow || 'post-new.php' == $pagenow) : ?>
    <script>
        jQuery(document).ready(function($) {
            $('#postimagediv .inside').after('<div style="padding: 0 12px 12px; line-height:1.3;">Please upload the image with <strong>1600x330px</strong> image. If you dont follow the size then image come broken.</div>');
        });
    </script>
<?php endif;
});