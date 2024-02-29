<?php
	/*
	Template Name: contacts
	*/
	get_header();
?>

    <!-- ================ Banner area ================ -->
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
    <!-- ================ Banner area end ================ -->


    <!-- ================ Contact area ================ -->
    <div class="contact-page contact-area pb-50 pt-60">
        <div class="container">
            <div class="section-title text-center mb-40">
                <h2><?php the_field( 'title' ); ?></h2>
                <span class="border-title"></span>
            </div>

            <p class="description mx-auto text-center mb-40"><?php the_field( 'text' ); ?></p>

            <div class="row">
                <div class="col-lg-7 col-md-5 mb-30">
                    <!-- map box -->
                    <div class="map-box">
                        <iframe src="<?php the_field( 'google_map', 'option' ); ?>"></iframe>
                    </div>
                    <!-- map box end -->
                </div>
                <div class="col-lg-5 col-md-7 mb-30">
                    <!-- contact info -->
                    <div class="contact-info-box h-100">
                        <h3 class="text-white mb-20 "><?php the_field( 'card_title' ); ?></h3>
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