<?php get_header(); ?>

    <!--    Heading   -->
    <div class="inner-page-title-area"
         style='background-image:url("<?php echo get_field( 'fundraising_img', 'option' )['url']; ?>")'>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h1><span><?php the_field( 'fundraising_title', 'option' ); ?></span></h1>
                </div>
            </div>
        </div>
    </div>

    <!--    Card grid   -->
    <div class="services-area pt-80 pb-50">
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-1">
				<?php $args = ( [
					'posts_per_page' => - 1,
					'post_type'      => 'fundraising',
				] );
					$query  = new WP_Query( $args );
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) :
							$query->the_post(); ?>
                            <div class="col mb-30">
                                <div class="service-item">
                                    <div class="ser-img mb-25"><img src="<?php echo get_field( 'img_card' )['url']; ?>"
                                                                    alt="<?php echo get_field( 'img_card' )['alt']; ?>">
                                    </div>
                                    <div class="description">
                                        <h6><?php the_field( 'title' ); ?></h6>
                                        <p><?php the_field( 'description' ); ?></p>
                                        <a href="<?php the_permalink(); ?>"
                                           class="btn-style-3"><?php the_field( 'btn_card' ); ?>
                                            <i class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
						<?php endwhile;
						wp_reset_postdata();
					endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>