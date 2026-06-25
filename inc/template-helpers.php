<?php
/**
 * Helper variables for full page templates (same as Laravel asset/route).
 * Use in templates: $t = fz_assets(); $h = fz_home(); etc.
 */
function fz_assets() {
    return get_template_directory_uri() . '/assets';
}

function fz_home() { return home_url( '/' ); }
function fz_about() { return home_url( '/about/' ); }
function fz_contact() { return home_url( '/contact/' ); }
function fz_service() { return home_url( '/service/' ); }
function fz_faq() { return home_url( '/faq/' ); }
function fz_blog() { return home_url( '/blog/' ); }

/**
 * Blog listing URL: Settings → Reading “Posts page”, else published page slug `blog`, else /blog/.
 */
function fz_blog_list_url() {
	$page_id = (int) get_option( 'page_for_posts' );
	if ( $page_id && get_post_status( $page_id ) === 'publish' ) {
		$url = get_permalink( $page_id );
		if ( $url ) {
			return $url;
		}
	}
	$blog_page = get_page_by_path( 'blog', OBJECT, 'page' );
	if ( $blog_page && $blog_page->post_status === 'publish' ) {
		return get_permalink( $blog_page );
	}
	return home_url( '/blog/' );
}

function fz_pricing() { return home_url( '/project-details/' ); }

/**
 * Breadcrumb data for the current request. Used by template-parts/breadcrumb.php.
 * Returns: [ 'items' => [ ['label' => string, 'url' => string], ... ], 'title' => string, 'subtitle' => string ]
 */
function fz_get_breadcrumb() {
	$items   = [];
	$items[] = [ 'label' => 'Home', 'url' => home_url( '/' ) ];
	$title   = '';
	$subtitle = '';

	// Virtual pages (e.g. /service/) – breadcrumb before main query sets queried object
	$virtual = get_query_var( 'fz_virtual_page' );
	if ( $virtual ) {
		$virtual_titles = [
			'service'                   => 'Services',
			'sales-business-development' => 'Sales & Business Development',
		];
		if ( isset( $virtual_titles[ $virtual ] ) ) {
			$title = $virtual_titles[ $virtual ];
			return [ 'items' => $items, 'title' => $title, 'subtitle' => '' ];
		}
	}

	if ( is_404() ) {
		$items[] = [ 'label' => 'Page Not Found', 'url' => '' ];
		return [ 'items' => $items, 'title' => 'Page Not Found', 'subtitle' => '' ];
	}

	if ( is_singular( 'post' ) ) {
		$post = get_queried_object();
		if ( $post && $post instanceof WP_Post ) {
			$items[] = [ 'label' => 'Blog', 'url' => function_exists( 'fz_blog_list_url' ) ? fz_blog_list_url() : home_url( '/blog/' ) ];
			$items[] = [ 'label' => get_the_title( $post ), 'url' => '' ];
			return [ 'items' => $items, 'title' => get_the_title( $post ), 'subtitle' => 'Blog' ];
		}
	}

	// Blog listing (separate page or when "Your latest posts" is front page)
	if ( is_home() ) {
		$items[] = [ 'label' => 'Blog', 'url' => '' ];
		return [ 'items' => $items, 'title' => 'Blog', 'subtitle' => '' ];
	}

	if ( is_singular( 'page' ) ) {
		$post = get_queried_object();
		if ( $post && $post instanceof WP_Post ) {
			// Page using Blog template: always show "Blog" in breadcrumb
			$template = get_post_meta( $post->ID, '_wp_page_template', true );
			if ( $template === 'page-blog.php' ) {
				return [ 'items' => $items, 'title' => 'Blog', 'subtitle' => '' ];
			}
			$title    = get_the_title( $post );
			$subtitle = get_post_meta( $post->ID, 'breadcrumb_subtitle', true );
			if ( $post->post_parent ) {
				$parent = get_post( $post->post_parent );
				if ( $parent ) {
					$items[] = [ 'label' => get_the_title( $parent ), 'url' => get_permalink( $parent ) ];
				}
			}
			// Price page: breadcrumb shows "Price" only, no subtitle
			if ( $post->post_name === 'price' ) {
				$title    = 'Price';
				$subtitle = '';
			}
			$items[] = [ 'label' => $title, 'url' => '' ];
			// Default subtitles by slug when meta is empty
			if ( $subtitle === '' && $post->post_name !== 'price' ) {
				$defaults = [
					'about'    => '',
					'contact'  => 'Get In Touch',
					'faq'      => 'Frequently Asked Questions',
					'service'  => '',
					'price'    => 'Pricing',
					'blog'     => 'News & Updates',
				];
				$subtitle = isset( $defaults[ $post->post_name ] ) ? $defaults[ $post->post_name ] : '';
			}
			return [ 'items' => $items, 'title' => $title, 'subtitle' => $subtitle ];
		}
	}

	// Fallback (archive, etc.)
	$title = wp_get_document_title();
	if ( $title ) {
		$items[] = [ 'label' => $title, 'url' => '' ];
	}
	return [ 'items' => $items, 'title' => $title ?: 'Page', 'subtitle' => $subtitle ];
}

