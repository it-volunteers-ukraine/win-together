<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>


<header class="header">
    <div class="header-lover">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <nav class="navbar navbar-expand-md">
						<?php
							if ( has_custom_logo() ) {
								echo get_custom_logo();
							}
						?>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbars01" aria-controls="navbars01" aria-expanded="false"
                                aria-label="Перемикач мобільного меню"><span></span> <span></span> <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbars01">
							<?php wp_nav_menu( array(
								'theme_location' => 'header',
								'container'      => false,
								'menu_class'     => false,
								'menu_id'        => false,
								'echo'           => true,
								'fallback_cb'    => '__return_false',
								'items_wrap'     => '<ul id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</ul>',
								'depth'          => 2,
								'walker'         => new bootstrap_5_wp_nav_menu_walker(),
							) );
							?>
                        </div>
                    </nav>
                </div>

                <div class="col-lg-2 text-lg-end">
                    <!-- header social -->
                    <div class="header-social">
						<?php if ( get_field( 'facebook', 'option' ) ) { ?>
                            <a href="<?php the_field( 'facebook', 'option' ); ?>"
                               target="_blank" aria-label="facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
						<?php } ?>

						<?php if ( get_field( 'instagram', 'option' ) ) { ?>
                            <a href="<?php the_field( 'instagram', 'option' ); ?>"
                               target="_blank" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
						<?php } ?>

						<?php if ( get_field( 'twitter', 'option' ) ) { ?>
                            <a href="<?php the_field( 'twitter', 'option' ); ?>"
                               target="_blank" aria-label="twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
						<?php } ?>

						<?php if ( get_field( 'pinterest', 'option' ) ) { ?>
                            <a href="<?php the_field( 'pinterest', 'option' ); ?>"
                               target="_blank" aria-label="pinterest">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
						<?php } ?>
                        <!-- header social end -->
                    </div>
                </div>
            </div>
        </div>
</header>


	