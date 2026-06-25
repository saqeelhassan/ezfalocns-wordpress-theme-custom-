<?php
/**
 * Import theme assets (images) into WordPress Media Library so they appear in Media.
 * Adds "Import theme assets" under Appearance. Run once to copy theme's assets/img into uploads and register as attachments.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'admin_menu', 'fz_falcans_add_import_assets_menu' );
add_action( 'admin_init', 'fz_falcans_handle_import_assets' );

function fz_falcans_add_import_assets_menu() {
	add_theme_page(
		__( 'Import theme assets to Media', 'fz-falcans' ),
		__( 'Import theme assets', 'fz-falcans' ),
		'upload_files',
		'fz-import-theme-assets',
		'fz_falcans_import_assets_page'
	);
}

function fz_falcans_import_assets_page() {
	$imported_flag = get_option( 'fz_theme_assets_imported', false );
	$imported_count = isset( $_GET['imported'] ) ? (int) $_GET['imported'] : 0;
	$url = add_query_arg( [ 'page' => 'fz-import-theme-assets', 'fz_import_assets' => '1', 'nonce' => wp_create_nonce( 'fz_import_assets' ) ], admin_url( 'themes.php' ) );
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Import theme assets to Media', 'fz-falcans' ); ?></h1>
		<p><?php esc_html_e( 'Copy images from the theme’s assets/img folder into the WordPress uploads folder and add them to the Media Library so you can see and use them in the editor.', 'fz-falcans' ); ?></p>
		<?php if ( $imported_count > 0 ) : ?>
			<div class="notice notice-success"><p><?php echo esc_html( sprintf( __( '%d image(s) imported to Media Library.', 'fz-falcans' ), $imported_count ) ); ?></p></div>
		<?php endif; ?>
		<?php if ( $imported_flag ) : ?>
			<p><strong><?php esc_html_e( 'Assets have been imported. They appear in Media → Library.', 'fz-falcans' ); ?></strong></p>
			<p><a href="<?php echo esc_url( admin_url( 'upload.php' ) ); ?>"><?php esc_html_e( 'View Media Library', 'fz-falcans' ); ?></a></p>
		<?php endif; ?>
		<p>
			<a href="<?php echo esc_url( $url ); ?>" class="button button-primary"><?php esc_html_e( 'Import theme assets to Media', 'fz-falcans' ); ?></a>
		</p>
	</div>
	<?php
}

function fz_falcans_handle_import_assets() {
	if ( empty( $_GET['fz_import_assets'] ) || empty( $_GET['nonce'] ) || ! current_user_can( 'upload_files' ) ) {
		return;
	}
	$nonce = isset( $_GET['nonce'] ) ? sanitize_text_field( wp_unslash( $_GET['nonce'] ) ) : '';
	if ( ! wp_verify_nonce( $nonce, 'fz_import_assets' ) ) {
		wp_die( esc_html__( 'Invalid request.', 'fz-falcans' ) );
	}

	$theme_dir = get_template_directory() . '/assets/img';
	if ( ! is_dir( $theme_dir ) ) {
		wp_redirect( add_query_arg( [ 'page' => 'fz-import-theme-assets', 'error' => 'no_dir' ], admin_url( 'themes.php' ) ) );
		exit;
	}

	$extensions = [ 'jpg', 'jpeg', 'png', 'gif', 'webp', 'svg' ];
	$files      = fz_falcans_list_image_files( $theme_dir, $theme_dir, $extensions );
	$upload_dir = wp_upload_dir();
	$base_upload = $upload_dir['basedir'] . '/fz-theme-assets';
	$base_url   = $upload_dir['baseurl'] . '/fz-theme-assets';

	if ( ! wp_mkdir_p( $base_upload ) ) {
		wp_redirect( add_query_arg( [ 'page' => 'fz-import-theme-assets', 'error' => 'mkdir' ], admin_url( 'themes.php' ) ) );
		exit;
	}

	require_once ABSPATH . 'wp-admin/includes/image.php';
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/media.php';

	$imported = 0;
	foreach ( $files as $rel_path ) {
		$src = $theme_dir . '/' . $rel_path;
		if ( ! file_exists( $src ) || ! is_readable( $src ) ) {
			continue;
		}
		$subdir = dirname( $rel_path );
		if ( $subdir !== '.' ) {
			wp_mkdir_p( $base_upload . '/' . $subdir );
		}
		$dest_rel = $rel_path;
		$dest     = $base_upload . '/' . $dest_rel;
		if ( copy( $src, $dest ) ) {
			$file_url = $base_url . '/' . $dest_rel;
			$attachment = fz_falcans_attachment_from_file( $dest, $file_url, basename( $rel_path ) );
			if ( $attachment ) {
				$imported++;
			}
		}
	}

	update_option( 'fz_theme_assets_imported', true );
	wp_redirect( add_query_arg( [ 'page' => 'fz-import-theme-assets', 'imported' => $imported ], admin_url( 'themes.php' ) ) );
	exit;
}

function fz_falcans_list_image_files( $dir, $base, $extensions ) {
	$list = [];
	if ( ! is_dir( $dir ) ) {
		return $list;
	}
	if ( ! is_readable( $dir ) ) {
		return $list;
	}
	$items = scandir( $dir );
	if ( ! $items ) {
		return $list;
	}
	foreach ( $items as $item ) {
		if ( $item === '.' || $item === '..' ) {
			continue;
		}
		$path = $dir . '/' . $item;
		$rel  = substr( $path, strlen( $base ) + 1 );
		if ( is_dir( $path ) ) {
			$list = array_merge( $list, fz_falcans_list_image_files( $path, $base, $extensions ) );
		} else {
			$ext = strtolower( pathinfo( $path, PATHINFO_EXTENSION ) );
			if ( in_array( $ext, $extensions, true ) ) {
				$list[] = $rel;
			}
		}
	}
	return $list;
}

function fz_falcans_attachment_from_file( $file_path, $file_url, $title ) {
	$filetype = wp_check_filetype( basename( $file_path ), null );
	$attachment = [
		'post_mime_type' => $filetype['type'],
		'post_title'     => sanitize_file_name( pathinfo( $title, PATHINFO_FILENAME ) ),
		'post_content'   => '',
		'post_status'    => 'inherit',
	];
	$attach_id = wp_insert_attachment( $attachment, $file_path );
	if ( is_wp_error( $attach_id ) ) {
		return 0;
	}
	$attach_data = wp_generate_attachment_metadata( $attach_id, $file_path );
	wp_update_attachment_metadata( $attach_id, $attach_data );
	return $attach_id;
}
