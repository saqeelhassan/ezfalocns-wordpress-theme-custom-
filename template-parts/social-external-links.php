<?php
/**
 * Shared social profile links (header, footer, team cards).
 *
 * @var array $args { 'variant' => 'anchors'|'list-items' } from get_template_part().
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$variant = ( isset( $args ) && is_array( $args ) && isset( $args['variant'] ) && $args['variant'] === 'list-items' ) ? 'list-items' : 'anchors';

$fz_social_links = [
	[
		'url'   => 'https://www.facebook.com/profile.php?id=61586499242989',
		'label' => 'Facebook',
		'icon'  => 'fab fa-facebook-f',
	],
	[
		'url'   => 'https://www.youtube.com/@ezfalcons',
		'label' => 'YouTube',
		'icon'  => 'fab fa-youtube',
	],
	[
		'url'   => 'https://www.linkedin.com/company/ezfalcons',
		'label' => 'LinkedIn',
		'icon'  => 'fab fa-linkedin-in',
	],
	[
		'url'   => 'https://www.instagram.com/ezfalcons/',
		'label' => 'Instagram',
		'icon'  => 'fab fa-instagram',
	],
	[
		'url'   => 'https://www.pinterest.com/ezfalcons/',
		'label' => 'Pinterest',
		'icon'  => 'fab fa-pinterest',
	],
	[
		'url'   => 'https://www.threads.com/@ezfalcons',
		'label' => 'Threads',
		'icon'  => 'fa-solid fa-at',
	],
	[
		'url'   => 'https://x.com/ezfalcons',
		'label' => 'X',
		'icon'  => 'fab fa-twitter',
	],
];

foreach ( $fz_social_links as $link ) {
	printf(
		'%s<a href="%s" target="_blank" rel="noopener noreferrer" aria-label="%s"><i class="%s"></i></a>%s',
		$variant === 'list-items' ? '<li>' : '',
		esc_url( $link['url'] ),
		esc_attr( $link['label'] ),
		esc_attr( $link['icon'] ),
		$variant === 'list-items' ? '</li>' : ''
	);
}
