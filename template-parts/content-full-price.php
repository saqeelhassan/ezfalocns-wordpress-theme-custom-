<?php
/**
 * Full Price / Pricing page content. Edit this file to change the Price page.
 */
$t  = fz_assets();
$ct = fz_contact();
$s  = home_url( '/service/' );
$pr = home_url( '/price/' );
$lc = home_url( '/logistics-coordinator/' );
$am = home_url( '/account-manager/' );

$logo_img = file_exists( get_template_directory() . '/assets/img/logo/ez-falcons-logo.png' )
    ? $t . '/img/logo/ez-falcons-logo.png'
    : $t . '/img/logo/black-logo.svg';
?>

<!-- Intro -->
<section class="section-padding fix">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <div class="section-title mb-0">
                    <span class="wow fadeInUp">Logistics BPO Pricing USA</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Work Smarter, Scale Faster</h2>
                </div>
                <div class="mt-4 wow fadeInUp" data-wow-delay=".3s">
                    <p>Our logistics BPO pricing model is designed to give logistics companies a clear, affordable way to scale operations. EZ Falcons helps businesses understand how much does logistics BPO cost while delivering high-quality remote staffing solutions.</p>
                    <h4 class="mt-4 mb-3">Flexible Pricing Plans for Logistics Companies</h4>
                    <p>EZ Falcons offers transparent logistics outsourcing pricing for NVOCCs, Freight Forwarders, Trucking Companies, and Shipping Lines.</p>
                    <p class="mt-3">Our goal is to provide affordable logistics staff USA without the burden of traditional hiring costs. Looking for specific roles? Explore our <a href="<?php echo esc_url( $lc ); ?>">logistics coordinator services</a> or <a href="<?php echo esc_url( $am ); ?>">account manager services</a>.</p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="thumb" style="border-radius:10px; overflow:hidden;">
                    <img src="<?php echo esc_url( $t ); ?>/img/logistics-bpo-pricing-usa-cost-comparison.webp" alt="logistics BPO pricing USA cost comparison showing affordable remote logistics staff and outsourcing savings" title="Logistics BPO Pricing USA | EZ Falcons" style="width:100%; height:auto;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Flexible Pricing Plans -->
<section class="fz-flexible-pricing-hero section-padding section-bg fix">
    <div class="container">
        <div class="fz-flexible-pricing-header section-title text-center">
            <div class="fz-flexible-pricing-logo wow fadeInUp" data-wow-delay=".2s">
                <img src="<?php echo esc_url( $logo_img ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="fz-flexible-pricing-logo-img">
            </div>
            <span class="wow fadeInUp" data-wow-delay=".25s">Pricing Options</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Flexible Pricing Plans</h2>
            <p class="fz-flexible-pricing-subtitle wow fadeInUp" data-wow-delay=".4s">We offer scalable pricing based on your operational needs.</p>
        </div>
        <div class="fz-flexible-pricing-cards row g-4 justify-content-center align-items-stretch">
            <div class="col-lg-6 col-md-6">
                <div class="fz-flexible-pricing-card wow fadeInUp" data-wow-delay=".3s">
                    <span class="fz-flexible-pricing-card__label">Full Time Plan</span>
                    <div class="fz-flexible-pricing-card__price">
                        <span class="fz-flexible-pricing-card__amount">$10</span>
                        <span class="fz-flexible-pricing-card__period">PER HOUR</span>
                    </div>
                    <ul style="list-style:none; padding:0; margin:0 0 24px 0; color:white;">
                        <li style="margin-bottom:8px;"><i class="fa-solid fa-check" style="color:var(--theme); margin-right:8px;"></i> Dedicated full-time resource</li>
                        <li style="margin-bottom:8px;"><i class="fa-solid fa-check" style="color:var(--theme); margin-right:8px;"></i> Ideal for high-volume operations</li>
                    </ul>
                    <a href="<?php echo esc_url( $ct ); ?>" class="fz-flexible-pricing-card__btn theme-btn">Start Now <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="fz-flexible-pricing-card wow fadeInUp" data-wow-delay=".5s">
                    <span class="fz-flexible-pricing-card__label">Part Time Plan</span>
                    <div class="fz-flexible-pricing-card__price">
                        <span class="fz-flexible-pricing-card__amount">$12</span>
                        <span class="fz-flexible-pricing-card__period">PER HOUR</span>
                    </div>
                    <ul style="list-style:none; padding:0; margin:0 0 24px 0; color:white;">
                        <li style="margin-bottom:8px;"><i class="fa-solid fa-check" style="color:var(--theme); margin-right:8px;"></i> Flexible support hours</li>
                        <li style="margin-bottom:8px;"><i class="fa-solid fa-check" style="color:var(--theme); margin-right:8px;"></i> Ideal for growing teams</li>
                    </ul>
                    <a href="<?php echo esc_url( $ct ); ?>" class="fz-flexible-pricing-card__btn theme-btn">Start Now <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cost Comparison Cards -->
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

