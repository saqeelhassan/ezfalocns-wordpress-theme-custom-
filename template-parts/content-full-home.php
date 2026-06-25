<?php
/**
 * Full Laravel Home page content. Edit this file to change the home page (when using Template "Full Home (Laravel)").
 */
$t   = fz_assets();
$h   = fz_home();
$s   = fz_service();
$faq = fz_faq();
$ab  = fz_about();
$ct  = fz_contact();
?>
<main>
    <!-- Hero (background slider) -->
    <?php
    $hero_slides = [
        $t . '/img/hero/hero-bg-1.webp',
        $t . '/img/hero/hero-bg-2.webp',
        $t . '/img/hero/hero-bg-3.webp',
        $t . '/img/hero/hero-bg-4.webp',
    ];
    ?>
    <section class="hero-section hero-1 hero-bg-slider-section fix">
        <img src="<?php echo esc_url( $t . '/img/hero/hero-bg-2.webp' ); ?>" fetchpriority="high" decoding="async" alt="" width="1920" height="1080" style="position:absolute;left:-9999px;width:1px;height:1px;" aria-hidden="true">
        <div class="hero-bg-slider" aria-hidden="true">
            <?php foreach ( $hero_slides as $i => $slide_url ) : ?>
            <div class="hero-bg-slide<?php echo $i === 0 ? ' active' : ''; ?>" style="background-image: url('<?php echo esc_url( $slide_url ); ?>');"></div>
            <?php endforeach; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-10">
                    <div class="hero-content">
                        <span class="wow fadeInUp" style="color: white; display: block; margin-bottom: 10px; font-weight: 500;">Logistics BPO Services USA — Outsource Logistics Operations with Confidence</span>
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Logistics BPO Solutions for U.S. Freight Companies</h1>
                        <h5 class="wow fadeInUp" data-wow-delay=".5s" style="margin-top: 1.5rem; line-height: 1.6;">EZ Falcons provides dedicated remote logistics teams for freight forwarders, NVOCCs, and trucking companies. Reduce operational costs by up to 60% while improving efficiency and scalability.</h5>
                        <div class="hero-button wow fadeInUp" data-wow-delay=".6s" style="margin-top: 30px;">
                            <a href="<?php echo esc_url( $s ); ?>" class="theme-btn">Explore our services <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature -->
    <section class="feature-section fix">
        <div class="container">
            <div class="feature-wrapper">
                <div class="feature-icon-item wow fadeInUp" data-wow-delay=".2s"><div class="icon"><i class="flaticon-booking"></i></div><div class="content"><h5>Back-Office &amp; Documentation</h5></div></div>
                <div class="feature-icon-item wow fadeInUp" data-wow-delay=".4s"><div class="icon"><i class="flaticon-speech-bubbles"></i></div><div class="content"><h5> Account Manager</h5></div></div>
                <div class="feature-icon-item wow fadeInUp" data-wow-delay=".6s"><div class="icon"><i class="flaticon-order-tracking"></i></div><div class="content"><h5>Truck Dispatcher</h5></div></div>
                <div class="feature-icon-item wow fadeInUp" data-wow-delay=".8s"><div class="icon"><i class="flaticon-schedule"></i></div><div class="content"><h5>Operation Manager</h5></div></div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about-section section-padding fix">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title mb-0">
                                <span class="wow fadeInUp">Your Strategic Logistics Partner</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Seamless Support That <br> Powers Your Operations</h2>
                            </div>
                            <p class="about-text wow fadeInUp" data-wow-delay=".5s">EZ Falcons delivers supply chain BPO USA solutions by acting as a seamless extension of your team. We support companies in New York, Los Angeles, Chicago, Texas, and Florida. Through remote logistics staffing New York LA Chicago, we ensure continuous operational support.</p>
                            <div class="about-icon-item">
                                <div class="about-item wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon"><i class="flaticon-coin-stack"></i></div>
                                    <div class="content"><h5>Cut Costs, Keep Quality</h5><p>Our offshore logistics staff for US companies provides expert-level support at a fraction of local hiring costs. You gain trained logistics professionals with no payroll taxes or office costs, and immediate operational scalability.</p></div>
                                </div>
                                <div class="about-item wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon"><i class="flaticon-target-audience"></i></div>
                                    <div class="content"><h5>Industry-Trained Professionals</h5><p>We are not generalists. Our teams are trained in US logistics operations, shipping lines &amp; freight forwarding, and documentation &amp; compliance. Our enterprise logistics BPO solutions USA ensure consistent, high-quality service delivery.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="<?php echo esc_url( $t ); ?>/img/logistics-bpo-services-usa-outsourcing.webp" alt="logistics BPO services USA remote logistics team managing back office operations for freight forwarders trucking companies and NVOCCs" title="Logistics BPO Services USA | EZ Falcons" class="wow img-custom-anim-right" data-wow-duration="1.3s" data-wow-delay="0.3s">
                            <div class="counter-box float-bob-y"><h2><span class="count">8</span><sup>+</sup></h2><p>Years Logistics <br> Experience</p></div>
                        </div>
                        <div class="about-growth-box wow fadeInUp" data-wow-delay=".4s">
                            <h3>BUDGET BETTER <span>GROW FASTER</span></h3>
                            <div class="about-growth-grid">
                                <div class="about-growth-item">
                                    <div class="about-growth-ring" style="--progress:60;">
                                        <span>60%</span>
                                    </div>
                                    <h4>PAYROLL</h4>
                                </div>
                                <div class="about-growth-item">
                                    <div class="about-growth-ring" style="--progress:77;">
                                        <span>77%</span>
                                    </div>
                                    <h4>OFFICE RENT</h4>
                                </div>
                                <div class="about-growth-item">
                                    <div class="about-growth-ring" style="--progress:75;">
                                        <span>75%</span>
                                    </div>
                                    <h4>UTILITIES</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EZ Falcons Services -->
    <section class="client-info-section bpo-services-section section-padding fix">
        <div class="container">
            <div class="section-title text-center mb-4">
                <span class="wow fadeInUp">What We Offer</span>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Specialized Logistics BPO Services</h2>
            </div>
            <div class="client-info-wrapper">
                <div class="client-info-image wow fadeInUp" data-wow-delay=".3s">
                    <?php
                    $bpo_icon = file_exists( get_template_directory() . '/assets/img/feature/ez-falcons-bpo-icon.png' )
                        ? $t . '/img/feature/ez-falcons-bpo-icon.png'
                        : $t . '/img/feature/quriar.png';
                    ?>
                    <div class="quriar-image bpo-services-icon"><img src="<?php echo esc_url( $bpo_icon ); ?>" alt="EZ Falcons"></div>
                    <?php
                    // $client_img = file_exists( get_template_directory() . '/assets/img/feature/client-professional.png' )
                    //     ? $t . '/img/feature/client-professional.png'
                    //     : $t . '/img/feature/client-1.png';
                    ?>
                    <?php /* <div class="client-image"><img src="<?php echo esc_url( $client_img ); ?>" alt=""></div> */ ?>
                </div>
                <div class="content wow fadeInUp" data-wow-delay=".5s">
                    <h4>EZ Falcons delivers logistics services outsourcing tailored to logistics companies. We manage documentation &amp; compliance, carrier coordination, dispatch &amp; tracking, and data entry &amp; operations. We eliminate administrative bottlenecks so your US team can focus on growth.</h4>
                    <h5>EZ Falcons<span> / Your logistics back-office partner</span></h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Chart -->
    <section class="pricing-chart-section section-padding section-bg fix">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="wow fadeInUp" data-wow-delay=".2s">The Real Cost of Hiring: US vs. EZ Falcons</h2>
                <p class="fz-pricing-subhead wow fadeInUp" data-wow-delay=".3s">Our enterprise logistics BPO solutions USA model ensures cost efficiency and scalability.</p>
            </div>
            <div class="fz-pricing-intro wow fadeInUp" data-wow-delay=".35s">
                <p>Hiring locally involves hidden costs: Payroll taxes, Benefits, Office space, and Training. With EZ Falcons: Flat monthly rate, No hidden costs, Immediate productivity.</p>
            </div>
            <div class="fz-pricing-cards row g-4 justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="fz-pricing-card fz-pricing-card--standard wow fadeInUp" data-wow-delay=".2s">
                        <div class="fz-pricing-card__header">
                            <span class="fz-pricing-card__icon"><i class="flaticon-freight"></i></span>
                            <h3>Typical US Employee</h3>
                        </div>
                        <ul class="fz-pricing-card__list">
                            <li><span class="label">Base Salary (Monthly)</span><span class="value">$3,500 <small>(approx. $22/hr)</small></span></li>
                            <li><span class="label">Payroll Taxes (FICA/Med)</span><span class="value">$270 <small>(7.65%)</small></span></li>
                            <li><span class="label">Health Insurance / Benefits</span><span class="value">$400+</span></li>
                            <li><span class="label">Office Space &amp; Equipment</span><span class="value">$300</span></li>
                            <li><span class="label">Recruiting &amp; Training</span><span class="value">$2,000 <small>(One-time avg)</small></span></li>
                            <li><span class="label">Paid Time Off / Sick Days</span><span class="value">Client Pays</span></li>
                        </ul>
                        <div class="fz-pricing-card__total">
                            <span>TOTAL MONTHLY COST</span>
                            <strong>$4,500+</strong>
                        </div>
                        <p class="fz-pricing-card__save fz-pricing-card__save--standard">Costs add up — you pay it all</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="fz-pricing-card fz-pricing-card--ez wow fadeInUp" data-wow-delay=".4s">
                        <span class="fz-pricing-card__badge">Best Value</span>
                        <div class="fz-pricing-card__header">
                            <span class="fz-pricing-card__icon"><i class="flaticon-tracking"></i></span>
                            <h3>EZ Falcons Expert</h3>
                        </div>
                        <ul class="fz-pricing-card__list">
                            <li><span class="label">Base Salary (Monthly)</span><span class="value">$1,600 <small>($ 10.00 Hourly)</small></span></li>
                            <li><span class="label">Payroll Taxes (FICA/Med)</span><span class="value">$0.00</span></li>
                            <li><span class="label">Health Insurance / Benefits</span><span class="value">$0.00</span></li>
                            <li><span class="label">Office Space &amp; Equipment</span><span class="value">$0.00</span></li>
                            <li><span class="label">Recruiting &amp; Training</span><span class="value">$0.00 <small>(Included)</small></span></li>
                            <li><span class="label">Paid Time Off / Sick Days</span><span class="value">Included in Rate</span></li>
                        </ul>
                        <div class="fz-pricing-card__total">
                            <span>TOTAL MONTHLY COST</span>
                            <strong>$1,600</strong>
                        </div>
                        <a href="<?php echo esc_url( $ct ); ?>" class="fz-pricing-card__save" aria-label="<?php esc_attr_e( 'Contact us — save 64%+ vs typical hire', 'fz-falcans' ); ?>">Save 64%+ vs typical hire</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Choose us - EZ Falcons -->
    <section class="choose-us-section section-padding fix">
        <div class="container-fluid">
            <div class="choose-us-wrapper">
                <div class="row g-4">
                    <div class="col-xl-8">
                        <div class="choose-us-content">
                            <div class="choose-us-image">
                                <img src="<?php echo esc_url( $t ); ?>/img/choose-us/EZ-falcons-01.webp" alt="img" class="wow img-custom-anim-right" data-wow-duration="1.3s" data-wow-delay="0.3s">
                                <div class="red-box float-bob-y">
                                    <h6 style="color: #fff;">The top 1% of logistics talent at your fingertips</h6>
                                    <?php
                                    $fallback_img = file_exists( get_template_directory() . '/assets/img/feature/client-professional.png' )
                                        ? $t . '/img/feature/client-professional.png'
                                        : $t . '/img/choose-us/client.png';
                                    $choose_us_avatars = [];
                                    for ( $i = 1; $i <= 5; $i++ ) {
                                        $choose_us_avatars[] = file_exists( get_template_directory() . '/assets/img/choose-us/choose-us-avatar-' . $i . '.png' )
                                            ? $t . '/img/choose-us/choose-us-avatar-' . $i . '.png'
                                            : $fallback_img;
                                    }
                                    ?>
                                    <div class="choose-us-client-row">
                                        <div class="choose-us-client-avatar"><img src="<?php echo esc_url( $choose_us_avatars[0] ); ?>" alt=""></div>
                                        <div class="choose-us-client-avatar"><img src="<?php echo esc_url( $choose_us_avatars[1] ); ?>" alt=""></div>
                                        <div class="choose-us-client-avatar"><img src="<?php echo esc_url( $choose_us_avatars[2] ); ?>" alt=""></div>
                                        <div class="choose-us-client-avatar"><img src="<?php echo esc_url( $choose_us_avatars[3] ); ?>" alt=""></div>
                                        <div class="choose-us-client-avatar"><img src="<?php echo esc_url( $choose_us_avatars[4] ); ?>" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="content fz-logistics-roles-block">
                                <span class="fz-logistics-roles-label wow fadeInUp" data-wow-delay=".2s">Our Logistics Roles</span>
                                <h3 class="fz-logistics-roles-title wow fadeInUp" data-wow-delay=".25s">Build Your Dedicated Supply Chain Team</h3>
                                <p class="fz-logistics-roles-intro text wow fadeInUp" data-wow-delay=".3s">We provide a dedicated remote logistics team across all key roles. This is supply chain BPO USA designed for growth.</p>
                                <ol class="fz-logistics-roles-list wow fadeInUp" data-wow-delay=".4s">
                                    <li><span class="role-name">Operation Manager</span></li>
                                    <li><span class="role-name"><a href="https://ezfalcons.com/logistics-coordinator/">Logistics Coordinator</a></span></li>
                                    <li><span class="role-name"><a href="https://ezfalcons.com/truck-dispatcher/">Truck Dispatcher</a></span></li>
                                    <li><span class="role-name"><a href="https://ezfalcons.com/documentation-expert/">Documentation Specialist</a></span></li>
                                    <li><span class="role-name">Accounting &amp; Finance</span></li>
                                    <li><span class="role-name">Sales &amp; Business Development</span></li>
                                    <li><span class="role-name">Administrative Assistant</span></li>
                                    <li><span class="role-name">Digital Marketing Expert</span></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="choose-us-main-item">
                            <div class="section-title">
                                <span class="wow fadeInUp">Why Choose Us</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Why Choose <br> EZ Falcons</h2>
                            </div>
                            <div class="choose-us-item">
                                <div class="choose-us-box wow fadeInUp" data-wow-delay=".3s"><div class="icon"><i class="flaticon-favorite"></i></div><div class="content"><h4>Flexible &amp; Scalable</h4><p>Scale operations without hiring delays using remote logistics staffing New York LA Chicago.</p></div></div>
                                <div class="choose-us-box bg-2 wow fadeInUp" data-wow-delay=".5s"><div class="icon"><i class="flaticon-coin-stack"></i></div><div class="content"><h4>Cost-Effective</h4><p>Our offshore logistics staff for US companies reduces operational costs significantly.</p></div></div>
                                <div class="choose-us-box bg-3 wow fadeInUp" data-wow-delay=".3s"><div class="icon"><i class="flaticon-tracking-1"></i></div><div class="content"><h4>Operations &amp; Tracking</h4><p>We handle logistics workflows including documentation and tracking.</p></div></div>
                                <div class="choose-us-box bg-4 mb-0 wow fadeInUp" data-wow-delay=".5s"><div class="icon"><i class="flaticon-target-audience"></i></div><div class="content"><h4>Customer-Centric</h4><p>We understand logistics businesses and deliver tailored solutions.</p></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-bg-section fix bg-cover" style="background-image: url('<?php echo esc_url( $t ); ?>/img/cta/cta-bg-01.webp');">
        <div class="cta-bg-wrapper">
            <h2 class="wow img-custom-anim-left" data-wow-duration="1.3s" data-wow-delay="0.3s">Book a discovery call with EZ </h2>
        </div>
    </section>

    <!-- Free EZ Falcons Operations Audit - design match -->
    <section class="fz-audit-section section-padding fix">
        <div class="fz-audit-bg-pattern"></div>
        <div class="container-fluid px-lg-5">
            <!-- White audit card -->
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

    <?php /* Team - EZ Falcons (commented out)
    <!-- Team - EZ Falcons -->
    <section class="team-section section-padding fix">
        <div class="container-fluid">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Meet Our Team</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">EZ Falcons &amp; Operations Experts</h2>
            </div>
            <div class="row gx-4 row-cols-sm-2 row-cols-1 row-cols-md-2 row-cols-md-3 row-cols-xl-5">
                <?php
                $team = [
                    ['name' => 'Sarah Mitchell', 'role' => 'Operations Manager'],
                    ['name' => 'David Chen', 'role' => 'Documentation Lead'],
                    ['name' => 'Priya Sharma', 'role' => 'Customer Support Lead'],
                    ['name' => 'Marcus Johnson', 'role' => 'Scheduling &amp; Dispatch'],
                    ['name' => 'Emily Foster', 'role' => 'EZ Falcons Director'],
                ];
                $team_dir = get_template_directory() . '/assets/img/team';
                $team_uri = $t . '/img/team';
                foreach ( $team as $i => $member ) :
                    $delay = [ '.3s', '.5s', '.7s', '.3s', '.5s' ][ $i ];
                    $num   = $i + 1;
                    $team_img = ( file_exists( $team_dir . '/team-' . $num . '.webp' ) )
                        ? $team_uri . '/team-' . $num . '.webp'
                        : ( file_exists( $team_dir . '/team-' . $num . '.png' ) )
                            ? $team_uri . '/team-' . $num . '.png'
                            : $team_uri . '/team-' . $num . '.jpg';
                ?>
                <div class="col wow fadeInUp" data-wow-delay="<?php echo esc_attr( $delay ); ?>">
                    <div class="team-card-item">
                        <div class="team-image">
                            <img src="<?php echo esc_url( $team_img ); ?>" alt="<?php echo esc_attr( $member['name'] ); ?>">
                            <div class="social-profile">
                                <span class="plus-btn"><i class="fas fa-plus"></i></span>
                                <ul>
                                    <?php get_template_part( 'template-parts/social-external-links', null, [ 'variant' => 'list-items' ] ); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5><a href="<?php echo esc_url( $ab ); ?>"><?php echo esc_html( $member['name'] ); ?></a></h5>
                            <p><?php echo esc_html( $member['role'] ); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    */ ?>

    <!-- Feature 2 - EZ Falcons -->
    <section class="feature-section-2 fz-feature2-bpo section-padding fix">
        <div class="container">
            <div class="feature-wrapper-2">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="fz-feature2-block wow fadeInUp" data-wow-delay=".3s">
                            <span class="fz-feature2-accent"></span>
                            <p class="fz-feature2-text">Reduce your administrative staffing costs by <strong class="fz-feature2-highlight">60%</strong> with one flat, transparent monthly rate.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fz-feature2-block wow fadeInUp" data-wow-delay=".4s">
                            <span class="fz-feature2-accent"></span>
                            <p class="fz-feature2-text">We only hire the top <strong class="fz-feature2-highlight">1%</strong> of talent with proven experience in NVOCC, trucking, and customs brokerage.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <a href="<?php echo esc_url( $s ); ?>" class="theme-btn wow fadeInUp" data-wow-delay=".5s">Explore Our Logistics Roles <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand -->
    <section class="brand-section section-bg fix">
        <div class="container">
            <div class="brand-wrapper">
                <h5 class="wow fadeInUp" data-wow-delay=".3s">Reliability Recognized by Top Brands</h5>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <?php for ( $i = 1; $i <= 6; $i++ ) : ?>
                        <div class="swiper-slide">
                            <div class="brand-image text-center">
                                <img src="<?php echo esc_url( $t ); ?>/img/brand/<?php echo sprintf( '%02d', $i ); ?>.png" alt="img">
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial - EZ Falcons -->
    <section class="testimonial-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Client Success Stories</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">What Our Clients Say</h2>
            </div>
            <div class="testimonial-wrapper testimonial-wrapper--home">
                <div class="swiper testimonial-slider testimonial-slider-home">
                <div class="swiper-wrapper">
                    <?php
                    $testimonial_dir = get_template_directory() . '/assets/img/testimonial';
                    $testimonial_uri = $t . '/img/testimonial';
                    $testimonials = [
                        ['quote' => '“EZ Falcons took over our back office and reduced costs by 60%. Now our team focuses on freight.”', 'name' => 'Operations Director', 'role' => 'NVOCC', 'img' => 'testimonial-client-1.png'],
                        ['quote' => '“Highly skilled team with strong documentation and carrier support. Excellent outsourcing partner.”', 'name' => 'VP Operations', 'role' => 'Freight Forwarder', 'img' => 'testimonial-client-2.png'],
                        ['quote' => '“Scaled operations without increasing payroll. Reliable and cost-effective solution.”', 'name' => 'Director', 'role' => 'Trucking Company', 'img' => 'testimonial-client-3.png'],
                    ];
                    foreach ( $testimonials as $test ) :
                        $test_src = file_exists( $testimonial_dir . '/' . $test['img'] ) ? $testimonial_uri . '/' . $test['img'] : $testimonial_uri . '/client-1.png';
                    ?>
                    <div class="swiper-slide">
                        <div class="testimonial-box-item">
                            <div class="content">
                                <p><?php echo esc_html( $test['quote'] ); ?></p>
                                <div class="client-info-item">
                                    <div class="client-info">
                                        <div class="client-image testimonial-client-photo"><img src="<?php echo esc_url( $test_src ); ?>" alt="<?php echo esc_attr( $test['name'] ); ?>"></div>
                                        <h5><?php echo esc_html( $test['name'] ); ?><span>/<?php echo esc_html( $test['role'] ); ?></span></h5>
                                    </div>
                                    <div class="icon"><i class="flaticon-speech-bubbles"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            </div>
        </div>
        <div class="container">
            <div class="swiper-dot"><div class="dot2"></div></div>
        </div>
    </section>

    <!-- FAQ - EZ Falcons -->
    <section class="faq-section fz-faq-bpo section-padding section-bg fix">
        <div class="container">
            <div class="faq-wrapper-2">
                <div class="row g-4 align-items-start">
                    <div class="col-lg-4 col-xl-4">
                        <div class="fz-faq-left wow fadeInUp" data-wow-delay=".2s">
                            <h2 class="fz-faq-heading">Logistics BPO<br>FAQ</h2>
                            <p class="fz-faq-intro">If this is your first time exploring logistics outsourcing, you likely have questions about how it works, pricing, and overall value. This logistics outsourcing FAQ is designed to clarify everything you need to know.</p>
                            <p class="fz-faq-phone"><strong>Phone</strong><br><a href="tel:+12132170699" class="fz-faq-phone-link">213-217-0699</a></p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-8">
                        <div class="faq-content">
                            <div class="faq-items-2">
                                <div class="accordion" id="accordionHomeFaq">
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".1s">
                                        <h2 class="accordion-header" id="headingHomeFaq01">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHomeFaq01" aria-expanded="true" aria-controls="collapseHomeFaq01">What exactly does EZ Falcons do?</button>
                                        </h2>
                                        <div id="collapseHomeFaq01" class="accordion-collapse collapse show" aria-labelledby="headingHomeFaq01" data-bs-parent="#accordionHomeFaq">
                                            <div class="accordion-body"><p>We provide logistics BPO services USA including back-office support, remote staffing, and operational management.</p></div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".15s">
                                        <h2 class="accordion-header" id="headingHomeFaq02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHomeFaq02" aria-expanded="false" aria-controls="collapseHomeFaq02">Who are your ideal clients?</button>
                                        </h2>
                                        <div id="collapseHomeFaq02" class="accordion-collapse collapse" aria-labelledby="headingHomeFaq02" data-bs-parent="#accordionHomeFaq">
                                            <div class="accordion-body">
                                                <ul style="margin: 0; padding-left: 20px; color: var(--text); font-size: 15px; line-height: 1.8;">
                                                    <li>NVOCCs</li>
                                                    <li>Freight Forwarders</li>
                                                    <li>Trucking Companies</li>
                                                    <li>Customs Brokers</li>
                                                    <li>Warehousing &amp; Distribution</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".2s">
                                        <h2 class="accordion-header" id="headingHomeFaq03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHomeFaq03" aria-expanded="false" aria-controls="collapseHomeFaq03">Are your employees logistics experts?</button>
                                        </h2>
                                        <div id="collapseHomeFaq03" class="accordion-collapse collapse" aria-labelledby="headingHomeFaq03" data-bs-parent="#accordionHomeFaq">
                                            <div class="accordion-body"><p>Yes. Our teams are trained in logistics standards, compliance, and operations.</p></div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".25s">
                                        <h2 class="accordion-header" id="headingHomeFaq04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHomeFaq04" aria-expanded="false" aria-controls="collapseHomeFaq04">How much does it cost?</button>
                                        </h2>
                                        <div id="collapseHomeFaq04" class="accordion-collapse collapse" aria-labelledby="headingHomeFaq04" data-bs-parent="#accordionHomeFaq">
                                            <div class="accordion-body"><p>Flat rate pricing with no hidden costs—making logistics services outsourcing highly cost-effective.</p></div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".3s">
                                        <h2 class="accordion-header" id="headingHomeFaq05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHomeFaq05" aria-expanded="false" aria-controls="collapseHomeFaq05">Is logistics outsourcing worth it?</button>
                                        </h2>
                                        <div id="collapseHomeFaq05" class="accordion-collapse collapse" aria-labelledby="headingHomeFaq05" data-bs-parent="#accordionHomeFaq">
                                            <div class="accordion-body"><p>Yes. Companies reduce costs, improve efficiency, and scale faster through outsourcing.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <a href="<?php echo esc_url( $faq ); ?>" class="theme-btn wow fadeInUp" data-wow-delay=".35s">View All FAQs &amp; Get in Touch <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php /* News section - commented out
    <!-- News -->
    <section class="news-section section-padding pt-0">
        <div class="container">
            <div class="news-wrapper">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="news-content sticky-style">
                            <div class="section-title mb-0">
                                <span class="wow fadeInUp">Blog and News</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Trends Shaping <br> the Industry</h2>
                            </div>
                            <p class="news-text wow fadeInUp" data-wow-delay=".5s">We prioritize safety, reliability, and efficiency in every delivery offering customized solutions.</p>
                            <div class="news-btn wow fadeInUp" data-wow-delay=".3s">
                                <a href="<?php echo esc_url( $ct ); ?>" class="theme-btn">View All News <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="news-card-item wow fadeInUp" data-wow-delay=".3s">
                            <div class="news-image"><img src="<?php echo esc_url( $t ); ?>/img/news/news-1.webp" alt="img"></div>
                            <div class="news-content">
                                <ul class="news-meta"><li>Logistics</li><li>20 January 2025</li></ul>
                                <h4><a href="<?php echo esc_url( $ct ); ?>">Unlocking the Power of <br> Smart Logistics Solutions</a></h4>
                                <a href="<?php echo esc_url( $ct ); ?>" class="link-btns">Read more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="news-card-item wow fadeInUp" data-wow-delay=".5s">
                            <div class="news-image"><img src="<?php echo esc_url( $t ); ?>/img/news/news-2.webp" alt="img"></div>
                            <div class="news-content">
                                <ul class="news-meta"><li>Transport</li><li>23 January 2025</li></ul>
                                <h4><a href="<?php echo esc_url( $ct ); ?>">Evolution of Logistics: <br> Past, Present, and Future</a></h4>
                                <a href="<?php echo esc_url( $ct ); ?>" class="link-btns">Read more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="news-card-item mb-0 wow fadeInUp" data-wow-delay=".7s">
                            <div class="news-image"><img src="<?php echo esc_url( $t ); ?>/img/news/news-3.webp" alt="img"></div>
                            <div class="news-content">
                                <ul class="news-meta"><li>Logistics</li><li>25 January 2025</li></ul>
                                <h4><a href="<?php echo esc_url( $ct ); ?>">Enhancing Efficiency and <br> Reducing Costs</a></h4>
                                <a href="<?php echo esc_url( $ct ); ?>" class="link-btns">Read more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
    */ ?>

    <!-- Final CTA -->
    <section class="section-padding pt-0 fix text-center">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Ready to Scale Your Logistics Operations?</h2>
                <p class="wow fadeInUp" data-wow-delay=".3s" style="margin: 12px 0 0; font-size: 16px; color: var(--text);">Stop handling everything internally. Start scaling with a trusted partner.</p>
            </div>
            <div class="d-flex justify-content-center gap-3 flex-wrap wow fadeInUp" data-wow-delay=".4s" style="margin-top: 24px;">
                <a href="<?php echo esc_url( $s ); ?>" class="theme-btn">Logistics outsourcing services <i class="fa-solid fa-arrow-right"></i></a>
                <a href="https://ezfalcons.com/price/" class="theme-btn" style="background:var(--header2)">Pricing plans <i class="fa-solid fa-arrow-right"></i></a>
                <a href="<?php echo esc_url( $ct ); ?>" class="theme-btn">Contact EZ Falcons <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "EZ Falcons",
      "url": "https://ezfalcons.com/",
      "description": "Logistics BPO services USA providing back-office outsourcing, remote staffing, and supply chain support for logistics companies.",
      "areaServed": "United States",
      "services": [
        "Logistics BPO",
        "Back Office Outsourcing",
        "Remote Logistics Staffing",
        "Supply Chain Support"
      ]
    }
    </script>
</main>
