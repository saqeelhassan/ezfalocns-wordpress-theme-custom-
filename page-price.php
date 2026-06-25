<?php
/**
 * Page with slug "price" (Pricing). Create a page in WordPress with slug "price" to use this.
 * Content is in template-parts/content-full-price.php.
 */
get_header();
$ct = fz_contact();
while ( have_posts() ) :
	the_post();
?>
<main>
    <?php get_template_part( 'template-parts/content-full', 'price' ); ?>
</main>
<?php
endwhile;
get_footer();
