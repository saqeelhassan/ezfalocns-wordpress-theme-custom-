<?php
$theme_uri = get_template_directory_uri();
$assets    = $theme_uri . '/assets';
$home      = home_url( '/' );
$contact   = home_url( '/contact/' );
$about     = home_url( '/about/' );
$pricing   = home_url( '/price/' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="-H1Y-XtkYy89-BCXhF5DvCapx2n2MzkIo15xjjOKGkk" />
    <?php if ( is_front_page() ) : ?>
    <meta name="msvalidate.01" content="27B57CFB38C3E2E81A46AEB8EFFBB1B0" />
    <?php endif; ?>
    <?php
    // Let Yoast SEO / Rank Math output meta description (and OG) via wp_head — a static tag here overrides them.
    if ( ! defined( 'WPSEO_VERSION' ) && ! defined( 'RANK_MATH_VERSION' ) ) {
        if ( is_page( 'about' ) || is_page_template( 'page-about.php' ) ) {
            $fz_meta_desc = 'EZ Falcons is a logistics outsourcing company helping US freight forwarders, trucking companies & NVOCCs reduce costs and scale operations.';
        } elseif ( is_page( 'account-manager' ) || is_page_template( 'page-account-manager.php' ) ) {
            $fz_meta_desc = 'Logistics account manager remote services for US freight brokers, NVOCCs & trucking firms. Manage AR/AP, auditing, and client relations.';
        } elseif ( is_page( 'administrative-assistant' ) || is_page_template( 'page-administrative-assistant.php' ) ) {
            $fz_meta_desc = 'Virtual administrative assistant logistics services for US companies. Manage admin tasks, scheduling, and support with remote logistics staff.';
        } elseif ( is_page( 'customs-brokers' ) || is_page_template( 'page-customs-brokers.php' ) ) {
            $fz_meta_desc = 'Customs broker back office outsourcing for US firms. Remote entry prep, ISF filing, PGA support & compliance-driven data services 24/7.';
        } elseif ( is_page( 'digital-marketing-expert' ) || is_page_template( 'page-digital-marketing-expert.php' ) ) {
            $fz_meta_desc = 'Digital marketing for logistics outsourcing. SEO, lead generation, and social media management for freight brokers & forwarders in the USA.';
        } elseif ( is_page( 'documentation-expert' ) || is_page_template( 'page-documentation-expert.php' ) ) {
            $fz_meta_desc = 'Customs documentation outsourcing USA for freight forwarders & NVOCCs. ISF filing, B/L, compliance & remote documentation specialists.';
        } elseif ( is_page( 'faq' ) || is_page_template( 'page-faq.php' ) ) {
            $fz_meta_desc = 'Logistics BPO FAQ covering outsourcing, pricing, benefits & process. Learn how to outsource logistics services efficiently in the USA.';
        } elseif ( is_page( 'freight-forwarders' ) || is_page_template( 'page-freight-forwarders.php' ) ) {
            $fz_meta_desc = 'Freight forwarding back office outsourcing USA. Remote support, documentation, and operations for forwarders in Los Angeles, Miami, Houston.';
        } elseif ( is_page( 'logistics-accounting-financial' ) || is_page_template( 'page-logistics-accounting-financial.php' ) ) {
            $fz_meta_desc = 'Freight billing outsourcing USA with remote AP/AR, invoicing & auditing. Logistics accounting outsourcing for trucking & freight companies.';
        } elseif ( is_page( 'logistics-coordinator' ) || is_page_template( 'page-logistics-coordinator.php' ) ) {
            $fz_meta_desc = 'Remote logistics coordinator USA for tracking, communication & shipment management. Outsource logistics coordination services across NY, TX, CA, FL.';
        } elseif ( is_page( 'nvocc' ) || is_page_template( 'page-nvocc.php' ) ) {
            $fz_meta_desc = 'NVOCC back office outsourcing USA with documentation, ISF, AMS & operations support. Scale with remote NVOCC teams across major US ports.';
        } elseif ( is_page( 'operation-manager' ) || is_page_template( 'page-operation-manager.php' ) ) {
            $fz_meta_desc = 'Remote operations manager logistics USA for shipment planning, SOP control & team oversight. Outsource logistics operations with expert support.';
        } elseif ( is_page( 'price' ) || is_page_template( 'page-price.php' ) ) {
            $fz_meta_desc = 'Logistics BPO pricing USA with affordable remote staff. Compare outsourcing costs and see how much it costs to outsource logistics operations.';
        } elseif ( is_page( 'sales-business-development' ) || is_page_template( 'page-sales-business-development.php' ) ) {
            $fz_meta_desc = 'Boost revenue with logistics sales outsourcing. Remote SDRs, lead generation, and business development for freight companies across the USA.';
        } elseif ( is_page( 'shipping-lines-agents' ) || is_page_template( 'page-shipping-lines-agents.php' ) ) {
            $fz_meta_desc = 'Shipping lines back office outsourcing for agents in the USA. Remote support, documentation, and maritime operations for global liner agencies.';
        } elseif ( is_page( 'truck-dispatcher' ) || is_page_template( 'page-truck-dispatcher.php' ) ) {
            $fz_meta_desc = 'Truck dispatcher outsourcing for US trucking companies. Hire remote dispatchers, reduce deadhead, and maximize revenue with expert freight dispatch services.';
        } elseif ( is_page( 'trucking-companies-owner-operators' ) || is_page_template( 'page-trucking-companies-owner-operators.php' ) ) {
            $fz_meta_desc = 'Virtual truck dispatcher and remote dispatch services for owner-operators and fleets. Reduce deadhead, improve RPM, and outsource trucking operations across the USA.';
        } elseif ( is_page( 'warehousing-distribution-companies' ) || is_page_template( 'page-warehousing-distribution-companies.php' ) ) {
            $fz_meta_desc = '3PL back office outsourcing and warehouse support services for US distribution companies. Manage WMS, inventory, and logistics coordination with remote teams.';
        } elseif ( is_front_page() || is_home() ) {
            $fz_meta_desc = 'Logistics BPO services USA for NVOCCs, forwarders & trucking firms. Outsource logistics operations and reduce costs with remote teams.';
        } else {
            $fz_meta_desc = get_bloginfo( 'description', 'display' );
        }
        if ( $fz_meta_desc !== '' ) {
            echo '<meta name="description" content="' . esc_attr( $fz_meta_desc ) . '">' . "\n    ";
        }
    }
    ?>
    <link rel="icon" type="image/svg+xml" href="<?php echo esc_url( $assets ); ?>/img/Ez-icon-logo.svg">
    <link rel="shortcut icon" href="<?php echo esc_url( $assets ); ?>/img/Ez-icon-logo-2.svg">
    <!-- Preload critical fonts -->
    <link rel="preload" href="<?php echo esc_url( $assets ); ?>/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo esc_url( $assets ); ?>/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
            <span data-text-preloader="E" class="letters-loading">E</span>
            <span data-text-preloader="Z" class="letters-loading">Z</span>
        </div>
        <p class="text-center">FALCONS</p>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left"><div class="bg"></div></div>
            <div class="col-3 loader-section section-left"><div class="bg"></div></div>
            <div class="col-3 loader-section section-right"><div class="bg"></div></div>
            <div class="col-3 loader-section section-right"><div class="bg"></div></div>
        </div>
    </div>
</div>

<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

<!-- Offcanvas -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="<?php echo esc_url( $home ); ?>">
                            <?php
                            $offcanvas_logo = file_exists( get_template_directory() . '/assets/img/logo/ez-falcons-logo.png' )
                                ? $assets . '/img/logo/ez-falcons-logo.png'
                                : $assets . '/img/logo/black-logo.svg';
                            ?>
                            <img src="<?php echo esc_url( $offcanvas_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="custom-logo" width="200" height="65" decoding="async">
                        </a>
                    </div>
                    <div class="offcanvas__close"><button><i class="fas fa-times"></i></button></div>
                </div>
                <p class="mt-4 d-none d-xl-block">We specialize in delivering seamless, reliable, and efficient logistics solutions tailored to meet the dynamic needs of our clients</p>
                <div class="mobile-menu fix mt-3"></div>
                <div class="social-icon d-flex align-items-center">
                    <?php get_template_part( 'template-parts/social-external-links', null, [] ); ?>
                </div>
                <div class="offcanvas-gallery-area d-none d-xl-block">
                    <div class="offcanvas-gallery-items">
                        <div class="header-gallery"><img src="<?php echo esc_url( $assets ); ?>/img/header/1.webp" alt="" width="100" height="100"></div>
                        <div class="header-gallery"><img src="<?php echo esc_url( $assets ); ?>/img/header/2.webp" alt="" width="100" height="100"></div>
                        <div class="header-gallery"><img src="<?php echo esc_url( $assets ); ?>/img/header/3.webp" alt="" width="100" height="100"></div>
                    </div>
                    <div class="offcanvas-gallery-items">
                        <div class="header-gallery"><img src="<?php echo esc_url( $assets ); ?>/img/header/4.webp" alt="" width="100" height="100"></div>
                        <div class="header-gallery"><img src="<?php echo esc_url( $assets ); ?>/img/header/5.webp" alt="" width="100" height="100"></div>
                        <div class="header-gallery"><img src="<?php echo esc_url( $assets ); ?>/img/header/6.webp" alt="" width="100" height="100"></div>
                    </div>
                </div>
                <div class="offcanvas__contact">
                    <h3>Information</h3>
                    <ul class="contact-list">
                        <li><span>Address:</span> 500 E Broughton Street Savannah, GA 31401 United States</li>
                        <li><span>Call Us:</span> <a href="tel:+12132170699">213-217-0699</a></li>
                        <li><span>Email:</span> <a href="mailto:Info@ezfalcons.com">Info@ezfalcons.com</a></li>
                    </ul>
                </div>
                <a href="<?php echo esc_url( $contact ); ?>" class="theme-btn">BOOK A DELIVERY CALL <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Header top -->
<div class="header-top-section">
    <div class="container-fluid">
        <div class="header-top-wrapper">
            <ul class="contact-list">
                <li><i class="fa-solid fa-phone-flip"></i> <a href="tel:+12132170699">Call : 213-217-0699</a></li>
                <li><i class="fa-sharp fa-solid fa-envelope"></i> <a href="mailto:Info@ezfalcons.com">Email : Info@ezfalcons.com</a></li>
            </ul>
            <ul class="social-icon d-flex align-items-center">
                <li><i class="fa-solid fa-location-dot"></i> 500 E Broughton Street Savannah, GA 31401 United States</li>
                <li>
                    <?php get_template_part( 'template-parts/social-external-links', null, [] ); ?>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Header -->
<header id="header-sticky" class="header-section header-1 header-2">
    <div class="container-fluid">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="header-left">
                    <div class="logo">
                        <?php
                        $logo_alt = esc_attr( get_bloginfo( 'name' ) );
                        if ( has_custom_logo() ) {
                            $logo_img = get_theme_mod( 'custom_logo' );
                            $logo_img = wp_get_attachment_image( $logo_img, 'full', false, [ 'class' => 'custom-logo', 'alt' => $logo_alt ] );
                        } else {
                            $default_logo = file_exists( get_template_directory() . '/assets/img/logo/ez-falcons-logo.png' )
                                ? $assets . '/img/logo/ez-falcons-logo.png'
                                : $assets . '/img/logo/black-logo.svg';
                            $logo_img = '<img src="' . esc_url( $default_logo ) . '" alt="' . $logo_alt . '" class="custom-logo" width="200" height="65">';
                        }
                        ?>
                        <a href="<?php echo esc_url( $home ); ?>" class="header-logo"><?php echo $logo_img; ?></a>
                        <a href="<?php echo esc_url( $home ); ?>" class="header-logo-2"><?php echo $logo_img; ?></a>
                    </div>
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="<?php echo esc_url( $home ); ?>">Home</a></li>
                                    <li><a href="<?php echo esc_url( $about ); ?>">About Us</a></li>
                                    <li class="has-dropdown">
                                        <a href="#">Our Roles <i class="fas fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo esc_url( home_url( '/operation-manager/' ) ); ?>">Operation Manager</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/logistics-coordinator/' ) ); ?>">Logistics Coordinator</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/truck-dispatcher/' ) ); ?>">Truck Dispatcher</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/documentation-specialist/' ) ); ?>">Documentation Specialist</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/logistics-accounting-financial/' ) ); ?>">Accounting &amp; Finance</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/sales-business-development/' ) ); ?>">Sales &amp; Business Development</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/administrative-assistant/' ) ); ?>">Administrative Assistant</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/digital-marketing-expert/' ) ); ?>">Digital Marketing Expert</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="#">Industry <i class="fas fa-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo esc_url( home_url( '/industries/nvocc/' ) ); ?>">NVOCC</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/industries/freight-forwarders/' ) ); ?>">Freight Forwarding</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/industries/trucking-companies-owner-operators/' ) ); ?>">Trucking Companies &amp; Owner Operators</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/industries/shipping-lines-agents/' ) ); ?>">Shipping Lines / Agents</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/industries/customs-brokers/' ) ); ?>">Customs Brokers</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/logistics-accounting-financial/' ) ); ?>">Logistics Accounting &amp; Financial</a></li>
                                            <li><a href="<?php echo esc_url( home_url( '/industries/warehousing-distribution-companies/' ) ); ?>">Warehouse &amp; Distribution</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo esc_url( $pricing ); ?>">Price</a></li>
                                    <li><a href="<?php echo esc_url( $contact ); ?>">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <a href="<?php echo esc_url( $contact ); ?>" class="theme-btn">BOOK A DELIVERY CALL <i class="fa-solid fa-arrow-right"></i></a>
                    <div class="header__hamburger d-xl-block my-auto">
                        <div class="sidebar__toggle">
                            <div class="header-bar"><span></span><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php if ( ! is_front_page() || ( is_front_page() && is_home() ) ) : ?>
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>
<?php endif; ?>
