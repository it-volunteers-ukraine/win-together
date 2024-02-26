<?php
	/*
	Template Name: home
	*/
	get_header();
?>


    <!-- ================ Slider area ================ -->
    <div class="slider" id="home">
		<?php if ( have_rows( 'slides' ) ):
			$counter = 0; ?>
            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
					<?php while ( have_rows( 'slides' ) ): the_row(); ?>
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

												<?php if ( get_field( 'btn_link_1' ) ) { ?>
                                                    <a class="btn-style-2 mr-6"
                                                       href="<?php the_field( 'btn_link_1' ); ?>"><?php the_field( 'btn_text_1' ); ?></a>
												<?php } ?>
												<?php if ( get_field( 'btn_link_2' ) ) { ?>
                                                    <a class="btn-style-2 mr-6"
                                                       href="<?php the_field( 'btn_link_2' ); ?>"><?php the_field( 'btn_text_2' ); ?></a>
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

<?php get_footer(); ?>