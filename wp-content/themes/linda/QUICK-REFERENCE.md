# WordPress Theme Quick Reference Card

## Essential WordPress Functions

### Get Theme Directory URL (for assets)
```php
<?php echo get_template_directory_uri(); ?>/assets/images/logo.png
```

### Get Stylesheet Directory URL (child theme)
```php
<?php echo get_stylesheet_directory_uri(); ?>/custom-image.png
```

### Get Home URL
```php
<?php echo home_url(); ?>
<?php echo home_url('/about'); ?>
```

### Get Site URL
```php
<?php echo site_url(); ?>
```

## Image Paths

### In HTML/PHP:
```php
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo.jpg" alt="Photo">
```

### In CSS (child theme):
```css
.header {
    background-image: url('../assets/images/bg.jpg');
}
```

### WordPress Media Library:
```php
<?php 
$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
echo $image[0]; 
?>
```

## Navigation Menu

### Display Menu:
```php
<?php
wp_nav_menu(array(
    'theme_location' => 'primary',
    'menu_class'     => 'nav-menu',
    'container'      => 'nav',
));
?>
```

### Check if Menu Exists:
```php
<?php if (has_nav_menu('primary')) : ?>
    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
<?php endif; ?>
```

## The Loop

### Basic Loop:
```php
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
    <?php endwhile; ?>
<?php endif; ?>
```

### Get Post Data:
```php
<?php the_title(); ?>           <!-- Post title -->
<?php the_content(); ?>         <!-- Post content -->
<?php the_excerpt(); ?>         <!-- Post excerpt -->
<?php the_permalink(); ?>       <!-- Post URL -->
<?php the_post_thumbnail(); ?>  <!-- Featured image -->
<?php the_time('F j, Y'); ?>    <!-- Post date -->
<?php the_author(); ?>          <!-- Post author -->
```

## Conditional Tags

### Check Page Type:
```php
<?php if (is_front_page()) : ?>
    <!-- Home page content -->
<?php endif; ?>

<?php if (is_page('about')) : ?>
    <!-- About page content -->
<?php endif; ?>

<?php if (is_single()) : ?>
    <!-- Single post content -->
<?php endif; ?>

<?php if (is_archive()) : ?>
    <!-- Archive content -->
<?php endif; ?>
```

## Custom Fields

### Get Custom Field:
```php
<?php $value = get_post_meta(get_the_ID(), 'field_name', true); ?>
<?php echo $value; ?>
```

### Check if Field Exists:
```php
<?php if (get_post_meta(get_the_ID(), 'field_name', true)) : ?>
    <?php echo get_post_meta(get_the_ID(), 'field_name', true); ?>
<?php endif; ?>
```

## Widgets & Sidebars

### Display Sidebar:
```php
<?php if (is_active_sidebar('sidebar-1')) : ?>
    <?php dynamic_sidebar('sidebar-1'); ?>
<?php endif; ?>
```

### Display Footer Widget:
```php
<?php if (is_active_sidebar('footer-1')) : ?>
    <div class="footer-widget">
        <?php dynamic_sidebar('footer-1'); ?>
    </div>
<?php endif; ?>
```

## Enqueue Scripts & Styles

### In functions.php:
```php
function my_custom_scripts() {
    // Enqueue CSS
    wp_enqueue_style('my-style', get_stylesheet_directory_uri() . '/css/custom.css');
    
    // Enqueue JS
    wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');
```

## WordPress Options

### Get Blog Name:
```php
<?php bloginfo('name'); ?>
```

### Get Blog Description:
```php
<?php bloginfo('description'); ?>
```

### Get Admin Email:
```php
<?php bloginfo('admin_email'); ?>
```

### Get WordPress Version:
```php
<?php bloginfo('version'); ?>
```

## Custom Logo

### Check and Display:
```php
<?php if (has_custom_logo()) : ?>
    <?php the_custom_logo(); ?>
<?php else : ?>
    <h1><?php bloginfo('name'); ?></h1>
<?php endif; ?>
```

