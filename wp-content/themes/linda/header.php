<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'linda-industries'); ?></a>

    <!-- Header Area Start -->
    <header class="theme-main-menu theme-menu-one black-bg">
        <div class="main-header-area">
            <div class="container header-custom-container">
                <div class="row align-items-center">
                    <!-- Logo Column (Hidden on mobile, shown on desktop) -->
                    <div class="col-lg-2 col-sm-4 col-6 d-none d-lg-inline-block">
                        <div class="logo-area">
                            <?php
                            if (has_custom_logo()) {
                                the_custom_logo();
                            } else {
                                ?>
                                <a class="front" href="<?php echo esc_url(home_url('/')); ?>">
                                    <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                                </a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    
                    <!-- Main Header Content -->
                    <div class="col-lg-10 col-md-12 custom-border px-lg-0">
                        <!-- Top Header Info Bar -->
                        <div class="row align-items-center top__header__info pt-10 pb-10">
                            <div class="col-xl-9 col-lg-12">
                                <ul class="ps-lg-5 list-none header-info d-flex align-items-center justify-content-xl-start justify-content-lg-end justify-content-center">
                                    <!-- Phone -->
                                    <li>
                                        <div class="header-info-box">
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/phone.svg" alt="Phone">
                                            </div>
                                            <div class="text-content">
                                                <span><?php esc_html_e('Call', 'linda-industries'); ?></span>
                                                <h6>
                                                    <?php
                                                    $phone = get_theme_mod('factry_phone', '(505) 555-0125');
                                                    echo esc_html($phone);
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- Location (Hidden on small screens) -->
                                    <li class="d-none d-sm-inline-block">
                                        <div class="header-info-box">
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/location.svg" alt="Location">
                                            </div>
                                            <div class="text-content">
                                                <span><?php esc_html_e('Location', 'linda-industries'); ?></span>
                                                <h6>
                                                    <?php
                                                    $location = get_theme_mod('factry_location', 'USA, New York');
                                                    echo esc_html($location);
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- Working Hours (Hidden on tablet) -->
                                    <li class="d-none d-lg-inline-block">
                                        <div class="header-info-box">
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/phone.svg" alt="Time">
                                            </div>
                                            <div class="text-content">
                                                <span><?php esc_html_e('Time', 'linda-industries'); ?></span>
                                                <h6>
                                                    <?php
                                                    $hours = get_theme_mod('factry_hours', '10AM - 11:30PM');
                                                    echo esc_html($hours);
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <!-- Social Media (Hidden on tablet) -->
                            <div class="col-xl-3 d-none d-xl-inline-block text-lg-end">
                                <div class="social_media">
                                    <?php
                                    $facebook = get_theme_mod('factry_facebook', '#');
                                    $twitter = get_theme_mod('factry_twitter', '#');
                                    $linkedin = get_theme_mod('factry_linkedin', '#');
                                    $youtube = get_theme_mod('factry_youtube', '#');
                                    
                                    if ($facebook) : ?>
                                        <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    <?php endif;
                                    
                                    if ($twitter) : ?>
                                        <a href="<?php echo esc_url($twitter); ?>" target="_blank" rel="noopener">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    <?php endif;
                                    
                                    if ($linkedin) : ?>
                                        <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    <?php endif;
                                    
                                    if ($youtube) : ?>
                                        <a href="<?php echo esc_url($youtube); ?>" target="_blank" rel="noopener">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Navigation Row -->
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-10 col-md-12">
                                <!-- Main Navigation Menu (Desktop) -->
                                <div class="main-menu d-none d-lg-block ps-xl-5 ps-lg-3">
                                    <nav id="mobile-menu">
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary',
                                            'menu_id'        => 'primary-menu',
                                            'container'      => false,
                                            'menu_class'     => 'menu-list ps-0',
                                            'fallback_cb'    => false,
                                        ));
                                        ?>
                                    </nav>
                                </div>
                            </div>
                            
                            <!-- Mobile Logo (Shown on mobile only) -->
                            <div class="col-6 d-lg-none d-md-inline-block">
                                <div class="logo-area">
                                    <?php
                                    if (has_custom_logo()) {
                                        the_custom_logo();
                                    } else {
                                        ?>
                                        <a class="front" href="<?php echo esc_url(home_url('/')); ?>">
                                            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            
                            <!-- Right Side Icons -->
                            <div class="col-xl-4 col-lg-2 col-6">
                                <div class="right-nav mb-0 d-flex align-items-center justify-content-end ms-5">
                                    <!-- Search Icon -->
                                    <div class="search-area me-4">
                                        <a class="search_input" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/search.svg" alt="Search">
                                        </a>
                                    </div>
                                    
                                    <!-- Cart Icon (if WooCommerce is active) -->
                                    <?php if (class_exists('WooCommerce')) : ?>
                                    <div class="cart__menu me-4">
                                        <a class="shopping-cart" href="<?php echo wc_get_cart_url(); ?>">
                                            <i class="bi bi-bag"></i>
                                            <span class="badge"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <!-- Hamburger Menu (Mobile) -->
                                    <div class="hamburger-menu">
                                        <a class="round-menu" href="javascript:void(0);">
                                            <i class="far fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    
    <!-- Search Offcanvas -->
    <div class="offcanvas offcanvas-top theme-bg" tabindex="-1" id="offcanvasTop">
        <div class="offcanvas-header">
            <a data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fas fa-times search-close" id="search-close"></i>
            </a>
        </div>
        <div class="offcanvas-body">
            <div class="search-wrap">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
    
    <!-- Mobile Sidebar -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);">
                <i class="fas fa-times"></i>
            </a>
        </div>
        
        <div class="offset-sidebar">
            <!-- Logo in Sidebar -->
            <div class="offset-widget offset-logo mb-30">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <h2><?php bloginfo('name'); ?></h2>
                    </a>
                    <?php
                }
                ?>
            </div>
            
            <!-- Mobile Menu Container -->
            <div class="mobile-menu"></div>
            
            <!-- About Us Section -->
            <div class="offset-widget mb-40">
                <div class="info-widget">
                    <h4 class="offset-title mb-20"><?php esc_html_e('About Us', 'linda-industries'); ?></h4>
                    <p class="mb-30">
                        <?php
                        $about_text = get_theme_mod('factry_sidebar_about', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system.');
                        echo esc_html($about_text);
                        ?>
                    </p>
                </div>
            </div>
            
            <!-- Contact Info Section -->
            <div class="offset-widget mb-30 pr-10">
                <div class="info-widget info-widget2">
                    <h4 class="offset-title mb-20"><?php esc_html_e('Contact Info', 'linda-industries'); ?></h4>
                    <p>
                        <i class="fal fa-address-book"></i>
                        <?php
                        $address = get_theme_mod('factry_address', '23/A, Miranda City Likaoli Prikano, Dope');
                        echo esc_html($address);
                        ?>
                    </p>
                    <p>
                        <i class="fal fa-phone"></i>
                        <?php
                        $sidebar_phone = get_theme_mod('factry_sidebar_phone', '+0989 7876 9865 9');
                        echo esc_html($sidebar_phone);
                        ?>
                    </p>
                    <p>
                        <i class="fal fa-envelope-open"></i>
                        <?php
                        $email = get_theme_mod('factry_email', 'info@example.com');
                        echo esc_html($email);
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </aside>
    
    <div class="body-overlay"></div>

    <div id="content" class="site-content">
