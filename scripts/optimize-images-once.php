<?php
/**
 * One-off image optimization: recompress CTA WebP, create logo WebP @2x display size.
 * Run: php scripts/optimize-images-once.php
 */
$base = dirname( __DIR__ );
$cta_backup = $base . '/assets/img/cta/cta-bg-01.original.webp';
$cta          = $base . '/assets/img/cta/cta-bg-01.webp';
$cta_source   = is_readable( $cta_backup ) ? $cta_backup : $cta;
$logo = $base . '/assets/img/logo/ez-falcons-logo.png';
$logo_out = $base . '/assets/img/logo/ez-falcons-logo.webp';

if ( ! is_readable( $cta_source ) || ! is_readable( $logo ) ) {
	fwrite( STDERR, "Missing input files.\n" );
	exit( 1 );
}

// --- CTA: recompress WebP (quality 78, strip metadata via re-encode) ---
$im = imagecreatefromwebp( $cta_source );
if ( ! $im ) {
	fwrite( STDERR, "Could not read CTA webp.\n" );
	exit( 1 );
}
imagesavealpha( $im, true );
if ( ! file_exists( $cta_backup ) && $cta_source === $cta ) {
	copy( $cta, $cta_backup );
	echo "Backed up CTA to cta-bg-01.original.webp\n";
}
imagewebp( $im, $cta, 78 );
imagedestroy( $im );
echo 'CTA webp: ' . filesize( $cta ) . " bytes\n";

// --- Logo: resize to 2x displayed ~221x50 => 442x100, preserve aspect ---
$data = file_get_contents( $logo );
$im   = $data ? imagecreatefromstring( $data ) : false;
if ( ! $im ) {
	fwrite( STDERR, "Could not read logo image.\n" );
	exit( 1 );
}
imagealphablending( $im, false );
imagesavealpha( $im, true );
$sw = imagesx( $im );
$sh = imagesy( $im );
$target_w = 442;
$target_h = (int) round( $sh * ( $target_w / $sw ) );
$out = imagecreatetruecolor( $target_w, $target_h );
imagealphablending( $out, false );
imagesavealpha( $out, true );
$transparent = imagecolorallocatealpha( $out, 0, 0, 0, 127 );
imagefilledrectangle( $out, 0, 0, $target_w, $target_h, $transparent );
imagecopyresampled( $out, $im, 0, 0, 0, 0, $target_w, $target_h, $sw, $sh );
imagedestroy( $im );
imagewebp( $out, $logo_out, 90 );
imagedestroy( $out );
echo 'Logo webp: ' . filesize( $logo_out ) . " bytes ({$target_w}x{$target_h})\n";

// --- Mobile LCP: 768px-wide copy of first hero slide ---
$hero1    = $base . '/assets/img/hero/hero-bg-1.webp';
$hero_768 = $base . '/assets/img/hero/hero-bg-1-768.webp';
if ( is_readable( $hero1 ) ) {
	$him = imagecreatefromwebp( $hero1 );
	if ( $him ) {
		$w = imagesx( $him );
		$h = imagesy( $him );
		$tw = min( 768, $w );
		$th = (int) round( $h * ( $tw / $w ) );
		if ( $tw < $w ) {
			$scaled = imagescale( $him, $tw, $th, IMG_BILINEAR_FIXED );
			imagedestroy( $him );
			$him = $scaled;
		}
		imagesavealpha( $him, true );
		imagewebp( $him, $hero_768, 78 );
		imagedestroy( $him );
		echo 'hero-bg-1-768.webp: ' . filesize( $hero_768 ) . " bytes ({$tw}x{$th})\n";
	}
}

// --- All theme WebPs under assets/img (skip backups named *.original.*) ---
$img_root = $base . '/assets/img';
if ( is_dir( $img_root ) ) {
	$iter = new RecursiveIteratorIterator(
		new RecursiveDirectoryIterator( $img_root, FilesystemIterator::SKIP_DOTS )
	);
	foreach ( $iter as $file ) {
		if ( ! $file->isFile() ) {
			continue;
		}
		$path = $file->getPathname();
		if ( stripos( $path, '.original.' ) !== false ) {
			continue;
		}
		if ( strtolower( $file->getExtension() ) !== 'webp' ) {
			continue;
		}
		$im = imagecreatefromwebp( $path );
		if ( ! $im ) {
			continue;
		}
		imagesavealpha( $im, true );
		imagewebp( $im, $path, 78 );
		imagedestroy( $im );
		echo str_replace( $base . '/', '', $path ) . ': ' . filesize( $path ) . " bytes\n";
	}
}

echo "Done.\n";
