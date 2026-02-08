<?php
/**
 * Linda Industries Theme Functions
 * 
 * @package Linda_Industries
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function linda_industries_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'linda-industries'),
        'footer'  => esc_html__('Footer Menu', 'linda-industries'),
    ));
    
    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Add support for custom background
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));
    
    // Add support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');
    
    // Add support for Block Styles
    add_theme_support('wp-block-styles');
    
    // Add support for full and wide align images
    add_theme_support('align-wide');
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    
    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'linda_industries_setup');

/**
 * Set content width
 */
function linda_industries_content_width() {
    $GLOBALS['content_width'] = apply_filters('linda_industries_content_width', 1200);
}
add_action('after_setup_theme', 'linda_industries_content_width', 0);

/**
 * Enqueue Google Fonts
 */
function linda_industries_fonts_url() {
    $fonts_url = '';
    $urbanist = _x('on', 'Urbanist font: on or off', 'linda-industries');
    
    if ('off' !== $urbanist) {
        $font_families = array();
        
        if ('off' !== $urbanist) {
            $font_families[] = 'Urbanist:wght@300;400;500;600;700;800;900';
        }
        
        $query_args = array(
            'family' => urlencode(implode('|', $font_families)),
            'display' => urlencode('swap'),
        );
        
        $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css2');
    }
    
    return esc_url_raw($fonts_url);
}

/**
 * Enqueue Scripts and Styles
 */
function linda_industries_scripts() {
    // Google Fonts
    wp_enqueue_style('linda-industries-fonts', linda_industries_fonts_url(), array(), null);
    
    // Theme Stylesheet
    wp_enqueue_style('linda-industries-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.0');
    
    // Bootstrap Icons
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/fonts/bootstrap-icons/font-css.css', array(), '1.0');
    
    // Animation CSS
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '4.1.1');
    
    // Swiper CSS
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '8.0');
    
    // Font Awesome
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '6.0');
    
    // Nice Select
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0');
    
    // Magnific Popup
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.1.0');
    
    // MetisMenu
    wp_enqueue_style('metismenu', get_template_directory_uri() . '/assets/css/metisMenu.css', array(), '1.0');
    
    // AOS
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css', array(), '2.3.1');
    
    // Spacing
    wp_enqueue_style('spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.0');
    
    // Main CSS
    wp_enqueue_style('linda-industries-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
    
    // jQuery (WordPress includes this by default)
    wp_enqueue_script('jquery');
    
    // Popper
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/vendor/popper.min.js', array('jquery'), '2.11.6', true);
    
    // Bootstrap JS
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array('jquery', 'popper'), '5.3.0', true);
    
    // Mean Menu
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array('jquery'), '1.0', true);
    
    // Swiper
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), '8.0', true);
    
    // Easy Pie Chart
    wp_enqueue_script('easypiechart', get_template_directory_uri() . '/assets/js/jquery.easypiechart.min.js', array('jquery'), '1.0', true);
    
    // Counter Up
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
    
    // Magnific Popup
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true);
    
    // MetisMenu
    wp_enqueue_script('metismenu', get_template_directory_uri() . '/assets/js/metisMenu.min.js', array('jquery'), '1.0', true);
    
    // WOW JS
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.1.3', true);
    
    // Waypoints
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), '4.0.1', true);
    
    // AOS JS
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '2.3.1', true);
    
    // Nice Select
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), '1.0', true);
    
    // jQuery UI
    wp_enqueue_script('jquery-ui-custom', get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), '1.13.0', true);
    
    // Scroll Up
    wp_enqueue_script('scrollup', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery'), '2.4.1', true);
    
    // Plugins
    wp_enqueue_script('linda-industries-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0', true);
    
    // Main JS
    wp_enqueue_script('linda-industries-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
    
    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'linda_industries_scripts');

/**
 * Elementor Support
 */
function linda_industries_register_elementor_locations($elementor_theme_manager) {
    $elementor_theme_manager->register_all_core_location();
}
add_action('elementor/theme/register_locations', 'linda_industries_register_elementor_locations');

/**
 * Add Elementor support for custom post types
 */
function linda_industries_add_elementor_support() {
    // Add Elementor support
    add_post_type_support('page', 'elementor');
    add_post_type_support('post', 'elementor');
}
add_action('init', 'linda_industries_add_elementor_support');

/**
 * Register Widget Areas
 */
function linda_industries_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'linda-industries'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'linda-industries'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 1', 'linda-industries'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here.', 'linda-industries'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 2', 'linda-industries'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Add widgets here.', 'linda-industries'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 3', 'linda-industries'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Add widgets here.', 'linda-industries'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 4', 'linda-industries'),
        'id'            => 'footer-4',
        'description'   => esc_html__('Add widgets here.', 'linda-industries'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'linda_industries_widgets_init');

/**
 * Custom template tags for this theme
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions
 */
require get_template_directory() . '/inc/customizer.php';