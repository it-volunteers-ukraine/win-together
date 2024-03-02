<?php
	/**
	 * The template for displaying 404 pages (not found)
	 *
	 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
	 *
	 * @package wp-win-together
	 */

	get_header();
?>

    <!-- ================ Banner area ================ -->
    <div class="inner-page-title-area"
         style='background-image:url("<?php echo esc_url( get_field( '404_img', 'option' )['sizes']['1920x600'] ); ?>")'>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h1><?php the_field( '404_title', 'option' ); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Banner area end ================ -->


    <!-- ================ 404 page ================ -->
    <div class="404-page pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="error-text text-center">
                        <h2><?php the_field( '404_title_page', 'option' ); ?></h2>
                        <h4><?php the_field( '404_subtitle', 'option' ); ?></h4>
                        <p><?php the_field( '404_text', 'option' ); ?></p>
                        <a href="<?php the_field( '404_link', 'option' ); ?>"
                           class="btn-style-1"><?php the_field( '404_btn', 'option' ); ?></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ 404 page end ================ -->

<?php
	get_footer();
