<?php
/**
 * Services page content – list of all role/service links.
 * Edit this file to change the services listed.
 */
$t = fz_assets();

$services = [
	[
		'title' => 'Operation Manager',
		'url'   => home_url( '/operation-manager/' ),
		'icon'  => 'flaticon-schedule',
	],
	[
		'title' => 'Logistics Coordinator',
		'url'   => home_url( '/logistics-coordinator/' ),
		'icon'  => 'flaticon-tracking-1',
	],
	[
		'title' => 'Truck Dispatcher',
		'url'   => home_url( '/truck-dispatcher/' ),
		'icon'  => 'flaticon-order-tracking',
	],
	[
		'title' => 'Documentation Specialist',
		'url'   => home_url( '/documentation-specialist/' ),
		'icon'  => 'flaticon-booking',
	],
	[
		'title' => 'Accounting &amp; Finance',
		'url'   => home_url( '/logistics-accounting-financial/' ),
		'icon'  => 'flaticon-speech-bubbles',
	],
	[
		'title' => 'Sales &amp; Business Development',
		'url'   => home_url( '/sales-business-development/' ),
		'icon'  => 'flaticon-target-audience',
	],
	[
		'title' => 'Administrative Assistant',
		'url'   => home_url( '/administrative-assistant/' ),
		'icon'  => 'flaticon-favorite',
	],
	[
		'title' => 'Digital Marketing Expert',
		'url'   => home_url( '/digital-marketing-expert/' ),
		'icon'  => 'flaticon-freight',
	],
];
?>
<section class="services-list-section fix section-padding">
    <div class="container">
        <div class="section-title style-2 text-center mb-5">
            <span class="wow fadeInUp">What We Offer</span>
            <h2 class="wow fadeInUp" data-wow-delay=".2s">Our Roles &amp; Services</h2>
            <p class="wow fadeInUp" data-wow-delay=".3s" style="max-width: 640px; margin: 1rem auto 0; color: var(--text);">Expert EZ Falcons support for logistics and transportation. Click any role to learn more.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ( $services as $i => $item ) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr( '.' . ( ( $i % 4 ) + 2 ) . 's' ); ?>">
                <a href="<?php echo esc_url( $item['url'] ); ?>" class="service-link-card">
                    <div class="icon"><i class="<?php echo esc_attr( $item['icon'] ); ?>"></i></div>
                    <h5><?php echo $item['title']; ?></h5>
                    <span class="link-text">Learn more <i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