## Comments

### Display Comments:
```php
<?php comments_template(); ?>
```

### Comment Count:
```php
<?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
```

## Pagination

### Post Navigation:
```php
<?php the_posts_navigation(); ?>
```

### Numbered Pagination:
```php
<?php
the_posts_pagination(array(
    'mid_size'  => 2,
    'prev_text' => __('Previous', 'textdomain'),
    'next_text' => __('Next', 'textdomain'),
));
?>
```

## Search Form

### Display Search:
```php
<?php get_search_form(); ?>
```

## Translation Ready

### Translatable Text:
```php
<?php esc_html_e('Text to translate', 'linda-industries'); ?>
<?php echo esc_html__('Text to translate', 'linda-industries'); ?>
```

### Translatable with Variables:
```php
<?php
printf(
    esc_html__('Welcome, %s!', 'linda-industries'),
    $user_name
);
?>
```

## Security Functions

### Escape Output:
```php
<?php echo esc_html($text); ?>           <!-- Escape HTML -->
<?php echo esc_url($url); ?>             <!-- Escape URL -->
<?php echo esc_attr($attribute); ?>      <!-- Escape attribute -->
<?php echo esc_js($javascript); ?>       <!-- Escape JS -->
```

### Sanitize Input:
```php
<?php $clean = sanitize_text_field($_POST['field']); ?>
<?php $clean = sanitize_email($_POST['email']); ?>
<?php $clean = sanitize_url($_POST['url']); ?>
```

## Elementor Integration

### Check if Built with Elementor:
```php
<?php
if (class_exists('\Elementor\Plugin')) {
    $document = \Elementor\Plugin::$instance->documents->get(get_the_ID());
    if ($document && $document->is_built_with_elementor()) {
        // Page built with Elementor
    }
}
?>
```

### Display Elementor Content:
```php
<?php the_content(); ?>
```

## Common File Paths

### Theme Directory:
```
/wp-content/themes/linda-industries/
```

### Child Theme Directory:
```
/wp-content/themes/linda-industries-child/
```

### Uploads Directory:
```
/wp-content/uploads/
```

### Plugins Directory:
```
/wp-content/plugins/
```

## WordPress Config

### Enable Debug Mode (wp-config.php):
```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
```

### Increase Memory Limit:
```php
define('WP_MEMORY_LIMIT', '256M');
```

### Change Table Prefix:
```php
$table_prefix = 'wp_';
```

## Database Queries

### Get Posts:
```php
<?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 10,
    'orderby'        => 'date',
    'order'          => 'DESC'
);
$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        the_title();
        the_content();
    endwhile;
    wp_reset_postdata();
endif;
?>
```

## Useful Plugins API

### Check if Plugin Active:
```php
<?php if (is_plugin_active('elementor/elementor.php')) : ?>
    <!-- Elementor is active -->
<?php endif; ?>
```

## Custom Post Types

### Register Custom Post Type:
```php
function create_custom_post_type() {
    register_post_type('portfolio',
        array(
            'labels'      => array(
                'name'          => __('Portfolio'),
                'singular_name' => __('Portfolio Item')
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init', 'create_custom_post_type');
```

## Common CSS Classes

WordPress automatically adds classes to body:

```php
<body class="home blog logged-in admin-bar">
```

And to posts:

```php
<article class="post-123 post type-post status-publish">
```

Use these for styling!

## Tips

1. Always use child theme for customizations
2. Use `get_template_directory_uri()` for assets
3. Escape all output for security
4. Use WordPress functions instead of hardcoding
5. Check if function exists before using
6. Clear cache after changes
7. Test on different browsers and devices

## Quick Debugging

### Show All Variables:
```php
<?php
echo '<pre>';
print_r($variable);
echo '</pre>';
?>
```

### PHP Error Log Location:
```
/wp-content/debug.log
```

---

Keep this handy for quick reference while developing!
