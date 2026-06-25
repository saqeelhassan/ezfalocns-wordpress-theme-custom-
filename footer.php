<?php
$theme_uri = get_template_directory_uri();
$assets    = $theme_uri . '/assets';
$home      = home_url( '/' );
$contact   = home_url( '/contact/' );
$about     = function_exists( 'fz_about' ) ? fz_about() : home_url( '/about/' );
$service   = function_exists( 'fz_service' ) ? fz_service() : home_url( '/service/' );
$price     = home_url( '/price/' );
$blog      = function_exists( 'fz_blog' ) ? fz_blog() : home_url( '/blog/' );
$faq       = function_exists( 'fz_faq' ) ? fz_faq() : home_url( '/faq/' );
?>
<footer class="footer-section-2">
    <div class="container">
        <div class="cta-consultations">
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Ready to Scale Your Operations with EZ Falcons?</h2>
            <a href="<?php echo esc_url( $contact ); ?>" class="theme-btn theme-2 wow fadeInUp" data-wow-delay=".5s">
                Get Free Audit Call
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
    <div class="footer-widget-wrapper-2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="footer-single-widget-2">
                        <div class="widget-head">
                            <a href="<?php echo esc_url( $home ); ?>" class="footer-logo">
                                <img src="<?php echo esc_url( $assets ); ?>/img/logo/logo design-011.svg" alt="EZ Falcons">
                            </a>
                            <!-- <p class="footer-tagline" style="margin: 12px 0 0; font-size: 14px; opacity: 0.9;">Back-office &amp; operations outsourcing for logistics &amp; freight.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="footer-single-widget-2">
                        <div class="widget-head"><h4>Location</h4></div>
                        <div class="contact-items">
                            <p>500 E Broughton Street<br>Savannah, GA 31401<br>United States</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="footer-single-widget-2">
                        <div class="widget-head"><h4>Quick Links</h4></div>
                        <div class="contact-items">
                            <p>
                                <a href="<?php echo esc_url( $about ); ?>">About</a><br>
                                <a href="<?php echo esc_url( $service ); ?>">Services</a><br>
                                <a href="<?php echo esc_url( $price ); ?>">Price</a><br>
                                <a href="<?php echo esc_url( $blog ); ?>">Blog</a><br>
                                <a href="<?php echo esc_url( $faq ); ?>">FAQ</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="footer-single-widget-2">
                        <div class="widget-head"><h4>EZ Falcons Support</h4></div>
                        <div class="contact-items">
                            <p>
                                <a href="mailto:Info@ezfalcons.com">Info@ezfalcons.com</a><br>
                                <a href="tel:+12132170699">213-217-0699</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-2">
        <div class="container">
            <div class="footer-bottom-wrapper-2">
                <p class="wow fadeInUp" data-wow-delay=".3s">© <?php echo date( 'Y' ); ?> EZ Falcons. Designed &amp; Developed by <a href="https://www.deweboo.com/" target="_blank" rel="noopener noreferrer" class="fz-footer-credit-link">De-Weboo</a></p>
                <div class="social-icon wow fadeInUp" data-wow-delay=".5s">
                    <?php get_template_part( 'template-parts/social-external-links', null, [] ); ?>
                </div>
            </div>
        </div>
    </div>
    <h2 class="footer-text">EZ Falcons</h2>
</footer>
<a href="#" class="fz-scroll-top-btn" id="fz-scroll-top-btn" aria-label="Scroll to top"><i class="fa-solid fa-chevron-up"></i></a>
<?php wp_footer(); ?>
</body>
</html>
