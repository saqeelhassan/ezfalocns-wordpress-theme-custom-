<?php
/**
 * Full 404 page – same as Laravel resources/views/404.blade.php
 * Edit this file to change the not-found content.
 */
get_header();
$t = fz_assets();
$home = fz_home();
?>
<main>
    <section class="error-section section-padding fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="error-items">
                        <div class="error-image wow fadeInUp" data-wow-delay=".6s">
                            <img src="<?php echo esc_url( $t ); ?>/img/404.svg" alt="img">
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".5s">PAGE NOT FOUND</h2>
                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            Oops! The page you're looking for doesn't exist, has been moved, or is temporarily unavailable. Please check the
                            URL for any mistakes, or head back to the homepage to continue exploring.
                        </p>
                        <div class="search-widget wow fadeInUp" data-wow-delay=".5s">
                            <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <input type="search" name="s" placeholder="Keywords">
                                <button type="submit" class="theme-btn">Search <i class="fa-solid fa-arrow-right"></i></button>
                            </form>
                        </div>
                        <p class="mt-3"><a href="<?php echo esc_url( $home ); ?>" class="theme-btn">Back to Home <i class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
