<?php
/**
 * Page with slug "about". Edit in Gutenberg; or edit template-parts/content-full-about.php when content is empty.
 */
get_header();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php
	// Always show the full About template (EZ Falcons content). Use content-full-about.php to edit.
	get_template_part( 'template-parts/content-full', 'about' );
	?>
</main>
<?php
endwhile;
get_footer();
