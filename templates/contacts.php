<?php
	/*
	Template Name: contacts
	*/
	get_header();
?>

    <!-- ================ Banner area ================ -->
<?php if ( get_field( 'banner_show' ) ) : ?>

    <div class="inner-page-title-area"
         style='background-image:url("<?php echo esc_url( get_field( 'banner_img' )['sizes']['1920x600'] ); ?>")'>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h1><span><?php the_field( 'banner_title' ); ?></span></h1>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>
    <!-- ================ Banner area end ================ -->

    <!-- ================ Contact area ================ -->
    <div class="contact-page contact-area pb-50 pt-60">
        <div class="container">
            <div class="section-title text-center mb-20">
                <h2><?php the_field( 'title' ); ?></h2>
                <span class="border-title"></span>
            </div>
            <p class="description mx-auto text-center mb-md-5"><?php the_field( 'text' ); ?></p>
        </div>

		<?php get_template_part( 'template-parts/content', 'contact-section', array(
			'title' => get_field( "card_title" )
		) ); ?>
    </div>
    <!-- ================ Contact area end ================ -->


<?php get_footer(); ?>