/**
 * Slug → template part for default page content (so editor shows same as front when content is empty).
 */
function fz_get_default_content_template_for_slug( $slug ) {
    $map = [
        'about'                              => [ 'content-full', 'about' ],
        'service'                            => [ 'content-full', 'service' ],
        'contact'                            => [ 'content-full', 'contact' ],
        'faq'                                => [ 'content-full', 'faq' ],
        'price'                              => [ 'content-full', 'price' ],
        'logistics-accounting-financial'     => [ 'content-full', 'logistics-accounting-financial' ],
        'project-details'                    => [ 'content-full', 'project-details' ],
        'operation-manager'                  => [ 'content-role', 'operation-manager' ],
        'dispatch-manager'                   => [ 'content-role', 'dispatch-manager' ],
        'truck-dispatcher'                   => [ 'content-role', 'dispatch-manager' ],
        'account-manager'                    => [ 'content-role', 'account-manager' ],
        'documentation-expert'               => [ 'content-role', 'documentation-expert' ],
        'documentation-specialist'           => [ 'content-role', 'documentation-expert' ],
        'sales-business-development'         => [ 'content-role', 'sales-business-development' ],
        'sales-and-business-development'     => [ 'content-role', 'sales-business-development' ],
        'customer-carrier-relations'         => [ 'content-role', 'customer-carrier-relations' ],
        'customer-and-carrier-relations'     => [ 'content-role', 'customer-carrier-relations' ],
        'administrative-assistant'           => [ 'content-role', 'administrative-assistant' ],
        'logistics-coordinator'             => [ 'content-role', 'logistics-coordinator' ],
        'digital-marketing-expert'           => [ 'content-role', 'digital-marketing-expert' ],
        'freight-forwarders'                 => [ 'content-industry', 'freight-forwarders' ],
        'nvocc'                              => [ 'content-industry', 'nvocc' ],
        'trucking-companies-owner-operators' => [ 'content-industry', 'trucking-companies-owner-operators' ],
        'shipping-lines-agents'              => [ 'content-industry', 'shipping-lines-agents' ],
        'customs-brokers'                    => [ 'content-industry', 'customs-brokers' ],
        'warehousing-distribution-companies' => [ 'content-industry', 'warehousing-distribution-companies' ],
    ];
    if ( isset( $map[ $slug ] ) ) {
        return $map[ $slug ];
    }
    if ( $slug === 'home' || $slug === 'front-page' ) {
        return [ 'content', 'full-home' ];
    }
    return null;
}

/**
 * Render the theme default content for a page (for showing in WordPress editor when post_content is empty).
 */
function fz_render_default_page_content( $post ) {
    if ( ! $post || ! isset( $post->post_name ) ) {
        return '';
    }
    $slug   = $post->post_name;
    $template = fz_get_default_content_template_for_slug( $slug );
    if ( ! $template ) {
        return '';
    }
    $old_post        = isset( $GLOBALS['post'] ) ? $GLOBALS['post'] : null;
    $GLOBALS['post'] = $post;
    setup_postdata( $post );
    ob_start();
    try {
        get_template_part( 'template-parts/' . $template[0], $template[1] );
        $html = ob_get_clean();
    } catch ( \Throwable $e ) {
        ob_end_clean();
        $html = '';
    } finally {
        if ( $old_post ) {
            $GLOBALS['post'] = $old_post;
            setup_postdata( $old_post );
        } else {
            wp_reset_postdata();
        }
    }
    return $html;
}
