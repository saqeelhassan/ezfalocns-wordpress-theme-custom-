<?php
/**
 * Theme-colored breadcrumb for all pages. Shows page title and optional subtitle only.
 * Uses fz_get_breadcrumb() for data. Styled with .fz-breadcrumb-theme (theme colors).
 */
if ( ! function_exists( 'fz_get_breadcrumb' ) ) {
	return;
}
$breadcrumb = fz_get_breadcrumb();
$title      = $breadcrumb['title'];
$subtitle   = $breadcrumb['subtitle'];
?>
<div class="breadcrumb-wrapper fz-breadcrumb-theme fix">
	<div class="container">
		<div class="page-heading fz-breadcrumb-heading">
			<?php if ( $subtitle ) : ?>
				<div class="breadcrumb-sub-title">
					<span class="wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $subtitle ); ?></span>
				</div>
			<?php endif; ?>
			<h1 class="wow fadeInUp" data-wow-delay=".5s"><?php echo esc_html( $title ); ?></h1>
		</div>
	</div>
</div>
