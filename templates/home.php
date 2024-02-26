<?php
	/*
	Template Name: home
	*/
	get_header();
?>


    <!-- ================ Slider area ================ -->
    <div class="slider" id="home">
		<?php if ( have_rows( 'banner_slides' ) ):
			$counter = 0; ?>
            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
					<?php while ( have_rows( 'banner_slides' ) ): the_row(); ?>
                        <div class="carousel-item <?php echo ( $counter === 0 ) ? 'active' : '' ?>"
                             style='background-image:url("<?php echo get_sub_field( 'img' )['url']; ?>")'>
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="slider-caption-box">
                                                <h3><?php the_sub_field( 'subtitle' ); ?></h3>
                                                <h2 class="mb-15"><?php the_sub_field( 'title' ); ?></h2>
                                                <p><?php the_sub_field( 'text' ); ?></p>

												<?php if ( get_field( 'banner_btn_link_1' ) ) { ?>
                                                    <a class="btn-style-2 mr-6"
                                                       href="<?php the_field( 'banner_btn_link_1' ); ?>"><?php the_field( 'banner_btn_text_1' ); ?></a>
												<?php } ?>
												<?php if ( get_field( 'banner_btn_link_2' ) ) { ?>
                                                    <a class="btn-style-2 mr-6"
                                                       href="<?php the_field( 'banner_btn_link_2' ); ?>"><?php the_field( 'banner_btn_text_2' ); ?></a>
												<?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php $counter ++; endwhile; ?>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev"> <span
                            class="carousel-control-prev-icon" aria-hidden="true"></span> </a> <a
                        class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next"> <span
                            class="carousel-control-next-icon" aria-hidden="true"></span> </a>
            </div>
		<?php endif; ?>
    </div>
    <!-- ================ Slider area end ================ -->


    <!-- ================ Fundraising area ================ -->
    <div class="services-area pt-80 pb-50">
        <div class="container text-center">

            <div class="section-title text-center mb-40">
                <h2><?php the_field( 'fundraising_title' ); ?></h2>
                <span class="border-title"></span>
            </div>

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
    <!-- ================ Fundraising area end ================ -->


    <!-- ================ Call to action area ================ -->
    <div class="call-to-action-area pt-100 pb-80"
         style='background-image:url("<?php echo get_field( 'call_img' )['sizes']['1920x600']; ?>")'>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-20">
                    <div class="cta-content">
                        <h3><?php the_field( 'call_subtitle' ); ?></h3>
                        <h2><?php the_field( 'call_title' ); ?></h2>
                        <p class="mb-25"><?php the_field( 'call_text' ); ?></p>
                        <a href="<?php the_field( 'call_btn_link' ); ?>"
                           class="btn-style-1"><?php the_field( 'call_btn_text' ); ?></a>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-2 text-lg-center mb-20">

                    <a id="callToActionVideoBtn" class="video-popup"
                       data-videosource="<?php echo get_field( 'call_video' )['url']; ?>">
                        <i class="fas fa-play" style="pointer-events: none"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Call to action area end ================ -->


<?php get_footer(); ?>