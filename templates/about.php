<?php
	/*
	Template Name: about
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


    <!-- ================ About area ================ -->
<?php if ( get_field( 'about_show' ) ) : ?>

    <div class="about-page-about pt-40 pb-60">
        <div class="container">
            <div class="section-title text-center mb-40">
                <h2><?php the_field( 'about_title' ); ?></h2>
                <span class="border-title"></span>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0 ">
                    <img src="<?php echo esc_url( get_field( 'about_img' )['url'] ); ?>"
                         alt="<?php echo esc_url( get_field( 'about_img' )['alt'] ); ?>">
                </div>
                <div class="col-lg-6 ">
					<?php the_field( 'about_text' ); ?>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>
    <!-- ================ About area end ================ -->


    <!-- ================ Additional text area ================ -->
<?php if ( get_field( 'additional_show' ) ) : ?>

    <div class="pt-50">
        <div class="container">
            <div class="section-title text-center mb-40">
                <h2><?php the_field( 'additional_title' ); ?></h2>
                <span class="border-title"></span>
            </div>
            <div class="row wysiwyg-text">
                <div class="col-xl-10 offset-xl-1">
					<?php the_field( 'additional_text' ); ?>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>
    <!-- ================ Additional text area end ================ -->


    <!-- ================ Features area ================ -->
<?php if ( get_field( 'work_list_show' ) ) : ?>

	<?php if ( have_rows( 'work_list' ) ): ?>
        <div class="features-area pt-60">
            <div class="container-fluid">
                <div class="row">
					<?php while ( have_rows( 'work_list' ) ): the_row(); ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- feature item -->
                            <div class="feature-item h-100">
                                <!--                                <i class="fas fa-check-circle"></i>-->
                                <h4><?php the_sub_field( 'title' ); ?></h4>
                                <p class="mb-0"><?php the_sub_field( 'description' ); ?></p>
                            </div>
                        </div>
					<?php endwhile; ?>
                </div>
            </div>
        </div>
	<?php endif; ?>

<?php endif; ?>
    <!-- ================ Features area end ================ -->

    <!-- ================ Fundraising area ================ -->
<?php if ( get_field( 'fundraising_show' ) ) : ?>

    <div class="about-page-fundraising pt-80 pb-50">
        <div class="container text-center">

            <div class="section-title text-center mb-40">
                <h2><?php the_field( 'fundraising_title' ); ?></h2>
                <span class="border-title"></span>
            </div>

            <p class="description mx-auto"><?php the_field( 'fundraising_text' ); ?></p>

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-1">
				<?php $args = ( [
					'posts_per_page' => 3,
					'post_type'      => 'fundraising',
				] );
					$query  = new WP_Query( $args );
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) :
							$query->the_post(); ?>

							<?php get_template_part( 'template-parts/content', 'fundraising-card' ); ?>

						<?php endwhile;
						wp_reset_postdata();
					endif; ?>
            </div>

            <a href="<?php echo get_post_type_archive_link( 'fundraising' ); ?>" class="btn-style-1 mt-20 mx-auto px-5">
				<?php the_field( 'fundraising_btn' ); ?> <i class="fas fa-caret-right"></i></a>
        </div>
    </div>

<?php endif; ?>
    <!-- ================ Fundraising area end ================ -->


<?php get_footer(); ?>