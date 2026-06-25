<?php
/**
 * Default page template. Full-width main and .entry-content for the block editor (Gutenberg).
 */
get_header();
?>
<main id="main" class="fz-page-main site-main" role="main">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'fz-page-content' ); ?>>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
		<?php
	endwhile;
	?>
</main>
<?php get_footer(); ?>