<!-- What Makes Us Different (Why EZ Falcons) -->
<section class="section-padding section-bg fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">Why EZ Falcons Pricing</span>
            <h2 class="wow fadeInUp" data-wow-delay=".2s">What Makes EZ Falcons Different</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="choose-us-box" style="height: 100%; padding: 28px 24px; border-radius: 12px; border: 1px solid rgba(15, 49, 58, 0.08); background: var(--white);">
                    <div class="icon" style="margin-bottom: 16px;"><i class="flaticon-freight" style="font-size: 42px; color: var(--theme);"></i></div>
                    <div class="content">
                        <h4 style="margin-bottom: 12px;">Built for the Logistics Industry</h4>
                        <p style="margin: 0; font-size: 15px; line-height: 1.65; color: var(--text);">We specialize in logistics outsourcing, not general services.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".35s">
                <div class="choose-us-box" style="height: 100%; padding: 28px 24px; border-radius: 12px; border: 1px solid rgba(15, 49, 58, 0.08); background: var(--white);">
                    <div class="icon" style="margin-bottom: 16px;"><i class="flaticon-coin-stack" style="font-size: 42px; color: var(--theme);"></i></div>
                    <div class="content">
                        <h4 style="margin-bottom: 12px;">Flexible Pricing – No High Overheads</h4>
                        <p style="margin: 0; font-size: 15px; line-height: 1.65; color: var(--text);">Our logistics outsourcing pricing eliminates unnecessary costs and allows businesses to scale safely.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="choose-us-box" style="height: 100%; padding: 28px 24px; border-radius: 12px; border: 1px solid rgba(15, 49, 58, 0.08); background: var(--white);">
                    <div class="icon" style="margin-bottom: 16px;"><i class="flaticon-target-audience" style="font-size: 42px; color: var(--theme);"></i></div>
                    <div class="content">
                        <h4 style="margin-bottom: 12px;">Global Hiring Made Easy</h4>
                        <p style="margin: 0; font-size: 15px; line-height: 1.65; color: var(--text);">We manage payroll, compliance, and HR processes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".35s">
                <div class="choose-us-box" style="height: 100%; padding: 28px 24px; border-radius: 12px; border: 1px solid rgba(15, 49, 58, 0.08); background: var(--white);">
                    <div class="icon" style="margin-bottom: 16px;"><i class="flaticon-tracking-1" style="font-size: 42px; color: var(--theme);"></i></div>
                    <div class="content">
                        <h4 style="margin-bottom: 12px;">Ready to Work from Day One</h4>
                        <p style="margin: 0; font-size: 15px; line-height: 1.65; color: var(--text);">Our staff is pre-trained in logistics tools and workflows, reducing onboarding time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Pricing Info -->
<section class="section-padding fix">
    <div class="container text-center">
        <h2 class="wow fadeInUp" data-wow-delay=".2s" style="margin-bottom:30px;">Why Choose EZ Falcons Pricing</h2>
        <div class="row g-4 justify-content-center text-start">
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                <div style="padding:24px; background:var(--section-bg); border-radius:10px; height:100%;">
                    <h5 class="mb-3">Transparent Cost Structure</h5>
                    <p>You always know how much does it cost to outsource logistics USA with no hidden fees.</p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".4s">
                <div style="padding:24px; background:var(--section-bg); border-radius:10px; height:100%;">
                    <h5 class="mb-3">Scalable Staffing Model</h5>
                    <p>Scale your team up or down based on business demand.</p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".5s">
                <div style="padding:24px; background:var(--section-bg); border-radius:10px; height:100%;">
                    <h5 class="mb-3">Enterprise-Level Solutions</h5>
                    <p>EZ Falcons delivers enterprise logistics pricing solutions USA for growing logistics companies.</p>
                </div>
            </div>
        </div>
        
        <div class="mt-5 text-start wow fadeInUp" data-wow-delay=".6s" style="max-width:800px; margin:0 auto; padding:30px; border-radius:10px; border:1px solid var(--theme);">
            <h4 class="mb-3">Benefits of Logistics BPO Pricing Model</h4>
            <ul style="list-style:disc; padding-left:20px; color:var(--text); margin-bottom:15px;">
                <li>Lower operational costs</li>
                <li>No long-term hiring risks</li>
                <li>Immediate access to trained professionals</li>
                <li>Improved financial predictability</li>
            </ul>
            <p>Our logistics BPO pricing USA helps companies grow without increasing overhead.</p>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding pt-0 fix text-center">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="wow fadeInUp" data-wow-delay=".2s">Ready for a Custom Quote?</h2>
            <p class="wow fadeInUp" data-wow-delay=".3s" style="margin: 12px 0 0; font-size: 16px; color: var(--text);">Get a tailored pricing plan for your logistics operations.</p>
        </div>
        <div class="d-flex justify-content-center gap-3 flex-wrap wow fadeInUp" data-wow-delay=".4s" style="margin-top: 24px;">
            <a href="<?php echo esc_url( $s ); ?>" class="theme-btn">Logistics outsourcing services <i class="fa-solid fa-arrow-right"></i></a>
            <a href="<?php echo esc_url( $pr ); ?>" class="theme-btn" style="background:var(--header2)">Pricing plans <i class="fa-solid fa-arrow-right"></i></a>
            <a href="<?php echo esc_url( $ct ); ?>" class="theme-btn">Contact EZ Falcons <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Logistics BPO Pricing",
  "provider": {
    "@type": "Organization",
    "name": "EZ Falcons",
    "url": "https://ezfalcons.com/"
  },
  "areaServed": "United States",
  "description": "Logistics BPO pricing services offering affordable remote logistics staff and outsourcing cost comparison for logistics companies.",
  "serviceType": [
    "Logistics Outsourcing Pricing",
    "Remote Staffing",
    "Cost Optimization",
    "Supply Chain Support"
  ]
}
</script>
