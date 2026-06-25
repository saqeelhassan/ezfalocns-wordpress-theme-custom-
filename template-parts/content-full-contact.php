<?php
/**
 * Default Contact page content. Used when the Contact page has no Gutenberg content.
 */
$t = fz_assets();
?>
    <section class="contact-us-section section-padding fix">
        <div class="line-shape">
            <!-- <img src="<?php echo esc_url( $t ); ?>/img/faq/line-shape.png" alt="img"> -->
        </div>
        <div class="container">
            <div class="contact-us-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="contact-image">
                            <img src="<?php echo esc_url( $t ); ?>/img/feature/contact-img.webp" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-us-content">
                            <div class="contact-us-box">
                                <div class="icon">
                                    <img src="<?php echo esc_url( $t ); ?>/img/icon/location.svg" alt="img">
                                </div>
                                <div class="content">
                                    <span>Location</span>
                                    <h5>500 E Broughton Street, Savannah, <br> GA 31401, United States</h5>
                                </div>
                            </div>
                            <div class="contact-us-box">
                                <div class="icon">
                                    <img src="<?php echo esc_url( $t ); ?>/img/icon/email.svg" alt="img">
                                </div>
                                <div class="content">
                                    <span>Email Address</span>
                                    <h5>
                                        <a href="mailto:Info@ezfalcons.com">Info@ezfalcons.com</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="contact-us-box mb-0">
                                <div class="icon">
                                    <img src="<?php echo esc_url( $t ); ?>/img/icon/call.svg" alt="img">
                                </div>
                                <div class="content">
                                    <span>Get In Touch</span>
                                    <h5>
                                        <a href="tel:+12132170699">213-217-0699</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php /* Map section - commented out
    <div class="map-section">
        <div class="container">
            <div class="map-items">
                <div class="googpemap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
    */ ?>

    <!-- Free EZ Falcons Operations Audit - same as home -->
    <section class="fz-audit-section section-padding fix">
        <div class="fz-audit-bg-pattern"></div>
        <div class="container-fluid px-lg-5">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-xxl-10">
                    <div class="fz-audit-card wow fadeInUp" data-wow-delay=".3s">
                        <div class="fz-audit-card-bottom fz-request-quote-wrapper">
                            <div class="row g-4 g-lg-5">
                                <div class="col-lg-6">
                                    <div class="fz-audit-calendar-wrap fz-quote-calendar-wrap">
                                        <div class="fz-quote-calendar-header">
                                            <button type="button" class="fz-quote-calendar-prev" aria-label="Previous month"><i class="fa-solid fa-chevron-left"></i></button>
                                            <span class="fz-quote-calendar-month-year">February 2026</span>
                                            <button type="button" class="fz-quote-calendar-next" aria-label="Next month"><i class="fa-solid fa-chevron-right"></i></button>
                                        </div>
                                        <div class="fz-quote-calendar-dow">
                                            <span>Sun</span><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span>
                                        </div>
                                        <div class="fz-quote-calendar-grid"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 fz-quote-cf7-form">
                                    <h3 class="fz-discovery-form-heading">Book a Discovery Call with</h3>
                                    <p class="fz-discovery-call-meta">30 Mins<span class="fz-discovery-call-date"></span></p>
                                    <p class="fz-discovery-call-desc">Discuss your most pressing back-office and freight concerns; walk away with a free customized operations audit and actionable recommendations for your team.</p>
                                    <?php echo do_shortcode( '[contact-form-7 id="126251e" title="Book a Delivery Call"]' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
