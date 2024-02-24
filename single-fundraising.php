<?php get_header(); ?>

    <!--    Heading   -->
    <div class="inner-page-title-area" style='background-image:url("<?php echo get_field( 'img_banner' )['url']; ?>")'>
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                            href="<?php echo get_post_type_archive_link( 'fundraising' ); ?>"><?php the_field( 'fundraising_title', 'option' ); ?></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?php the_field( 'title_banner' ); ?></li>
            </ol>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h1><span><?php the_field( 'title_banner' ); ?></span></h1>
                </div>
            </div>
        </div>
    </div>


    <div class="service-details-page pt-80 pb-50">
        <div class="container">
            <div class="row">

                <!--   Sidebar   -->
                <div class="col-lg-3">
                    <aside>
                        <div class="sidebar-item-box mb-30">
                            <ul class="sidebar-list">
								<?php $args = ( [
									'posts_per_page' => - 1,
									'post_type'      => 'fundraising',
								] );
									$query  = new WP_Query( $args );
									if ( $query->have_posts() ) :
										while ( $query->have_posts() ) :
											$query->the_post(); ?>
                                            <li><a href="<?php the_permalink(); ?>"><?php the_field( 'title' ); ?>
                                                    <i class="fas fa-caret-right"></i></a></li>
										<?php endwhile;
										wp_reset_postdata();
									endif; ?>
                            </ul>
                        </div>
                    </aside>
                </div>

                <!--  Post content  -->
                <div class="col-lg-9">
                    <div class="service-content">
						<?php
							$images = get_field( 'gallery' );
							if ( $images ): ?>
                                <div class="fundraising-carousel-wrapper">
                                    <div class="fundraising-carousel owl-carousel owl-theme">
										<?php foreach ( $images as $image ): ?>
                                            <a class="item" href="<?php echo esc_url( $image['url'] ); ?>"
                                               data-lightbox="fundraisingCarousel">
                                                <div class="fundraising-carousel-img"><img
                                                            src="<?php echo esc_url( $image['url'] ); ?>"
                                                            alt="<?php echo esc_attr( $image['alt'] ); ?>">
                                                </div>
                                            </a>
										<?php endforeach; ?>
                                    </div>
                                    <div class="owl-theme">
                                        <div class="owl-controls">
                                            <div class="custom-nav owl-nav"></div>
                                        </div>
                                    </div>
                                </div>
							<?php endif; ?>

                        <h3 class="text-white mb-20"><?php the_field( 'title' ); ?></h3>
                        <div class="fundraising-text">
							<?php the_field( 'text' ); ?>
                        </div>
                        <div class="sidebar-item-box mb-30">
                            <div class="sidebar-header">
                                <h5>Contact Us</h5>
                            </div>
                            <ul class="sidebar-contact">
                                <li><a href="tel:+12345678">Phone <span>+12345678</span></a></li>
                                <li><a href="mailto:info@example.com">Email <span>info@example.com</span></a></li>
                                <li><a href="#">Hours <span>09.00AM - 06:00PM</span></a></li>
                                <li><a href="#">Website <span>www.example.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>