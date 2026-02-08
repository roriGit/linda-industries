    </div><!-- #content -->

    <!-- Footer Area Start -->
    <footer class="footer-area heding-bg">
        <div class="footer-bg-one pt-100 pb-70">
            <!-- Footer Shapes -->
            <img class="shapes__1" src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/star-5b.svg" alt="">
            <img class="shapes__2" src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/line-7a.svg" alt="">
            <?php if (file_exists(get_template_directory() . '/assets/img/footer/footer-parts-1a.png')) : ?>
                <img class="shapes__4" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-parts-1a.png" alt="">
            <?php endif; ?>
            <div class="blur__shape"></div>
            <div class="big-style-text">Footer</div>
            
            <div class="container">
                <!-- Logo Row -->
                <div class="row pb-50">
                    <div class="col-12 text-lg-start text-center">
                        <div class="footer__widget mb-30">
                            <?php
                            if (has_custom_logo()) {
                                the_custom_logo();
                            } else {
                                ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <h2 class="text-white"><?php bloginfo('name'); ?></h2>
                                </a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
                <!-- Footer Widgets Row -->
                <div class="row pb-35">
                    <!-- Footer Widget 1 - Email -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer__widget mb-30">
                            <div class="footer__contact__one">
                                <div class="icon mb-35">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-49d.svg" alt="Email Icon">
                                </div>
                                <h4 class="widget__title mb-30"><?php esc_html_e('Email', 'linda-industries'); ?></h4>
                                <h5 class="widget__info"><?php esc_html_e('Get in touch', 'linda-industries'); ?></h5>
                                <a class="widget__query" href="mailto:<?php echo esc_attr(get_theme_mod('factry_footer_email', 'factry@example.com')); ?>">
                                    <?php echo esc_html(get_theme_mod('factry_footer_email', 'factry@example.com')); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Footer Widget 2 - Phone -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer__widget mb-30">
                            <div class="footer__contact__one">
                                <div class="icon mb-35">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-50d.svg" alt="Phone Icon">
                                </div>
                                <h4 class="widget__title mb-30"><?php esc_html_e('Phone', 'linda-industries'); ?></h4>
                                <h5 class="widget__info"><?php esc_html_e('Call or text', 'linda-industries'); ?></h5>
                                <a class="widget__query" href="tel:<?php echo esc_attr(str_replace([' ', '(', ')', '-'], '', get_theme_mod('factry_footer_phone', '(603) 555-0123'))); ?>">
                                    <?php echo esc_html(get_theme_mod('factry_footer_phone', '(603) 555-0123')); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Footer Widget 3 - Office -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer__widget mb-30">
                            <div class="footer__contact__one">
                                <div class="icon mb-35">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-51d.svg" alt="Location Icon">
                                </div>
                                <h4 class="widget__title mb-30"><?php esc_html_e('Office', 'linda-industries'); ?></h4>
                                <a class="widget__query" href="#">
                                    <?php echo nl2br(esc_html(get_theme_mod('factry_footer_address', '4140 Parker Rd. Allentown, New Mexico 31134'))); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Footer Widget 4 - Quick Links -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer__widget mb-30">
                            <div class="footer__contact__one">
                                <h4 class="widget__title mb-25"><?php esc_html_e('Quick Links', 'linda-industries'); ?></h4>
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer',
                                    'menu_class'     => 'fot-list',
                                    'container'      => 'ul',
                                    'fallback_cb'    => false,
                                ));
                                
                                // If no menu is set, show default links
                                if (!has_nav_menu('footer')) :
                                ?>
                                    <ul class="fot-list">
                                        <li><a href="<?php echo esc_url(home_url('/about')); ?>"><?php esc_html_e('About Company', 'linda-industries'); ?></a></li>
                                        <li><a href="<?php echo esc_url(home_url('/services')); ?>"><?php esc_html_e('Our Services', 'linda-industries'); ?></a></li>
                                        <li><a href="<?php echo esc_url(home_url('/case-study')); ?>"><?php esc_html_e('Case Study', 'linda-industries'); ?></a></li>
                                        <li><a href="<?php echo esc_url(home_url('/pricing')); ?>"><?php esc_html_e('Pricing', 'linda-industries'); ?></a></li>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Copyright Section -->
            <div class="copyright__border pt-75">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <div class="copyright__text mb-30">
                                <p>
                                    <?php
                                    $copyright_text = get_theme_mod('factry_copyright_text', 'Creative Gigs');
                                    ?>
                                    <a class="fw-bold" href="#"><?php echo esc_html($copyright_text); ?></a>
                                    © <?php echo date('Y'); ?> 
                                    <?php bloginfo('name'); ?>. 
                                    <?php esc_html_e('All rights reserved.', 'linda-industries'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end">
                            <ul class="footer__menu mb-30">
                                <li>
                                    <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">
                                        <?php esc_html_e('Privacy Policy', 'linda-industries'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/terms-conditions')); ?>">
                                        <?php esc_html_e('Terms & Conditions', 'linda-industries'); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
    
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
