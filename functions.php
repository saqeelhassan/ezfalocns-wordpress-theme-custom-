<?php
/**
 * FZ Falcans Theme - Same template as Laravel project
 * Copy public/assets from Laravel into this theme folder as "assets"
 */

require_once get_template_directory() . '/inc/template-helpers.php';
require_once get_template_directory() . '/inc/import-theme-assets-to-media.php';

/**
 * Theme version for cache busting (use filemtime in dev for fresh assets).
 */
function fz_falcans_asset_version( $file_relative = null ) {
    if ( defined( 'WP_DEBUG' ) && WP_DEBUG && $file_relative ) {
        $path = get_template_directory() . '/assets/' . $file_relative;
        return file_exists( $path ) ? (string) filemtime( $path ) : null;
    }
    return wp_get_theme()->get( 'Version' ) ?: '1.3';
}

function fz_falcans_assets() {
    $theme_uri = get_template_directory_uri();
    $assets    = $theme_uri . '/assets';
    $ver       = fz_falcans_asset_version();

    wp_enqueue_style( 'bootstrap', $assets . '/css/bootstrap.min.css', [], $ver );
    wp_enqueue_style( 'all-min', $assets . '/css/all.min.css', [], $ver );
    wp_enqueue_style( 'animate', $assets . '/css/animate.css', [], $ver );
    wp_enqueue_style( 'magnific-popup', $assets . '/css/magnific-popup.css', [], $ver );
    wp_enqueue_style( 'meanmenu', $assets . '/css/meanmenu.css', [], $ver );
    wp_enqueue_style( 'swiper', $assets . '/css/swiper-bundle.min.css', [], $ver );
    wp_enqueue_style( 'nice-select', $assets . '/css/nice-select.css', [], $ver );
    wp_enqueue_style( 'ion-range', $assets . '/css/ion.rangeSlider.min.css', [], $ver );
    wp_enqueue_style( 'flaticon', $assets . '/css/flaticon.css', [], $ver );
    // Google Fonts loaded non-blocking via preload in fz_falcans_resource_hints() below.
    wp_enqueue_style( 'main', $assets . '/css/main.css', [], fz_falcans_asset_version( 'css/main.css' ) );

    $header_gap_css = '
        #header-sticky.header-section.header-1.header-2,
        .header-section.header-1.header-2 {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important;
        }
        #header-sticky.sticky,
        .header-section.sticky {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
        }
        body main,
        main.fz-page-main,
        main:first-of-type {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        .header-top-section + header ~ main,
        .header-section + main,
        header.header-section + main {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        .hero-section.hero-1,
        section.hero-section {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        .hero-1 .hero-content h1 {
            font-size: 52px;
            line-height: 1.15;
            margin-top: 6rem;
        }
        @media (max-width: 1199px) {
            .hero-1 .hero-content h1 { font-size: 46px; }
        }
        @media (max-width: 991px) {
            .hero-1 .hero-content h1 { font-size: 40px; }
        }
        @media (max-width: 767px) {
            .hero-1 .hero-content h1 { font-size: 34px; }
        }
        @media (max-width: 575px) {
            .hero-1 .hero-content h1 { font-size: 28px; }
        }
        .about-wrapper .about-content .about-icon-item { align-items: flex-start; gap: 24px; }
        .about-wrapper .about-content .about-icon-item .about-item { max-width: none; flex: 1; min-width: 0; display: flex; flex-direction: column; }
        .about-wrapper .about-content .about-icon-item .about-item .icon { flex-shrink: 0; }
        .about-feature-section .row { align-items: flex-start; }
        .about-feature-section .about-feature-items { align-items: flex-start; gap: 30px; padding: 24px 0; }
        .about-feature-section .about-feature-items .content { max-width: none; flex: 1; min-width: 0; }
        .about-feature-section .about-feature-items .thumb { flex-shrink: 0; max-width: 280px; }
        .about-feature-section .about-feature-items .thumb img { width: 100%; height: auto; display: block; object-fit: cover; border-radius: 10px; }
        .about-feature-section .about-feature-items.style-2 { padding-left: 24px; border-left: 1px solid rgba(15, 49, 58, 0.1); }
        @media (max-width: 991px) {
            .about-feature-section .about-feature-items.style-2 { padding-left: 0; border-left: none; padding-top: 20px; border-top: 1px solid rgba(15, 49, 58, 0.08); margin-top: 20px; }
        }
        @media (max-width: 767px) {
            .about-feature-section .about-feature-items { flex-direction: column; gap: 20px; padding: 20px 0; }
            .about-feature-section .about-feature-items .thumb { max-width: 100%; margin-top: 0; }
            .about-feature-section .about-feature-items.style-2 { margin-top: 32px; padding-top: 32px; border-top: 1px solid rgba(15, 49, 58, 0.08); }
        }
        .choose-us-section-2 .choose-us-wrapper-2 .icon-items-area { display: grid; grid-template-columns: 1fr 1fr; gap: 24px 32px; align-items: start; }
        .choose-us-section-2 .choose-us-wrapper-2 .icon-items-area .icon-items { display: flex; align-items: flex-start; gap: 20px; }
        .choose-us-section-2 .choose-us-wrapper-2 .icon-items-area .icon-items .icon { flex-shrink: 0; }
        @media (max-width: 767px) {
            .choose-us-section-2 .choose-us-wrapper-2 .icon-items-area { grid-template-columns: 1fr; gap: 20px; }
        }
        #key-responsibilities .how-we-work-wrapper-2 .faq-items { margin-right: 0; margin-left: 0; margin-top: 24px; }
        @media (max-width: 575px) {
            #key-responsibilities .how-we-work-wrapper-2 .faq-items .accordion .accordion-item h2 button { padding-left: 60px; padding-right: 50px; }
            #key-responsibilities .how-we-work-wrapper-2 .faq-items .accordion .accordion-item span { left: 12px; width: 40px; height: 40px; line-height: 40px; font-size: 14px; }
            #key-responsibilities .how-we-work-wrapper-2 .faq-items .accordion .accordion-item .icon { right: 12px; font-size: 32px; }
            #key-responsibilities .how-we-work-wrapper-2 .faq-items .accordion .accordion-item .accordion-body { padding-left: 16px; padding-right: 16px; padding-bottom: 20px; }
        }
        .header-section .logo .custom-logo { max-height: 50px; width: auto; height: auto; display: block; }
        /* Breadcrumb page title centered on all pages */
        .breadcrumb-wrapper .container { display: flex !important; justify-content: center !important; align-items: center !important; text-align: center !important; }
        .breadcrumb-wrapper .page-heading { display: flex !important; flex-direction: column !important; align-items: center !important; justify-content: center !important; text-align: center !important; width: 100% !important; }
        .breadcrumb-wrapper .page-heading .breadcrumb-sub-title { text-align: center !important; width: 100% !important; display: block !important; }
        .breadcrumb-wrapper .page-heading .breadcrumb-sub-title span,
        .breadcrumb-wrapper .page-heading .breadcrumb-sub-title h1 { text-align: center !important; display: block !important; width: 100% !important; margin-left: auto !important; margin-right: auto !important; }
        /* Discovery call card – attractive UI */
        .feature-contact-box.fz-discovery-call-wrapper { border: none; padding: 0; background: transparent; }
        .fz-discovery-call-wrapper .fz-discovery-call-card { background: var(--white); border-radius: 10px; padding: 32px 28px; box-shadow: var(--box-shadow); border: 1px solid rgba(15, 49, 58, 0.1); }
        .fz-discovery-call-wrapper .fz-discovery-call-header { display: flex; align-items: flex-start; gap: 16px; margin-bottom: 24px; }
        .fz-discovery-call-wrapper .fz-discovery-call-icon { width: 52px; height: 52px; border-radius: 14px; background: linear-gradient(135deg, var(--theme, #ff6832) 0%, #e85a28 100%); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 22px; flex-shrink: 0; box-shadow: 0 8px 24px rgba(255, 104, 50, 0.35); }
        .fz-discovery-call-wrapper .fz-discovery-call-title { color: var(--header, #0f313a); font-size: 1.35rem; font-weight: 700; margin: 0 0 6px; line-height: 1.3; }
        .fz-discovery-call-wrapper .fz-discovery-call-subtitle { color: var(--text, #6c757d); font-size: 0.9rem; margin: 0; }
        .fz-discovery-call-wrapper .fz-discovery-call-date-label { font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: var(--header, #0f313a); margin: 0 0 12px; }
        .fz-discovery-call-wrapper .fz-discovery-call-body { display: flex; flex-direction: row; align-items: stretch; gap: 0; }
        .fz-discovery-call-wrapper .fz-discovery-call-calendar-section { flex: 0 0 auto; min-width: 280px; max-width: 320px; }
        .fz-discovery-call-wrapper .fz-discovery-call-divider { width: 1px; min-width: 1px; height: auto; margin: 0 24px; background: linear-gradient(180deg, transparent, rgba(15, 49, 58, 0.12), transparent); align-self: stretch; }
        .fz-discovery-call-wrapper .fz-quote-cf7-form { flex: 1; min-width: 0; }
        @media (max-width: 991px) {
            .fz-discovery-call-wrapper .fz-discovery-call-bottom { flex-direction: column; }
            .fz-discovery-call-wrapper .fz-discovery-call-calendar-section { max-width: none; min-width: 0; }
            .fz-discovery-call-wrapper .fz-discovery-call-divider { width: 100%; height: 1px; margin: 24px 0; background: linear-gradient(90deg, transparent, rgba(15, 49, 58, 0.12), transparent); }
        }
        /* Calendar – clean card style */
        .fz-discovery-call-wrapper .fz-quote-calendar-wrap { background: var(--white); border-radius: 10px; padding: 20px; max-width: 100%; box-shadow: var(--box-shadow); border: 1px solid rgba(15, 49, 58, 0.1); }
        .fz-discovery-call-wrapper .fz-quote-calendar-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid rgba(15, 49, 58, 0.08); }
        .fz-discovery-call-wrapper .fz-quote-calendar-month-year { font-weight: 700; font-size: 1.05rem; color: var(--header, #0f313a); }
        .fz-discovery-call-wrapper .fz-quote-calendar-prev,
        .fz-discovery-call-wrapper .fz-quote-calendar-next { width: 36px; height: 36px; border-radius: 10px; border: 1px solid rgba(15, 49, 58, 0.12); background: #fff; cursor: pointer; padding: 0; color: var(--header, #0f313a); font-size: 12px; display: flex; align-items: center; justify-content: center; transition: all 0.2s ease; }
        .fz-discovery-call-wrapper .fz-quote-calendar-prev:hover,
        .fz-discovery-call-wrapper .fz-quote-calendar-next:hover { background: var(--theme, #ff6832); color: #fff; border-color: var(--theme, #ff6832); }
        .fz-discovery-call-wrapper .fz-quote-calendar-dow { display: grid; grid-template-columns: repeat(7, 1fr); gap: 6px; text-align: center; font-size: 11px; font-weight: 700; color: var(--text, #6c757d); margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.03em; }
        .fz-discovery-call-wrapper .fz-quote-calendar-grid { display: grid; grid-template-columns: repeat(7, 1fr); gap: 6px; }
        .fz-discovery-call-wrapper .fz-quote-calendar-cell { aspect-ratio: 1; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 600; border-radius: 50%; cursor: pointer; color: var(--header, #0f313a); transition: all 0.2s ease; }
        .fz-discovery-call-wrapper .fz-quote-calendar-cell.other-month { color: #cbd5e1; }
        .fz-discovery-call-wrapper .fz-quote-calendar-cell.past { color: #cbd5e1; cursor: not-allowed; }
        .fz-discovery-call-wrapper .fz-quote-calendar-cell.available:hover { background: rgba(13, 38, 108, 0.08); color: var(--header, #0f313a); }
        .fz-discovery-call-wrapper .fz-quote-calendar-cell.selected { background: linear-gradient(135deg, var(--theme, #ff6832) 0%, #e85a28 100%); color: #fff; box-shadow: 0 4px 14px rgba(255, 104, 50, 0.4); }
        .fz-discovery-call-wrapper .fz-quote-selected-date { margin-top: 14px; padding: 10px 14px; background: rgba(15, 49, 58, 0.06); border-radius: 10px; font-size: 13px; font-weight: 600; color: var(--header, #0f313a); display: none; }
        .fz-discovery-call-wrapper .fz-quote-selected-date:not(:empty) { display: block; }
        /* CF7 form – polished inputs */
        .fz-discovery-call-wrapper .fz-quote-cf7-form .wpcf7-form p { margin-bottom: 18px; }
        .fz-discovery-call-wrapper .fz-quote-cf7-form .wpcf7-form label { color: var(--header, #0f313a); font-weight: 600; font-size: 0.9rem; margin-bottom: 6px; display: block; }
        .fz-discovery-call-wrapper .fz-quote-cf7-form .wpcf7-form input:not([type=submit]):not([type=checkbox]):not([type=radio]), .fz-discovery-call-wrapper .fz-quote-cf7-form .wpcf7-form textarea { width: 100%; padding: 14px 18px; border-radius: 12px; border: 1px solid rgba(15, 49, 58, 0.15); background: #fff; color: var(--header); font-size: 15px; transition: border-color 0.2s ease, box-shadow 0.2s ease; }
        .fz-discovery-call-wrapper .fz-quote-cf7-form .wpcf7-form input:focus, .fz-discovery-call-wrapper .fz-quote-cf7-form .wpcf7-form textarea:focus { outline: none; border-color: var(--theme, #ff6832); box-shadow: 0 0 0 3px rgba(255, 104, 50, 0.15); }
        .fz-discovery-call-wrapper .fz-quote-cf7-form .wpcf7-form input::placeholder, .fz-discovery-call-wrapper .fz-quote-cf7-form .wpcf7-form textarea::placeholder { color: #94a3b8; }
        .fz-discovery-call-wrapper .fz-quote-cf7-form .wpcf7-form input[type=submit], .fz-discovery-call-wrapper .fz-quote-cf7-form .wpcf7-form .wpcf7-submit { margin-top: 8px; padding: 14px 28px; font-size: 1rem; font-weight: 600; border-radius: 12px; background: linear-gradient(135deg, var(--theme, #ff6832) 0%, #e85a28 100%) !important; border: none !important; color: #fff !important; cursor: pointer; transition: transform 0.2s ease, box-shadow 0.2s ease; box-shadow: 0 8px 24px rgba(255, 104, 50, 0.35); }
        .fz-discovery-call-wrapper .fz-quote-cf7-form .wpcf7-form input[type=submit]:hover, .fz-discovery-call-wrapper .fz-quote-cf7-form .wpcf7-form .wpcf7-submit:hover { transform: translateY(-2px); box-shadow: 0 12px 28px rgba(255, 104, 50, 0.4); }
        .fz-discovery-call-wrapper .fz-quote-cf7-form .wpcf7-response-output { margin: 16px 0 0; padding: 12px 16px; border-radius: 12px; font-size: 14px; }
        @media (max-width: 575px) { .fz-discovery-call-wrapper .fz-discovery-call-card { padding: 24px 20px; } .fz-discovery-call-wrapper .fz-discovery-call-counter-wrap { float: none; margin-left: 0; margin-top: 12px; } }
        .bpo-services-section .bpo-services-icon { background: transparent !important; }
        .bpo-services-section .bpo-services-icon img { width: 100%; height: 100%; object-fit: contain; max-width: 190px; max-height: 190px; }
        .bpo-services-section .client-info-image .client-image { width: 190px; height: 190px; flex-shrink: 0; overflow: hidden; border-radius: 50%; }
        .bpo-services-section .client-info-image .client-image img { width: 100%; height: 100%; object-fit: cover; display: block; }
        .choose-us-wrapper .red-box .choose-us-client-row { display: flex; align-items: center; justify-content: center; gap: 0; margin-top: 16px; }
        .choose-us-wrapper .red-box .choose-us-client-avatar { width: 44px; height: 44px; border-radius: 50%; overflow: hidden; border: 2px solid rgba(255,255,255,0.6); flex-shrink: 0; margin-left: -10px; }
        .choose-us-wrapper .red-box .choose-us-client-avatar:first-child { margin-left: 0; }
        .choose-us-wrapper .red-box .choose-us-client-avatar img { width: 100%; height: 100%; object-fit: cover; display: block; }
        .team-section .team-card-item .team-image { aspect-ratio: 1; overflow: hidden; }
        .team-section .team-card-item .team-image img { width: 100%; height: 100%; object-fit: cover; display: block; }
        .testimonial-section .testimonial-wrapper--home { margin-left: 0; margin-right: 0; max-width: 100%; }
        .testimonial-section .testimonial-wrapper.testimonial-wrapper--home .swiper.testimonial-slider-home { overflow: hidden !important; width: 100%; }
        .testimonial-section .testimonial-slider-home .swiper-wrapper { align-items: flex-start; }
        .testimonial-section .testimonial-slider-home .swiper-slide { display: flex; align-items: flex-start; box-sizing: border-box; height: auto !important; min-height: 0 !important; }
        .testimonial-section .testimonial-slider-home .testimonial-box-item { flex: 0 1 auto; width: 100%; height: auto !important; min-height: 0 !important; display: flex; flex-direction: column; box-sizing: border-box; margin-top: 0 !important; }
        .testimonial-section .testimonial-wrapper.testimonial-wrapper--home .testimonial-box-item .content { display: flex; flex-direction: column; flex: 0 1 auto; min-height: 0; width: 100%; }
        .testimonial-section .testimonial-wrapper.testimonial-wrapper--home .testimonial-box-item .content p { flex: 0 0 auto; margin: 0 0 14px !important; padding: 0 !important; line-height: 1.45 !important; overflow: visible !important; }
        .testimonial-section .testimonial-wrapper.testimonial-wrapper--home .testimonial-box-item .content .client-info-item { flex-shrink: 0; display: flex; align-items: center; justify-content: space-between; gap: 16px; margin-top: 0 !important; padding-top: 0 !important; }
        .testimonial-section .testimonial-box-item .client-info .testimonial-client-photo { width: 80px; height: 80px; min-width: 80px; min-height: 80px; border-radius: 50%; overflow: hidden; flex-shrink: 0; }
        .testimonial-section .testimonial-box-item .client-info .testimonial-client-photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
        .testimonial-section .testimonial-box-item .content .client-info-item .client-info { display: flex; align-items: center; gap: 16px; flex: 1; min-width: 0; }
        .testimonial-section .testimonial-box-item .content .client-info-item .client-info h5 { margin: 0; line-height: 1.45; padding-left: 0 !important; }
        .testimonial-section .testimonial-box-item .content .client-info-item .client-info h5::before { display: none !important; }
        .testimonial-section .testimonial-box-item .content .client-info-item .icon { flex-shrink: 0; font-size: 52px; line-height: 1; align-self: center; }
        @media (max-width: 991px) {
            .testimonial-section .testimonial-box-item .content .client-info-item .icon { font-size: 42px; }
        }
        @media (max-width: 575px) {
            .testimonial-section .testimonial-wrapper.testimonial-wrapper--home .testimonial-box-item .content p { margin-bottom: 12px !important; }
            .testimonial-section .testimonial-box-item .client-info .testimonial-client-photo { width: 56px; height: 56px; min-width: 56px; min-height: 56px; }
            .testimonial-section .testimonial-box-item .content .client-info-item .client-info { gap: 12px; }
            .testimonial-section .testimonial-box-item .content .client-info-item .client-info h5 { font-size: 15px; }
            .testimonial-section .testimonial-box-item .content .client-info-item .icon { font-size: 36px; }
        }
    ';
    $pricing_chart_css = '
        .fz-pricing-subhead { font-size: 20px; font-weight: 600; color: var(--theme); margin: 12px 0 0; line-height: 1.4; }
        .fz-pricing-intro { max-width: 720px; margin: 28px auto 0; text-align: center; }
        .fz-pricing-intro p { margin: 0; font-size: 16px; line-height: 1.7; color: var(--text); }
        .fz-pricing-cards { margin-top: 40px; align-items: stretch; }
        .fz-pricing-cards .col-lg-5 { display: flex; }
        .fz-pricing-cards .col-lg-5 .fz-pricing-card { width: 100%; }
        .fz-pricing-card { background: var(--white); border-radius: 10px; box-shadow: var(--box-shadow); overflow: hidden; border: 1px solid rgba(15, 49, 58, 0.08); height: 100%; display: flex; flex-direction: column; position: relative; transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .fz-pricing-card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(0,0,0,0.1); }
        .fz-pricing-card__badge { position: absolute; top: 20px; right: 20px; background: var(--theme); color: var(--white); font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; padding: 8px 14px; border-radius: 40px; z-index: 2; }
        .fz-pricing-card__header { padding: 32px 28px 24px; color: var(--white); display: flex; align-items: center; gap: 16px; }
        .fz-pricing-card--standard .fz-pricing-card__header { background: var(--header); }
        .fz-pricing-card--ez .fz-pricing-card__header { background: var(--theme); }
        .fz-pricing-card__icon { font-size: 42px; opacity: 0.95; }
        .fz-pricing-card__header h3 { margin: 0; font-size: 22px; font-weight: 600; color: var(--white); }
        .fz-pricing-card__list { list-style: none; margin: 0; padding: 24px 28px 20px; flex: 1; min-height: 320px; border-bottom: 1px solid rgba(15, 49, 58, 0.06); }
        .fz-pricing-card__list li { display: flex; justify-content: space-between; align-items: baseline; gap: 12px; padding: 12px 0; border-bottom: 1px solid rgba(15, 49, 58, 0.06); font-size: 15px; }
        .fz-pricing-card__list li:last-child { border-bottom: none; }
        .fz-pricing-card__list .label { color: var(--text); flex: 1; }
        .fz-pricing-card__list .value { color: var(--header); font-weight: 600; text-align: right; }
        .fz-pricing-card__list .value small { font-weight: 400; color: var(--text); font-size: 13px; }
        .fz-pricing-card__total { padding: 20px 28px 28px; min-height: 76px; display: flex; justify-content: space-between; align-items: center; gap: 12px; background: var(--bg); flex-shrink: 0; }
        .fz-pricing-card--standard .fz-pricing-card__total { background: rgba(0, 56, 101, 0.06); }
        .fz-pricing-card--ez .fz-pricing-card__total { background: rgba(255, 104, 50, 0.08); }
        .fz-pricing-card__total span { font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; color: var(--header); min-width: 160px; }
        .fz-pricing-card__total strong { font-size: 26px; color: var(--theme); text-align: right; min-width: 100px; }
        .fz-pricing-card--standard .fz-pricing-card__total strong { color: var(--header); }
        .fz-pricing-card__save { margin: 20px 28px 20px; padding: 10px 16px; background: var(--theme); color: var(--white); font-size: 14px; font-weight: 600; text-align: center; border-radius: 8px; }
        a.fz-pricing-card__save { display: block; text-decoration: none; color: var(--white); transition: filter 0.2s ease, box-shadow 0.2s ease; }
        a.fz-pricing-card__save:hover, a.fz-pricing-card__save:focus { color: var(--white); filter: brightness(1.08); box-shadow: 0 4px 14px rgba(0, 0, 0, 0.12); outline: none; }
        a.fz-pricing-card__save:focus-visible { outline: 2px solid var(--white); outline-offset: 2px; }
        .fz-pricing-card__save--standard { background: var(--header); }
        @media (max-width: 767px) { .fz-pricing-card__list { min-height: 0; padding: 20px; } .fz-pricing-card__header { padding: 24px 20px 20px; } .fz-pricing-card__header h3 { font-size: 18px; } .fz-pricing-card__list li { flex-wrap: wrap; font-size: 14px; } .fz-pricing-card__total { padding: 16px 20px 24px; min-height: 70px; } .fz-pricing-card__total span { min-width: 0; } .fz-pricing-card__total strong { font-size: 22px; min-width: 0; } .fz-pricing-card__save { margin: 16px 20px 16px; } }
    ';
    $flexible_pricing_hero_css = '
        .fz-flexible-pricing-hero .fz-flexible-pricing-header { margin-bottom: 48px; }
        .fz-flexible-pricing-hero .fz-flexible-pricing-header .section-title span { display: block; }
        .fz-flexible-pricing-hero .fz-flexible-pricing-logo { margin-bottom: 24px; }
        .fz-flexible-pricing-hero .fz-flexible-pricing-logo-img { max-height: 56px; width: auto; height: auto; object-fit: contain; }
        .fz-flexible-pricing-hero .fz-flexible-pricing-header h2 { margin: 0 0 12px; }
        .fz-flexible-pricing-hero .fz-flexible-pricing-subtitle { font-size: 18px; color: var(--text); margin: 0; }
        .fz-flexible-pricing-cards .col-lg-6 { display: flex; }
        .fz-flexible-pricing-cards .fz-flexible-pricing-card { width: 100%; height: 100%; min-height: 320px; }
        .fz-flexible-pricing-card { position: relative; border-radius: 15px; padding: 40px 36px; background: linear-gradient(135deg, var(--theme) 0%, #c94a1e 40%, var(--header) 100%); box-shadow: 10px 4px 60px 0px rgba(184, 184, 184, 0.25); border: 1px solid rgba(13, 38, 108, 0.07); display: flex; flex-wrap: wrap; align-content: space-between; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .fz-flexible-pricing-card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(0,0,0,0.15); }
        .fz-flexible-pricing-card__label { position: absolute; top: 28px; right: 28px; font-size: 15px; font-weight: 600; color: #fff; text-transform: uppercase; letter-spacing: 0.5px; }
        .fz-flexible-pricing-card__price { width: 100%; margin-top: 0; margin-bottom: auto; padding-top: 8px; }
        .fz-flexible-pricing-card__amount { display: block; font-size: 56px; font-weight: 700; color: #fff; line-height: 1.1; }
        .fz-flexible-pricing-card__period { font-size: 14px; font-weight: 500; color: rgba(255,255,255,0.9); letter-spacing: 0.5px; margin-top: 4px; display: block; }
        .fz-flexible-pricing-card__btn { margin-top: 24px; margin-left: auto; align-self: flex-end; padding: 14px 28px !important; font-size: 16px !important; }
        .fz-flexible-pricing-card__btn.theme-btn { background: rgba(0,0,0,0.4); border: none; color: #fff; border-radius: 8px; }
        .fz-flexible-pricing-card__btn.theme-btn:hover { background: rgba(0,0,0,0.55); color: #fff; }
        @media (max-width: 991px) { .fz-flexible-pricing-cards .fz-flexible-pricing-card { min-height: 280px; } .fz-flexible-pricing-card__amount { font-size: 48px; } .fz-flexible-pricing-card { padding: 36px 28px; } }
        @media (max-width: 575px) { .fz-flexible-pricing-cards .fz-flexible-pricing-card { min-height: 260px; } .fz-flexible-pricing-card { padding: 32px 24px; } .fz-flexible-pricing-card__amount { font-size: 42px; } .fz-flexible-pricing-card__label { top: 22px; right: 22px; font-size: 14px; } .fz-flexible-pricing-card__btn { padding: 12px 24px !important; font-size: 15px !important; } }
    ';
    $blog_ui_css = '
        .fz-blog-section { background: var(--bg, #f8f9fa); }
        .fz-blog-grid .col-lg-4, .fz-blog-grid .col-md-6 { display: flex; }
        .fz-blog-card { width: 100%; min-width: 0; background: var(--white); border-radius: 15px; overflow: hidden; box-shadow: 10px 4px 60px 0px rgba(184, 184, 184, 0.2); border: 1px solid rgba(13, 38, 108, 0.07); height: 100%; display: flex; flex-direction: column; transition: transform 0.35s ease, box-shadow 0.35s ease; }
        .fz-blog-card:hover { transform: translateY(-6px); box-shadow: 0 16px 48px rgba(0, 0, 0, 0.12); border-color: rgba(13, 38, 108, 0.12); }
        .fz-blog-card__img-link { position: relative; display: block; text-decoration: none; }
        .fz-blog-card__img-wrap { display: block; aspect-ratio: 16/10; overflow: hidden; background: rgba(13, 38, 108, 0.06); }
        .fz-blog-card__img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease; }
        .fz-blog-card:hover .fz-blog-card__img { transform: scale(1.06); }
        .fz-blog-card__cat { position: absolute; bottom: 14px; left: 20px; background: var(--theme); color: var(--white); font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; padding: 6px 14px; border-radius: 50px; }
        .fz-blog-card__body { padding: 24px 24px 28px; flex: 1; display: flex; flex-direction: column; }
        .fz-blog-card__date { font-size: 13px; color: var(--text); margin-bottom: 10px; display: inline-flex; align-items: center; gap: 6px; }
        .fz-blog-card__date i { opacity: 0.8; }
        .fz-blog-card__title { margin: 0 0 12px; font-size: 20px; font-weight: 600; line-height: 1.35; }
        .fz-blog-card__title a { color: var(--header); text-decoration: none; transition: color 0.25s ease; }
        .fz-blog-card__title a:hover { color: var(--theme); }
        .fz-blog-card__excerpt { margin: 0 0 20px; font-size: 15px; line-height: 1.6; color: var(--text); flex: 1; }
        .fz-blog-card__btn { align-self: flex-start; padding: 12px 24px !important; font-size: 15px !important; border-radius: 8px; transition: transform 0.25s ease, box-shadow 0.25s ease; }
        .fz-blog-card__btn:hover { transform: translateX(4px); }
        .fz-blog-pagination { display: flex; justify-content: center; flex-wrap: wrap; gap: 8px; }
        .fz-blog-pagination .page-numbers { display: inline-flex; align-items: center; justify-content: center; min-width: 44px; height: 44px; padding: 0 14px; background: var(--white); color: var(--header); font-weight: 600; font-size: 15px; border-radius: 10px; border: 1px solid rgba(13, 38, 108, 0.12); text-decoration: none; transition: background 0.25s ease, color 0.25s ease, border-color 0.25s ease; }
        .fz-blog-pagination .page-numbers:hover { background: var(--theme); color: var(--white); border-color: var(--theme); }
        .fz-blog-pagination .page-numbers.current { background: var(--theme); color: var(--white); border-color: var(--theme); }
        .fz-blog-pagination .page-numbers.next, .fz-blog-pagination .page-numbers.prev { gap: 6px; }
        .fz-blog-empty { color: var(--text); }
        @media (max-width: 767px) { .fz-blog-card__body { padding: 20px 20px 24px; } .fz-blog-card__title { font-size: 18px; } .fz-blog-card__excerpt { font-size: 14px; } .fz-blog-card__btn { padding: 10px 20px !important; font-size: 14px !important; } }
    ';
    $fz_audit_section_css = '
        .fz-audit-section { background-color: var(--header, #0F313A); color: var(--white); position: relative; overflow-x: hidden; }
        .fz-audit-section .fz-audit-bg-pattern { position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(circle at 20% 20%, rgba(255,255,255,0.04) 1px, transparent 1px); background-size: 40px 40px; z-index: 0; pointer-events: none; }
        .fz-audit-section .container-fluid { position: relative; z-index: 1; }
        .fz-audit-card { background: var(--white); border-radius: 10px; padding: 50px 40px; color: var(--header); box-shadow: var(--box-shadow); margin-bottom: 0; border: 1px solid rgba(15, 49, 58, 0.1); outline: none !important; }
        .fz-audit-card::before, .fz-audit-card::after { display: none !important; }
        .fz-audit-calendar-title { font-size: 0.85rem; font-weight: 700; text-transform: uppercase; color: var(--header); letter-spacing: 0.5px; margin-bottom: 16px; display: block; }
        .fz-audit-section .fz-request-quote-wrapper .row { align-items: stretch; }
        .fz-audit-section .fz-request-quote-wrapper .row > .col-lg-6:first-child { display: flex; flex-direction: column; }
        .fz-audit-section .fz-audit-calendar-wrap { background: var(--white); border: 1px solid rgba(15, 49, 58, 0.1); border-radius: 10px; padding: 24px; box-shadow: var(--box-shadow); min-height: 420px; flex: 1; display: flex; flex-direction: column; overflow: hidden; min-width: 0; }
        .fz-audit-section .fz-quote-calendar-grid { flex: 1; min-height: 200px; width: 100%; min-width: 0; display: grid; grid-template-columns: repeat(7, 1fr); gap: 6px; align-content: start; }
        .fz-audit-section .fz-quote-calendar-cell { aspect-ratio: 1; max-width: 100%; display: flex; align-items: center; justify-content: center; font-size: 0.9rem; font-weight: 600; color: var(--header); border-radius: 50%; cursor: pointer; transition: all 0.2s ease; overflow: hidden; box-sizing: border-box; line-height: 1; }
        .fz-audit-section .fz-quote-calendar-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding-bottom: 0; border-bottom: none; }
        .fz-audit-section .fz-quote-calendar-month-year { font-weight: 700; font-size: 1.05rem; color: var(--header); }
        .fz-audit-section .fz-quote-calendar-prev, .fz-audit-section .fz-quote-calendar-next { width: 36px; height: 36px; padding: 0; border: 1px solid rgba(0, 56, 101, 0.15); border-radius: 8px; background: var(--white); color: var(--header); font-size: 12px; display: flex; align-items: center; justify-content: center; transition: all 0.2s ease; cursor: pointer; }
        .fz-audit-section .fz-quote-calendar-prev:hover, .fz-audit-section .fz-quote-calendar-next:hover { background: var(--theme); color: var(--white); border-color: var(--theme); }
        .fz-audit-section .fz-quote-calendar-dow { display: grid; grid-template-columns: repeat(7, 1fr); gap: 6px; text-align: center; font-size: 0.7rem; font-weight: 700; color: var(--text); padding-bottom: 10px; flex-shrink: 0; }
        .fz-audit-section .fz-quote-calendar-cell.other-month, .fz-audit-section .fz-quote-calendar-cell.past { color: #94a3b8; cursor: default; }
        .fz-audit-section .fz-quote-calendar-cell.past { cursor: not-allowed; }
        .fz-audit-section .fz-quote-calendar-cell.selected { background: var(--theme); color: var(--white); }
        .fz-audit-section .fz-quote-calendar-cell.available:hover { background: rgba(255, 104, 50, 0.12); }
        .fz-audit-section .fz-quote-selected-date { margin-top: 12px; padding: 10px 14px; background: rgba(0, 56, 101, 0.06); border-radius: 8px; font-size: 13px; font-weight: 600; color: var(--header); }
        .fz-audit-section .fz-quote-cf7-form { padding-top: 0; }
        @media (min-width: 992px) { .fz-audit-section .fz-quote-cf7-form { padding-top: 2rem; } }
        .fz-audit-section .fz-discovery-form-heading { font-size: 1.35rem; font-weight: 700; color: var(--header); margin-bottom: 12px; margin-top: 0; padding-top: 1px; }
        .fz-audit-section .fz-discovery-call-meta { font-size: 0.9rem; font-weight: 600; color: var(--text); margin-bottom: 10px; }
        .fz-audit-section .fz-discovery-call-desc { font-size: 0.95rem; color: var(--text); margin-bottom: 20px; line-height: 1.5; }
        .fz-audit-section .fz-quote-cf7-form .wpcf7-form { width: 100%; max-width: 100%; }
        .fz-audit-section .fz-quote-cf7-form .wpcf7-form p { width: 100%; max-width: 100%; margin-bottom: 18px; }
        .fz-audit-section .fz-quote-cf7-form .wpcf7-form label { font-size: 0.95rem; font-weight: 600; color: var(--header); margin-bottom: 8px; display: block; }
        .fz-audit-section .fz-quote-cf7-form .wpcf7-form input:not([type=submit]), .fz-audit-section .fz-quote-cf7-form .wpcf7-form textarea { width: 100%; max-width: 100%; box-sizing: border-box; border: 1px solid rgba(0, 56, 101, 0.15); border-radius: 8px; padding: 14px 18px; background: var(--white); color: var(--header); }
        .fz-audit-section .fz-quote-cf7-form .wpcf7-form input:focus, .fz-audit-section .fz-quote-cf7-form .wpcf7-form textarea:focus { outline: none; border-color: var(--theme); box-shadow: 0 0 0 3px rgba(255, 104, 50, 0.15); }
        .fz-audit-section .fz-quote-cf7-form .wpcf7-form input[type=submit], .fz-audit-section .fz-quote-cf7-form .wpcf7-form .wpcf7-submit { background: var(--theme) !important; color: var(--white) !important; border: none !important; border-radius: 8px; padding: 16px 24px; font-weight: 600; font-size: 1rem; width: 100%; margin-top: 12px; box-shadow: var(--box-shadow); transition: all 0.2s ease; }
        .fz-audit-section .fz-quote-cf7-form .wpcf7-form input[type=submit]:hover, .fz-audit-section .fz-quote-cf7-form .wpcf7-form .wpcf7-submit:hover { opacity: 0.9; transform: translateY(-1px); }
        @media (max-width: 991px) { .fz-audit-card { padding: 32px 24px; } }
        @media (max-width: 575px) { .fz-audit-card { padding: 24px 20px; } }
        .fz-scroll-top-btn { position: fixed; bottom: 40px; right: 40px; background: var(--theme); width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--white); box-shadow: 0 4px 25px rgba(0,0,0,0.15); text-decoration: none; z-index: 100; transition: transform 0.2s, box-shadow 0.2s; }
        .fz-scroll-top-btn:hover { color: var(--white); transform: translateY(-2px); box-shadow: 0 8px 30px rgba(0,0,0,0.2); }
        .fz-footer-credit-link { color: inherit !important; text-decoration: none; }
        .fz-footer-credit-link:hover { color: inherit !important; text-decoration: none; }
    ';
    $hero_slider_css = '
        .hero-section.hero-bg-slider-section { background: none !important; overflow: hidden; margin-bottom: 1rem; width: 100%; max-width: 100%; box-sizing: border-box; padding-top: 80px !important; position: relative; min-height: 100vh; display: flex; align-items: center; }
        .hero-section.hero-bg-slider-section .hero-bg-slider { position: absolute; top: 0; left: 0; right: 0; bottom: 0; width: 100%; height: 100%; z-index: 0; }
        .hero-section.hero-bg-slider-section .hero-bg-slide { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-size: cover; background-position: center center; background-repeat: no-repeat; opacity: 0; transition: opacity 1s ease-in-out; }
        .hero-section.hero-bg-slider-section .hero-bg-slide.active { opacity: 1; z-index: 1; }
        .hero-section.hero-bg-slider-section .container { position: relative; z-index: 2; max-width: 1320px; margin-left: auto; margin-right: auto; padding-left: 15px; padding-right: 15px; width: 100%; }
        .hero-section.hero-bg-slider-section .hero-content { padding-top: 60px; max-width: 720px; }
        .hero-section.hero-bg-slider-section .hero-content h1 { padding-top: 40px; margin-top: 0; font-size: clamp(2rem, 5vw, 3.5rem); font-weight: 800; line-height: 1.15; letter-spacing: -0.02em; color: #fff; text-shadow: 0 2px 20px rgba(0,0,0,0.4); border-bottom: 3px solid var(--theme); padding-bottom: 1rem; margin-bottom: 1.25rem; display: inline-block; }
        .hero-section.hero-bg-slider-section .hero-content h5 { font-size: 1.2rem; line-height: 1.6; color: rgba(255,255,255,0.95); text-shadow: 0 1px 10px rgba(0,0,0,0.35); max-width: 580px; margin-top: 0; margin-bottom: 1.75rem; font-weight: 500; }
        .hero-section.hero-bg-slider-section .hero-content .hero-button .theme-btn { background: var(--theme); color: #fff; font-size: 1.1rem; font-weight: 700; padding: 16px 32px; border-radius: 8px; box-shadow: 0 4px 20px rgba(255, 104, 50, 0.4); border: none; transition: transform 0.2s ease, box-shadow 0.2s ease; }
        .hero-section.hero-bg-slider-section .hero-content .hero-button .theme-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 28px rgba(255, 104, 50, 0.5); color: #fff; }
        .hero-section.hero-bg-slider-section.hero-1::before { z-index: 1; background: rgba(0, 0, 0, 0.4); }
        @media (max-width: 767px) { .hero-section.hero-bg-slider-section .hero-content h1 { border-bottom-width: 2px; } .hero-section.hero-bg-slider-section .hero-content h5 { font-size: 1.05rem; } }
        main.entry-content { overflow-x: hidden; }
    ';
    $bpo_services_css = '
        .bpo-services-section .client-info-wrapper .content { max-width: 920px; width: 100%; }
        .bpo-services-section .client-info-wrapper .content h4 { font-size: 1.08rem; line-height: 1.65; font-weight: 600; }
        .bpo-services-section .client-info-wrapper .content h5 { margin-top: 1rem; font-size: 1rem; }
    ';
    $feature2_bpo_css = '
        .fz-feature2-bpo.feature-section-2 { border-top: none; border-bottom: none; }
        .fz-feature2-bpo.feature-section-2::before { display: none; }
        .fz-feature2-bpo .feature-wrapper-2 { max-width: 920px; margin: 0 auto; }
        .fz-feature2-bpo .fz-feature2-block { position: relative; padding-left: 24px; }
        .fz-feature2-bpo .fz-feature2-accent { display: block; width: 48px; height: 4px; background: var(--theme); border-radius: 2px; margin-bottom: 14px; }
        .fz-feature2-bpo .fz-feature2-text { font-size: 16px; line-height: 1.65; color: var(--header2); margin: 0; font-weight: 500; }
        .fz-feature2-bpo .fz-feature2-highlight { color: var(--theme); font-weight: 700; }
    ';
    $faq_bpo_css = '
        .fz-faq-bpo.faq-section.section-bg { background-color: var(--bg); }
        .fz-faq-bpo .fz-faq-left { padding-right: 20px; padding-left: 30px; }
        .fz-faq-bpo .fz-faq-heading { font-size: 28px; font-weight: 700; color: var(--header2); line-height: 1.25; margin-bottom: 1.25rem; font-family: "Inter Tight", sans-serif; }
        .fz-faq-bpo .fz-faq-intro { font-size: 16px; line-height: 1.65; color: var(--text); margin-bottom: 1.5rem; }
        .fz-faq-bpo .fz-faq-phone { font-size: 16px; margin: 0; padding-top: 1rem; border-top: 1px solid rgba(1, 23, 45, 0.1); }
        .fz-faq-bpo .fz-faq-phone strong { display: block; color: var(--header2); margin-bottom: 6px; font-weight: 600; }
        .fz-faq-bpo .fz-faq-phone-link { color: var(--theme); font-weight: 600; font-size: 18px; text-decoration: none; }
        .fz-faq-bpo .fz-faq-phone-link:hover { color: var(--header2); }
        .fz-faq-bpo .faq-wrapper-2 .faq-content { margin-left: 0; }
        .fz-faq-bpo .faq-items-2 .accordion .accordion-item { border: none; border-radius: 0; border-bottom: 1px solid rgba(1, 23, 45, 0.1); margin-bottom: 20px; padding-bottom: 20px; background: transparent; }
        .fz-faq-bpo .faq-items-2 .accordion .accordion-item h2 button { color: var(--header2); font-size: 20px; font-weight: 600; padding-left: 30px; }
        .fz-faq-bpo .faq-items-2 .accordion .accordion-body { padding-left: 30px; padding-top: 15px; }
        .fz-faq-bpo .faq-items-2 .accordion .accordion-body p { color: var(--text); font-size: 16px; line-height: 32px; }
    ';
    $logistics_roles_css = '
        .fz-logistics-roles-block { padding-right: 0.5rem; }
        .fz-logistics-roles-label { display: block; font-size: 18px; font-weight: 600; color: var(--theme); margin-bottom: 10px; }
        .fz-logistics-roles-title { font-size: 28px; font-weight: 700; color: var(--header2); margin-bottom: 1rem; line-height: 1.3; font-family: "Inter Tight", sans-serif; }
        .fz-logistics-roles-intro { font-size: 16px; line-height: 1.65; color: var(--text); margin-bottom: 1.5rem; }
        .fz-logistics-roles-list { list-style: none; margin: 0; padding: 0; counter-reset: role; }
        .fz-logistics-roles-list li { position: relative; padding: 14px 0 14px 2.75rem; border-bottom: 1px solid rgba(1, 23, 45, 0.1); font-size: 16px; line-height: 1.5; color: var(--header2); counter-increment: role; }
        .fz-logistics-roles-list li:last-child { border-bottom: none; }
        .fz-logistics-roles-list li::before { content: counter(role); position: absolute; left: 0; top: 50%; transform: translateY(-50%); width: 26px; height: 26px; border-radius: 50%; background: var(--theme); color: var(--white); font-size: 12px; font-weight: 700; text-align: center; line-height: 26px; }
        .fz-logistics-roles-list .role-name { font-weight: 600; color: var(--header2); }
        @media (max-width: 991px) { .fz-logistics-roles-list li { padding-left: 2.5rem; } }
    ';
    $services_page_css = '
        .services-list-section .service-link-card { display: block; text-align: center; padding: 32px 24px; background: var(--white); border-radius: 12px; border: 1px solid rgba(0, 56, 101, 0.1); text-decoration: none; color: var(--header); transition: all 0.25s ease; box-shadow: 0 4px 20px rgba(0,0,0,0.06); height: 100%; }
        .services-list-section .service-link-card:hover { border-color: var(--theme); color: var(--theme); box-shadow: 0 8px 30px rgba(0,0,0,0.1); transform: translateY(-4px); }
        .services-list-section .service-link-card .icon { font-size: 52px; color: var(--theme); margin-bottom: 16px; }
        .services-list-section .service-link-card .icon i { display: block; }
        .services-list-section .service-link-card h5 { font-size: 1.1rem; font-weight: 700; margin: 0 0 12px; }
        .services-list-section .service-link-card .link-text { font-size: 0.9rem; font-weight: 600; color: var(--theme); }
        .services-list-section .service-link-card:hover .link-text { text-decoration: underline; }
    ';
    $breadcrumb_css = '
        .breadcrumb-wrapper.fz-breadcrumb-theme { background-color: var(--bg); background-image: none !important; }
        .breadcrumb-wrapper.fz-breadcrumb-theme::before { display: none; }
        .breadcrumb-wrapper.fz-breadcrumb-theme .fz-breadcrumb-heading { padding: 50px 0 60px; display: flex; flex-direction: column; align-items: flex-start; justify-content: center; text-align: left; width: 100%; box-sizing: border-box; }
        .breadcrumb-wrapper.fz-breadcrumb-theme .breadcrumb-sub-title { margin-bottom: 8px; margin-left: 0; padding-left: 0; }
        .breadcrumb-wrapper.fz-breadcrumb-theme .breadcrumb-sub-title span { color: var(--text); font-size: 16px; font-weight: 600; }
        .breadcrumb-wrapper.fz-breadcrumb-theme .fz-breadcrumb-heading h1 { color: var(--header2); font-size: 42px; font-weight: 700; margin: 0 0 16px 0; line-height: 1.2; padding: 0; }
        .breadcrumb-wrapper.fz-breadcrumb-theme .fz-breadcrumb-list { display: flex; align-items: center; justify-content: flex-start; flex-wrap: wrap; gap: 6px 10px; font-size: 14px; font-weight: 500; margin: 0; padding: 0; list-style: none; }
        .breadcrumb-wrapper.fz-breadcrumb-theme .fz-breadcrumb-link { color: var(--theme); text-decoration: none; }
        .breadcrumb-wrapper.fz-breadcrumb-theme .fz-breadcrumb-link:hover { color: var(--header); text-decoration: underline; }
        .breadcrumb-wrapper.fz-breadcrumb-theme .fz-breadcrumb-sep { color: var(--text); opacity: 0.7; user-select: none; }
        .breadcrumb-wrapper.fz-breadcrumb-theme .fz-breadcrumb-current { color: var(--header2); }
        @media (max-width: 575px) { .breadcrumb-wrapper.fz-breadcrumb-theme .fz-breadcrumb-heading h1 { font-size: 32px; } .breadcrumb-wrapper.fz-breadcrumb-theme .fz-breadcrumb-heading { padding: 36px 0 44px; } }
    ';
    $contact_image_css = '
        .contact-us-wrapper .row.g-4 { align-items: stretch; margin-left: -20px; margin-right: -20px; }
        .contact-us-wrapper .row.g-4 .col-lg-6 { padding-left: 20px; padding-right: 20px; }
        .contact-us-wrapper .row.g-4 .col-lg-6:first-child { display: flex; }
        .contact-us-wrapper .contact-image { margin-top: 0 !important; max-width: 100% !important; width: 100%; padding: 0; border: 4px solid var(--theme); border-radius: 12px; overflow: hidden; box-shadow: 0 8px 30px rgba(0,0,0,0.08); height: 100%; min-height: 100%; }
        .contact-us-wrapper .contact-image img { padding-right: 0 !important; left: 0 !important; max-width: 100%; width: 100%; height: 100%; min-height: 100%; object-fit: cover; display: block; }
        .contact-us-wrapper .contact-us-content { padding: 0; }
        .contact-us-wrapper .contact-us-content .contact-us-box { max-width: 100% !important; padding: 32px 44px; border-radius: 12px; border: 1px solid rgba(15, 49, 58, 0.1); box-shadow: 0 8px 30px rgba(0,0,0,0.08); margin-bottom: 20px; }
        .contact-us-wrapper .contact-us-content .contact-us-box.mb-0 { margin-bottom: 0; }
        @media (max-width: 991px) { .contact-us-wrapper .row.g-4 { margin-left: -12px; margin-right: -12px; } .contact-us-wrapper .row.g-4 .col-lg-6 { padding-left: 12px; padding-right: 12px; } .contact-us-wrapper .contact-us-content { padding-top: 20px; } }
    ';
    $offcanvas_gallery_css = '
        .offcanvas__wrapper .offcanvas__content .offcanvas-gallery-area .offcanvas-gallery-items .header-gallery { width: 100px; height: 100px; min-width: 100px; min-height: 100px; overflow: hidden; display: block; flex-shrink: 0; }
        .offcanvas__wrapper .offcanvas__content .offcanvas-gallery-area .offcanvas-gallery-items .header-gallery img { width: 100%; height: 100%; min-width: 100%; min-height: 100%; object-fit: cover; object-position: center; display: block; }
        .offcanvas__info { transition: transform 0.25s ease-out; will-change: transform; }
        .offcanvas__info.info-open { will-change: auto; }
    ';
    // Always-needed: layout, header, breadcrumb, offcanvas, scroll-to-top.
    // pricing_chart_css included always — cards appear on home page and price page.
    wp_add_inline_style( 'main',
        $header_gap_css . $fz_audit_section_css .
        $breadcrumb_css . $offcanvas_gallery_css . $pricing_chart_css
    );

    // Hero background slider — front page only.
    if ( is_front_page() ) {
        wp_add_inline_style( 'main', $hero_slider_css );
    }

    // Blog listing and single posts.
    if ( is_page_template( 'page-blog.php' ) || is_singular( 'post' ) || is_home() ) {
        wp_add_inline_style( 'main', $blog_ui_css );
    }

    // Pricing page flexible cards — detect by actual rendered template file.
    if ( basename( get_page_template() ) === 'page-price.php' ) {
        wp_add_inline_style( 'main', $flexible_pricing_hero_css );
    }

    // Contact page.
    if ( is_page( 'contact' ) || is_page_template( 'page-contact.php' ) ) {
        wp_add_inline_style( 'main', $contact_image_css );
    }

    // Service page (real page template + virtual /service/ route).
    if ( is_page_template( 'page-service.php' ) || get_query_var( 'fz_virtual_page' ) === 'service' ) {
        wp_add_inline_style( 'main', $services_page_css . $logistics_roles_css );
    }

    // BPO layout classes — role pages, industry pages, front page, virtual sales page.
    $bpo_templates = [
        'page-account-manager.php', 'page-administrative-assistant.php',
        'page-customer-and-carrier-relations.php', 'page-customer-carrier-relations.php',
        'page-digital-marketing-expert.php', 'page-dispatch-manager.php',
        'page-documentation-expert.php', 'page-documentation-specialist.php',
        'page-logistics-accounting-financial.php', 'page-logistics-coordinator.php',
        'page-operation-manager.php', 'page-sales-and-business-development.php',
        'page-sales-business-development.php', 'page-truck-dispatcher.php',
        'page-customs-brokers.php', 'page-freight-forwarders.php',
        'page-nvocc.php', 'page-shipping-lines-agents.php',
        'page-trucking-companies-owner-operators.php',
        'page-warehousing-distribution-companies.php',
    ];
    $curr_tmpl = (string) get_page_template_slug();
    if ( is_front_page()
        || in_array( $curr_tmpl, $bpo_templates, true )
        || get_query_var( 'fz_virtual_page' ) === 'sales-business-development' ) {
        wp_add_inline_style( 'main',
            $bpo_services_css . $feature2_bpo_css . $faq_bpo_css . $logistics_roles_css
        );
    }
}
add_action( 'wp_enqueue_scripts', 'fz_falcans_assets', 10 );

function fz_falcans_scripts() {
    $theme_uri = get_template_directory_uri();
    $assets    = $theme_uri . '/assets';
    $ver       = fz_falcans_asset_version();

    wp_enqueue_script( 'viewport', $assets . '/js/viewport.jquery.js', [ 'jquery' ], $ver, true );
    wp_enqueue_script( 'bootstrap', $assets . '/js/bootstrap.bundle.min.js', [ 'jquery' ], $ver, true );
    wp_enqueue_script( 'nice-select', $assets . '/js/jquery.nice-select.min.js', [ 'jquery' ], $ver, true );
    wp_enqueue_script( 'waypoints', $assets . '/js/jquery.waypoints.js', [ 'jquery' ], $ver, true );
    wp_enqueue_script( 'counterup', $assets . '/js/jquery.counterup.min.js', [ 'jquery' ], $ver, true );
    wp_enqueue_script( 'swiper', $assets . '/js/swiper-bundle.min.js', [ 'jquery' ], $ver, true );
    wp_enqueue_script( 'meanmenu', $assets . '/js/jquery.meanmenu.min.js', [ 'jquery' ], $ver, true );
    wp_enqueue_script( 'magnific-popup', $assets . '/js/jquery.magnific-popup.min.js', [ 'jquery' ], $ver, true );
    wp_enqueue_script( 'ion-range', $assets . '/js/ion.rangeSlider.min.js', [ 'jquery' ], $ver, true );
    wp_enqueue_script( 'wow', $assets . '/js/wow.min.js', [ 'jquery' ], $ver, true );
    wp_enqueue_script( 'main', $assets . '/js/main.js', [ 'jquery' ], fz_falcans_asset_version( 'js/main.js' ), true );
    wp_enqueue_script( 'fz-quote-calendar', $assets . '/js/quote-calendar.js', [ 'jquery' ], $ver, true );
    wp_enqueue_script( 'fz-hero-bg-slider', $assets . '/js/hero-bg-slider.js', [ 'jquery' ], $ver, true );
}
add_action( 'wp_enqueue_scripts', 'fz_falcans_scripts', 20 );

/**
 * Add defer to non-critical JavaScript (improves LCP, reduces main-thread work).
 * jQuery and all theme scripts load in footer; defer allows HTML to parse without blocking.
 */
function fz_falcans_defer_scripts( $tag, $handle, $src ) {
    if ( is_admin() ) {
        return $tag;
    }
    $defer_handles = [
        'bootstrap', 'viewport', 'nice-select', 'waypoints', 'counterup',
        'swiper', 'meanmenu', 'magnific-popup', 'ion-range', 'wow',
        'main', 'fz-quote-calendar', 'fz-hero-bg-slider',
    ];
    if ( ! in_array( $handle, $defer_handles, true ) ) {
        return $tag;
    }
    if ( strpos( $tag, ' defer ' ) !== false || strpos( $tag, ' async ' ) !== false ) {
        return $tag;
    }
    return str_replace( ' src=', ' defer src=', $tag );
}
add_filter( 'script_loader_tag', 'fz_falcans_defer_scripts', 10, 3 );

/**
 * DNS prefetch and preconnect for third-party origins (fonts, etc.) to reduce connection latency.
 * Preload critical assets (first paint CSS, LCP hero image on front page).
 */
function fz_falcans_resource_hints() {
    $theme_uri = get_template_directory_uri();
    $assets    = $theme_uri . '/assets';

    echo '<link rel="preconnect" href="' . esc_url( 'https://fonts.googleapis.com' ) . '">' . "\n";
    echo '<link rel="preconnect" href="' . esc_url( 'https://fonts.gstatic.com' ) . '" crossorigin>' . "\n";
    echo '<link rel="dns-prefetch" href="' . esc_url( 'https://fonts.googleapis.com' ) . '">' . "\n";
    echo '<link rel="dns-prefetch" href="' . esc_url( 'https://fonts.gstatic.com' ) . '">' . "\n";
    $gf_url = 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap';
    echo '<link rel="preload" href="' . esc_url( $gf_url ) . '" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">' . "\n";
    echo '<noscript><link rel="stylesheet" href="' . esc_url( $gf_url ) . '"></noscript>' . "\n";

    $main_css = $assets . '/css/main.css';
    echo '<link rel="preload" href="' . esc_url( $main_css ) . '" as="style">' . "\n";

    if ( is_front_page() && ! is_home() ) {
        $hero_img = $assets . '/img/hero/hero-bg-2.webp';
        echo '<link rel="preload" href="' . esc_url( $hero_img ) . '" as="image">' . "\n";
    }
}
add_action( 'wp_head', 'fz_falcans_resource_hints', 1 );

/**
 * Customizer: Request Quote Contact Form 7 ID
 */
function fz_falcans_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'fz_request_quote', [
        'title'    => __( 'Request Quote Form', 'fz-falcans' ),
        'priority' => 120,
    ] );
    $wp_customize->add_setting( 'fz_request_quote_cf7_id', [
        'default'           => '',
        'sanitize_callback' => 'absint',
    ] );
    $wp_customize->add_control( 'fz_request_quote_cf7_id', [
        'label'       => __( 'Contact Form 7 form ID', 'fz-falcans' ),
        'description' => __( 'Enter the ID of the CF7 form used in the home page Request a Quote section. Add a hidden field named "preferred-date" in that form to receive the selected calendar date.', 'fz-falcans' ),
        'section'     => 'fz_request_quote',
        'type'        => 'number',
        'input_attrs' => [ 'min' => 1, 'step' => 1 ],
    ] );
}
add_action( 'customize_register', 'fz_falcans_customize_register' );

function fz_falcans_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
    add_theme_support( 'custom-logo', [
        'height'      => 80,
        'width'       => 220,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => [ 'site-title', 'site-description' ],
    ] );
    register_nav_menus( [
        'primary' => __( 'Primary Menu', 'fz-falcans' ),
    ] );

}
add_action( 'after_setup_theme', 'fz_falcans_setup' );

/**
 * Strip a trailing site name from a plain title (e.g. "About EZ Falcons" + site "EZ Falcons" → "About").
 * Loops so repeated suffixes are removed. Multibyte-safe when mbstring is available.
 *
 * @param string $title Plain title (no HTML).
 * @param string $site  Plain site name.
 * @return string
 */
function fz_falcans_title_without_trailing_site( $title, $site ) {
	$title = trim( $title );
	$site  = trim( $site );
	if ( $title === '' || $site === '' ) {
		return $title;
	}
	$use_mb = function_exists( 'mb_strlen' ) && function_exists( 'mb_substr' );
	$slen   = $use_mb ? mb_strlen( $site, 'UTF-8' ) : strlen( $site );
	if ( $slen < 1 ) {
		return $title;
	}
	$changed = true;
	while ( $changed ) {
		$changed = false;
		$tlen = $use_mb ? mb_strlen( $title, 'UTF-8' ) : strlen( $title );
		if ( $tlen <= $slen ) {
			break;
		}
		$end = $use_mb ? mb_substr( $title, $tlen - $slen, $slen, 'UTF-8' ) : substr( $title, -$slen );
		if ( strcasecmp( $end, $site ) !== 0 ) {
			break;
		}
		$pos = $tlen - $slen;
		if ( $pos < 1 ) {
			break;
		}
		$ch = $use_mb ? mb_substr( $title, $pos - 1, 1, 'UTF-8' ) : substr( $title, $pos - 1, 1 );
		if ( ! preg_match( '/[\s\-–—|]/u', $ch ) ) {
			break;
		}
		$short = $use_mb ? mb_substr( $title, 0, $pos, 'UTF-8' ) : substr( $title, 0, $pos );
		$short = rtrim( rtrim( $short, " \t\n\r" ), '-–—|' );
		if ( $short === '' ) {
			break;
		}
		$title   = $short;
		$changed = true;
	}
	return $title;
}

/**
 * Yoast SEO (and others) set the full title via pre_get_document_title, so document_title_parts never run.
 * Normalize "About EZ Falcons - EZ Falcons" → "About - EZ Falcons" using the active title separator.
 *
 * @param string $title Filtered document title (may be HTML-escaped).
 * @return string
 */
function fz_falcans_pre_get_document_title_dedupe( $title ) {
	if ( ! is_string( $title ) || $title === '' ) {
		return $title;
	}
	$decoded = html_entity_decode( $title, ENT_QUOTES | ENT_HTML5, 'UTF-8' );
	$site    = trim( wp_strip_all_tags( get_bloginfo( 'name', 'display' ) ) );
	$site    = html_entity_decode( $site, ENT_QUOTES | ENT_HTML5, 'UTF-8' );
	if ( $site === '' ) {
		return $title;
	}
	$sep    = trim( (string) apply_filters( 'document_title_separator', '-' ) );
	$sep_re = preg_quote( $sep, '/' );
	$site_re = preg_quote( $site, '/' );
	if ( ! preg_match( '/^(.+?)\s*' . $sep_re . '\s*' . $site_re . '$/iu', $decoded, $m ) ) {
		return $title;
	}
	$left  = trim( $m[1] );
	$short = fz_falcans_title_without_trailing_site( $left, $site );
	if ( $short !== '' && strcasecmp( $short, $left ) !== 0 ) {
		return $short . ' ' . $sep . ' ' . $site;
	}
	if ( strcasecmp( $left, $site ) === 0 ) {
		return $site;
	}
	return $title;
}
add_filter( 'pre_get_document_title', 'fz_falcans_pre_get_document_title_dedupe', 100 );

/** Normalize document title parts to avoid repeating the site name (front tagline, singular titles). */
function fz_falcans_document_title_parts( $parts ) {
	if ( ! is_array( $parts ) ) {
		return $parts;
	}

	// Front page: tagline duplicates site title.
	if ( is_front_page() ) {
		if ( ! empty( $parts['tagline'] ) && ! empty( $parts['title'] ) ) {
			$a = trim( wp_strip_all_tags( $parts['title'] ) );
			$b = trim( wp_strip_all_tags( $parts['tagline'] ) );
			if ( strcasecmp( $a, $b ) === 0 ) {
				unset( $parts['tagline'] );
			}
		}
		return $parts;
	}

	// Singular: title is exactly the site name, or title already ends with the site name.
	if ( is_singular() && ! empty( $parts['site'] ) && ! empty( $parts['title'] ) ) {
		$site        = trim( wp_strip_all_tags( $parts['site'] ) );
		$title_plain = trim( wp_strip_all_tags( $parts['title'] ) );
		if ( $site && strcasecmp( $title_plain, $site ) === 0 ) {
			unset( $parts['site'] );
			return $parts;
		}
		if ( $site ) {
			$short = fz_falcans_title_without_trailing_site( $title_plain, $site );
			if ( $short !== '' && strcasecmp( $short, $title_plain ) !== 0 ) {
				$parts['title'] = $short;
			}
		}
	}

	return $parts;
}
add_filter( 'document_title_parts', 'fz_falcans_document_title_parts', 20 );

/**
 * Virtual pages: /service/, /sales-business-development/ so URLs work even when no WP page exists.
 */
function fz_falcans_rewrite_rules() {
	add_rewrite_rule( '^service/?$', 'index.php?fz_virtual_page=service', 'top' );
	add_rewrite_rule( '^sales-business-development/?$', 'index.php?fz_virtual_page=sales-business-development', 'top' );
}
add_action( 'init', 'fz_falcans_rewrite_rules', 10 );

function fz_falcans_query_vars( $vars ) {
	$vars[] = 'fz_virtual_page';
	return $vars;
}
add_filter( 'query_vars', 'fz_falcans_query_vars' );

function fz_falcans_virtual_page_posts( $posts, $query ) {
	if ( ! $query->is_main_query() || is_admin() ) {
		return $posts;
	}
	$slug = $query->get( 'fz_virtual_page' );
	$titles = [
		'service'                   => 'Services',
		'sales-business-development' => 'Sales & Business Development',
	];
	if ( ! isset( $titles[ $slug ] ) ) {
		return $posts;
	}
	$fake = new stdClass();
	$fake->ID             = PHP_INT_MAX - 1; // High fake ID — avoids ID=0 falsy issues and cache collisions
	$fake->post_title     = $titles[ $slug ];
	$fake->post_name      = $slug;
	$fake->post_type      = 'page';
	$fake->post_status    = 'publish';
	$fake->post_author    = 1;
	$fake->post_content   = '';
	$fake->post_date      = current_time( 'mysql' );
	$fake->post_date_gmt  = current_time( 'mysql', 1 );
	$fake->comment_status = 'closed';
	$fake->ping_status    = 'closed';
	$fake->comment_count  = 0;
	$fake->post_parent    = 0;
	$fake->menu_order     = 0;
	$fake->post_excerpt   = '';
	return [ new WP_Post( $fake ) ];
}
add_filter( 'the_posts', 'fz_falcans_virtual_page_posts', 10, 2 );

add_filter( 'get_post_metadata', function( $value, $post_id, $meta_key, $single ) {
	if ( $post_id >= PHP_INT_MAX - 10 ) {
		return $single ? '' : [];
	}
	return $value;
}, 10, 4 );

function fz_falcans_virtual_page_template( $template ) {
	$slug = get_query_var( 'fz_virtual_page' );
	$templates = [
		'service'                   => 'page-service.php',
		'sales-business-development' => 'page-sales-business-development.php',
	];
	if ( ! isset( $templates[ $slug ] ) ) {
		return $template;
	}
	global $wp_query;
	$wp_query->is_404 = false;
	status_header( 200 );
	$page_template = get_template_directory() . '/' . $templates[ $slug ];
	if ( file_exists( $page_template ) ) {
		return $page_template;
	}
	return $template;
}
add_filter( 'template_include', 'fz_falcans_virtual_page_template', 99 );

function fz_falcans_force_slug_template( $template ) {
	if ( ! is_page() ) {
		return $template;
	}
	$slug = get_post_field( 'post_name', get_queried_object_id() );
	$slug_map = [
		'about'                                 => 'page-about.php',
		'account-manager'                       => 'page-account-manager.php',
		'administrative-assistant'              => 'page-administrative-assistant.php',
		'contact'                               => 'page-contact.php',
		'customer-and-carrier-relations'        => 'page-customer-and-carrier-relations.php',
		'customer-carrier-relations'            => 'page-customer-carrier-relations.php',
		'customs-brokers'                       => 'page-customs-brokers.php',
		'digital-marketing-expert'              => 'page-digital-marketing-expert.php',
		'dispatch-manager'                      => 'page-dispatch-manager.php',
		'documentation-expert'                  => 'page-documentation-expert.php',
		'documentation-specialist'              => 'page-documentation-specialist.php',
		'faq'                                   => 'page-faq.php',
		'freight-forwarders'                    => 'page-freight-forwarders.php',
		'logistics-accounting-financial'        => 'page-logistics-accounting-financial.php',
		'logistics-coordinator'                 => 'page-logistics-coordinator.php',
		'nvocc'                                 => 'page-nvocc.php',
		'operation-manager'                     => 'page-operation-manager.php',
		'price'                                 => 'page-price.php',
		'project-details'                       => 'page-project-details.php',
		'sales-and-business-development'        => 'page-sales-and-business-development.php',
		'sales-business-development'            => 'page-sales-business-development.php',
		'service'                               => 'page-service.php',
		'shipping-lines-agents'                 => 'page-shipping-lines-agents.php',
		'truck-dispatcher'                      => 'page-truck-dispatcher.php',
		'trucking-companies-owner-operators'    => 'page-trucking-companies-owner-operators.php',
		'warehousing-distribution-companies'    => 'page-warehousing-distribution-companies.php',
	];
	if ( isset( $slug_map[ $slug ] ) ) {
		$file = get_template_directory() . '/' . $slug_map[ $slug ];
		if ( file_exists( $file ) ) {
			return $file;
		}
	}
	return $template;
}
add_filter( 'template_include', 'fz_falcans_force_slug_template', 100 );

function fz_falcans_flush_rewrite_on_activation() {
	fz_falcans_rewrite_rules();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'fz_falcans_flush_rewrite_on_activation' );

/**
 * Custom SEO Title for specific pages
 */
function fz_custom_seo_document_title( $title ) {
	if ( defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) ) {
		return $title;
	}
	if ( is_page( 'about' ) || is_page_template( 'page-about.php' ) ) {
		return 'About EZ Falcons | Logistics Outsourcing Company USA';
	} elseif ( is_page( 'account-manager' ) || is_page_template( 'page-account-manager.php' ) ) {
		return 'Logistics Account Manager Remote | EZ Falcons USA';
	} elseif ( is_page( 'administrative-assistant' ) || is_page_template( 'page-administrative-assistant.php' ) ) {
		return 'Virtual Admin Assistant Logistics | EZ Falcons USA';
	} elseif ( is_page( 'customs-brokers' ) || is_page_template( 'page-customs-brokers.php' ) ) {
		return 'Customs Broker Back Office Outsourcing | EZ Falcons';
	} elseif ( is_page( 'digital-marketing-expert' ) || is_page_template( 'page-digital-marketing-expert.php' ) ) {
		return 'Digital Marketing for Logistics Outsourcing | EZF';
	} elseif ( is_page( 'documentation-expert' ) || is_page_template( 'page-documentation-expert.php' ) ) {
		return 'Customs Documentation Outsourcing USA | EZ Falcons';
	} elseif ( is_page( 'faq' ) || is_page_template( 'page-faq.php' ) ) {
		return 'Logistics BPO FAQ | Outsource Logistics USA Guide';
	} elseif ( is_page( 'freight-forwarders' ) || is_page_template( 'page-freight-forwarders.php' ) ) {
		return 'Freight Forwarding Back Office Outsourcing | EZF';
	} elseif ( is_page( 'logistics-accounting-financial' ) || is_page_template( 'page-logistics-accounting-financial.php' ) ) {
		return 'Freight Billing Outsourcing USA | Logistics Finance';
	} elseif ( is_page( 'logistics-coordinator' ) || is_page_template( 'page-logistics-coordinator.php' ) ) {
		return 'Remote Logistics Coordinator USA | Outsource Ops';
	} elseif ( is_page( 'nvocc' ) || is_page_template( 'page-nvocc.php' ) ) {
		return 'NVOCC Back Office Outsourcing USA | Remote Support';
	} elseif ( is_page( 'operation-manager' ) || is_page_template( 'page-operation-manager.php' ) ) {
		return 'Remote Operations Manager Logistics USA | BPO Ops';
	} elseif ( is_page( 'price' ) || is_page_template( 'page-price.php' ) ) {
		return 'Logistics BPO Pricing USA | Affordable Remote Staff';
	} elseif ( is_page( 'sales-business-development' ) || is_page_template( 'page-sales-business-development.php' ) ) {
		return 'Logistics Sales Outsourcing – Grow Freight Revenue USA';
	} elseif ( is_page( 'shipping-lines-agents' ) || is_page_template( 'page-shipping-lines-agents.php' ) ) {
		return 'Shipping Lines Back Office Outsourcing USA Support';
	} elseif ( is_page( 'truck-dispatcher' ) || is_page_template( 'page-truck-dispatcher.php' ) ) {
		return 'Truck Dispatcher Outsourcing – Remote Dispatch USA';
	} elseif ( is_page( 'trucking-companies-owner-operators' ) || is_page_template( 'page-trucking-companies-owner-operators.php' ) ) {
		return 'Virtual Truck Dispatcher – Remote Dispatch for Trucking USA';
	} elseif ( is_page( 'warehousing-distribution-companies' ) || is_page_template( 'page-warehousing-distribution-companies.php' ) ) {
		return '3PL Back Office Outsourcing – Warehouse Support USA';
	} elseif ( is_front_page() || is_home() ) {
		return 'Logistics BPO Services USA | Outsource Logistics';
	}
	return $title;
}
add_filter( 'pre_get_document_title', 'fz_custom_seo_document_title', 10 );
