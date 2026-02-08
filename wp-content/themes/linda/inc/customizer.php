<?php
/**
 * Linda Industries Theme Customizer - Enhanced for Factry
 *
 * @package Linda_Industries
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function linda_industries_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'linda_industries_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'linda_industries_customize_partial_blogdescription',
            )
        );
    }
    
    // ========================================
    // FACTRY THEME OPTIONS
    // ========================================
    
    // Add Factry Options Panel
    $wp_customize->add_panel('factry_options', array(
        'title'       => __('Factry Theme Options', 'linda-industries'),
        'description' => __('Customize your Factry theme settings', 'linda-industries'),
        'priority'    => 30,
    ));
    
    // ========================================
    // HEADER SECTION
    // ========================================
    
    $wp_customize->add_section('factry_header', array(
        'title'    => __('Header Settings', 'linda-industries'),
        'panel'    => 'factry_options',
        'priority' => 10,
    ));
    
    // Phone Number
    $wp_customize->add_setting('factry_phone', array(
        'default'           => '(505) 555-0125',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('factry_phone', array(
        'label'       => __('Phone Number', 'linda-industries'),
        'description' => __('Displayed in the header contact info', 'linda-industries'),
        'section'     => 'factry_header',
        'type'        => 'text',
    ));
    
    // Location
    $wp_customize->add_setting('factry_location', array(
        'default'           => 'USA, New York',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('factry_location', array(
        'label'       => __('Location', 'linda-industries'),
        'description' => __('Displayed in the header', 'linda-industries'),
        'section'     => 'factry_header',
        'type'        => 'text',
    ));
    
    // Working Hours
    $wp_customize->add_setting('factry_hours', array(
        'default'           => '10AM - 11:30PM',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('factry_hours', array(
        'label'       => __('Working Hours', 'linda-industries'),
        'description' => __('Display business hours', 'linda-industries'),
        'section'     => 'factry_header',
        'type'        => 'text',
    ));
    
    // ========================================
    // SOCIAL MEDIA SECTION
    // ========================================
    
    $wp_customize->add_section('factry_social', array(
        'title'    => __('Social Media Links', 'linda-industries'),
        'panel'    => 'factry_options',
        'priority' => 20,
    ));
    
    // Facebook
    $wp_customize->add_setting('factry_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('factry_facebook', array(
        'label'   => __('Facebook URL', 'linda-industries'),
        'section' => 'factry_social',
        'type'    => 'url',
    ));
    
    // Twitter
    $wp_customize->add_setting('factry_twitter', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('factry_twitter', array(
        'label'   => __('Twitter URL', 'linda-industries'),
        'section' => 'factry_social',
        'type'    => 'url',
    ));
    
    // LinkedIn
    $wp_customize->add_setting('factry_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('factry_linkedin', array(
        'label'   => __('LinkedIn URL', 'linda-industries'),
        'section' => 'factry_social',
        'type'    => 'url',
    ));
    
    // YouTube
    $wp_customize->add_setting('factry_youtube', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('factry_youtube', array(
        'label'   => __('YouTube URL', 'linda-industries'),
        'section' => 'factry_social',
        'type'    => 'url',
    ));
    
    // ========================================
    // SIDEBAR SECTION
    // ========================================
    
    $wp_customize->add_section('factry_sidebar', array(
        'title'    => __('Mobile Sidebar Settings', 'linda-industries'),
        'panel'    => 'factry_options',
        'priority' => 30,
    ));
    
    // About Us Text
    $wp_customize->add_setting('factry_sidebar_about', array(
        'default'           => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('factry_sidebar_about', array(
        'label'   => __('About Us Text', 'linda-industries'),
        'section' => 'factry_sidebar',
        'type'    => 'textarea',
    ));
    
    // Sidebar Address
    $wp_customize->add_setting('factry_address', array(
        'default'           => '23/A, Miranda City Likaoli Prikano, Dope',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('factry_address', array(
        'label'   => __('Address', 'linda-industries'),
        'section' => 'factry_sidebar',
        'type'    => 'text',
    ));
    
    // Sidebar Phone
    $wp_customize->add_setting('factry_sidebar_phone', array(
        'default'           => '+0989 7876 9865 9',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('factry_sidebar_phone', array(
        'label'   => __('Contact Phone', 'linda-industries'),
        'section' => 'factry_sidebar',
        'type'    => 'text',
    ));
    
    // Sidebar Email
    $wp_customize->add_setting('factry_email', array(
        'default'           => 'info@example.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('factry_email', array(
        'label'   => __('Email Address', 'linda-industries'),
        'section' => 'factry_sidebar',
        'type'    => 'email',
    ));
    
    // ========================================
    // FOOTER SECTION
    // ========================================
    
    $wp_customize->add_section('factry_footer', array(
        'title'    => __('Footer Settings', 'linda-industries'),
        'panel'    => 'factry_options',
        'priority' => 40,
    ));
    
    // Footer Email
    $wp_customize->add_setting('factry_footer_email', array(
        'default'           => 'factry@example.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('factry_footer_email', array(
        'label'   => __('Footer Email', 'linda-industries'),
        'section' => 'factry_footer',
        'type'    => 'email',
    ));
    
    // Footer Phone
    $wp_customize->add_setting('factry_footer_phone', array(
        'default'           => '(603) 555-0123',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('factry_footer_phone', array(
        'label'   => __('Footer Phone', 'linda-industries'),
        'section' => 'factry_footer',
        'type'    => 'text',
    ));
    
    // Footer Address
    $wp_customize->add_setting('factry_footer_address', array(
        'default'           => '4140 Parker Rd. Allentown, New Mexico 31134',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('factry_footer_address', array(
        'label'   => __('Footer Address', 'linda-industries'),
        'section' => 'factry_footer',
        'type'    => 'textarea',
    ));
    
    // Copyright Text
    $wp_customize->add_setting('factry_copyright_text', array(
        'default'           => 'Creative Gigs',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('factry_copyright_text', array(
        'label'       => __('Copyright Text', 'linda-industries'),
        'description' => __('Text before copyright year', 'linda-industries'),
        'section'     => 'factry_footer',
        'type'        => 'text',
    ));
}
add_action('customize_register', 'linda_industries_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function linda_industries_customize_partial_blogname() {
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function linda_industries_customize_partial_blogdescription() {
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function linda_industries_customize_preview_js() {
    wp_enqueue_script('linda-industries-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '1.0', true);
}
add_action('customize_preview_init', 'linda_industries_customize_preview_js');
