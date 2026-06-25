<?php
/**
 * Front Page template.
 * Used when Settings → Reading is set to "A static page" and this is the homepage.
 * Edit in Gutenberg to show block content; when empty, shows template-parts/content-full-home.php.
 */
get_header();
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content', 'full-home' );
endwhile;
get_footer();
