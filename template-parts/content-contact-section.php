<?php
	if ( ! isset( $args['title'] ) ) {
		$args['title'] = '';
	}
?>

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
                <h3 class="text-white mb-20"><?php echo $args['title']; ?></h3>
                <ul class="contact-info">

					<?php if ( get_field( 'phone', 'option' ) ) : ?>
                        <li><a href="tel:<?php the_field( 'phone', 'option' ); ?>">
                                <i class="fas fa-phone-alt"></i>
								<?php echo ( get_field( 'phone_display', 'option' ) )
									? get_field( 'phone_display', 'option' )
									: ( get_field( 'phone', 'option' ) ); ?>
                            </a>
                        </li>
					<?php endif; ?>
					<?php if ( get_field( 'email', 'option' ) ) : ?>
                        <li><a href="mailto:<?php the_field( 'email', 'option' ); ?>">
                                <i class="far fa-envelope"></i> <?php the_field( 'email', 'option' ); ?></a>
                        </li>
					<?php endif; ?>

					<?php if ( get_field( 'address', 'option' ) ) : ?>
                        <li><i class="fas fa-map-marker-alt"></i> <?php the_field( 'address', 'option' ); ?></li>
					<?php endif; ?>

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

					<?php if ( get_field( 'telegram', 'option' ) ) { ?>
                        <a href="<?php the_field( 'telegram', 'option' ); ?>"
                           target="_blank" aria-label="telegram">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
					<?php } ?>
                </div>
                <!-- contact social end -->
            </div>
            <!-- contact info end -->
        </div>
    </div>
</div>

