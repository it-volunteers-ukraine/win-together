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
                             style='background-image:url("<?php echo esc_url( get_sub_field( 'img' )['url'] ); ?>")'>
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="slider-caption-box">
                                                <h3><?php the_sub_field( 'subtitle' ); ?></h3>
                                                <h2 class="mb-15"><?php the_sub_field( 'title' ); ?></h2>
                                                <p><?php the_sub_field( 'text' ); ?></p>

												<?php if ( get_field( 'banner_btn_link_1' ) && get_field( 'banner_btn_text_1' ) ) { ?>
                                                    <a class="btn-style-2 mr-6"
                                                       href="<?php the_field( 'banner_btn_link_1' ); ?>"><?php the_field( 'banner_btn_text_1' ); ?></a>
												<?php } ?>
												<?php if ( get_field( 'banner_btn_link_2' ) && get_field( 'banner_btn_text_2' ) ) { ?>
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


    <!-- ================ Features area ================ -->
<?php if ( have_rows( 'work_list' ) ): ?>
    <div class="features-area">
        <div class="container-fluid">
            <div class="row">
				<?php while ( have_rows( 'work_list' ) ): the_row(); ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!-- feature item -->
                        <div class="feature-item h-100"><i class="fas fa-check-circle"></i>
                            <h4><?php the_sub_field( 'title' ); ?></h4>
                            <p class="mb-0"><?php the_sub_field( 'description' ); ?></p>
                        </div>
                    </div>
				<?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
    <!-- ================ Features area end ================ -->


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

    <!-- ================ About area ================ -->
    <div class="about-area pt-80 pb-50 theme-bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-wrapper">
                        <div class="row align-items-center">
                            <div class="col-lg-5 mb-30">
                                <div class="about-images-1"><img
                                            src="<?php echo esc_url( get_field( 'about_img_1' )['url'] ); ?>"
                                            alt="<?php echo esc_attr( get_field( 'about_img_1' )['alt'] ); ?>">
                                </div>
                            </div>
                            <div class="col-lg-7 mb-30">
                                <div class="about-images-2"><img
                                            src="<?php echo esc_url( get_field( 'about_img_video' )['url'] ); ?>"
                                            alt="<?php echo esc_attr( get_field( 'about_img_video' )['alt'] ); ?>">
                                    <a id="aboutVideoBtn"
                                       class="video-btn"
                                       data-videosource="<?php echo get_field( 'about_video' )['url']; ?>">
                                        <i class="fa fa-play" style="pointer-events: none"></i> <span>Play Video</span>
                                    </a>
                                </div>
                                <div class="about-images-3 mt-30"><img
                                            src="<?php echo esc_url( get_field( 'about_img_2' )['url'] ); ?>"
                                            alt="<?php echo esc_attr( get_field( 'about_img_2' )['alt'] ); ?>"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 mb-30">
                    <div class="about-content">
                        <div class="about-content-text">
                            <h6><?php the_field( 'about_subtitle' ); ?></h6>
                            <h2><?php the_field( 'about_title' ); ?></h2>
							<?php the_field( 'about_text' ); ?>
                            <a href="<?php the_field( 'about_btn_link' ); ?>"
                               class="btn-style-1 mt-20"><?php the_field( 'about_btn_text' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ About area end ================ -->

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
						<?php if ( get_field( 'call_btn_link' ) && get_field( 'call_btn_text' ) ) { ?>
                            <a href="<?php the_field( 'call_btn_link' ); ?>"
                               class="btn-style-1"><?php the_field( 'call_btn_text' ); ?></a>
						<?php } ?>
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

    <!-- ================ Contact area ================ -->
    <div class="contact-area pb-50 pt-80">
        <div class="container">
            <div class="row contact-row">
                <div class="col-lg-7 col-md-5 mb-30">
                    <div class="map-box">
                        <iframe src="<?php the_field( 'google_map', 'option' ); ?>"></iframe>
                    </div>
                </div>

                <div class="col-lg-5 col-md-7 mb-30">
                    <!-- contact info -->
                    <div class="contact-info-box h-100">
                        <h3 class="text-white mb-20"><?php the_field( 'contacts_title' ); ?></h3>
                        <ul class="contact-info">
                            <li><a href="tel:<?php the_field( 'phone', 'option' ); ?>">
                                    <i class="fas fa-phone-alt"></i> <?php the_field( 'phone_display', 'option' ); ?>
                                </a>
                            </li>
                            <li><a href="mailto:<?php the_field( 'email', 'option' ); ?>">
                                    <i class="far fa-envelope"></i> <?php the_field( 'email', 'option' ); ?></a>
                            </li>
                            <li><i class="fas fa-map-marker-alt"></i> <?php the_field( 'address', 'option' ); ?></li>
                        </ul>
                        <!-- contact social -->
                        <div class="contact-social mt-20">
							<?php if ( get_field( 'facebook', 'option' ) ) { ?>
                                <a href="<?php the_field( 'facebook', 'option' ); ?>"
                                   target="_blank" aria-label="facebook" class="me-2 mt-2">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
							<?php } ?>

							<?php if ( get_field( 'instagram', 'option' ) ) { ?>
                                <a href="<?php the_field( 'instagram', 'option' ); ?>"
                                   target="_blank" aria-label="Instagram" class="me-2 mt-2">
                                    <i class="fab fa-instagram"></i>
                                </a>
							<?php } ?>

							<?php if ( get_field( 'twitter', 'option' ) ) { ?>
                                <a href="<?php the_field( 'twitter', 'option' ); ?>"
                                   target="_blank" aria-label="twitter" class="me-2 mt-2">
                                    <i class="fab fa-twitter"></i>
                                </a>
							<?php } ?>

							<?php if ( get_field( 'pinterest', 'option' ) ) { ?>
                                <a href="<?php the_field( 'pinterest', 'option' ); ?>"
                                   target="_blank" aria-label="pinterest" class="me-2 mt-2">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
							<?php } ?>
                        </div>
                        <!-- contact social end -->
                    </div>
                    <!-- contact info end -->
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Contact area end ================ -->


<?php get_footer(); ?>