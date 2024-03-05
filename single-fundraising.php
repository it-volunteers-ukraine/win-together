<?php get_header(); ?>

    <!-- ================ Banner area ================ -->
    <div class="inner-page-title-area"
         style='background-image:url("<?php echo esc_url( get_field( 'img_banner' )['sizes']['1920x600'] ); ?>")'>
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                            href="<?php echo get_post_type_archive_link( 'fundraising' ); ?>"><?php the_field( 'fundraising_title', 'option' ); ?></a>
                </li>
                <li class="breadcrumb-item active"
                    aria-current="page"><?php the_field( 'fundraising_breadcrumb', 'option' ); ?></li>
            </ol>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class><?php the_field( 'title_banner' ); ?></h1>
                </div>
            </div>
        </div>
    </div
            <!-- ================ Banner area end ================ -->


    <div class="service-details-page pt-80 pb-50">
        <div class="container">
            <div class="row fundraising-row">

                <!-- ================ Sidebar ================ -->
                <div class="col-lg-3">
                    <aside>
                        <div class="sidebar-item-box mb-30">
                            <ul class="sidebar-list">
								<?php $args = ( [
									'posts_per_page' => 10,
									'post_type'      => 'fundraising',
									'post__not_in'   => array( $post->ID ),
								] );
									$query  = new WP_Query( $args );
									if ( $query->have_posts() ) :
										while ( $query->have_posts() ) :
											$query->the_post(); ?>
                                            <li>
                                                <a href="<?php the_permalink(); ?>"><?php the_field( 'title_banner' ); ?>
                                                    <i class="fas fa-caret-right"></i></a></li>
										<?php endwhile;
										wp_reset_postdata();
									endif; ?>
                            </ul>
                        </div>
                    </aside>
                </div>
                <!-- ================ Sidebar end ================ -->


                <!-- ================ Post content ================ -->
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
                                                            src="<?php echo esc_url( $image['sizes']['450x600'] ); ?>"
                                                            alt="<?php echo esc_attr( $image['alt'] ); ?>">
                                                </div>
                                            </a>
										<?php endforeach; ?>
                                    </div>
                                </div>
							<?php endif; ?>

                        <h3 class="text-white mb-20"><?php the_field( 'title' ); ?></h3>
                        <div class="wysiwyg-text">
							<?php the_field( 'text' ); ?>
                        </div>
                        <!-- ================ Post content end ================ -->

                        <!-- ================ Donate section ================ -->
						<?php if ( get_field( 'donate_show', 'option' ) ) : ?>
                            <div class="sidebar-item-box mb-30">
                                <div class="sidebar-header">
                                    <h5><?php the_field( 'donate_title', 'option' ); ?></h5>
                                </div>

								<?php if ( have_rows( 'donate_req', 'option' ) ): ?>
									<?php while ( have_rows( 'donate_req', 'option' ) ): the_row() ?>
                                        <div class="donate-item">
                                            <h6 class="donate-item-title"><?php the_sub_field( 'title' ); ?></h6>

											<?php if ( have_rows( 'additional' ) ): ?>
												<?php while ( have_rows( 'additional' ) ): the_row() ?>
                                                    <div class="row donate-row">
                                                        <div class="col-md-4 mb-2 mb-md-0 donate-row-title"><?php the_sub_field( 'additional_title' ); ?></div>
                                                        <div class="col-md-8 donate-row-info">
                                                            <span class="info-text"><?php the_sub_field( 'additional_info' ); ?></span>

                                                            <button class="ms-3 copy-to-clipboard"
                                                                  data-clipboard-text='<?php the_sub_field( 'additional_info' ); ?>'>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                                                     height="28" viewBox="0 0 256 256">
                                                                    <g fill="currentColor">
                                                                        <path d="M216 40v128h-48V88H88V40Z"
                                                                              opacity="0.2"/>
                                                                        <path d="M216 32H88a8 8 0 0 0-8 8v40H40a8 8 0 0 0-8 8v128a8 8 0 0 0 8 8h128a8 8 0 0 0 8-8v-40h40a8 8 0 0 0 8-8V40a8 8 0 0 0-8-8m-56 176H48V96h112Zm48-48h-32V88a8 8 0 0 0-8-8H96V48h112Z"/>
                                                                    </g>
                                                                </svg>
                                                            </button>

                                                            <span class="check-icon d-none ms-3">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                                                    height="28" viewBox="0 0 32 32"><path fill="#13e736"
                                                                                                          d="M23.281 7.281L11.5 19.063L8.719 16.28L7.28 17.72l2.782 2.781L8 22.563L1.719 16.28L.28 17.72l7 7l.719.687l.719-.687l2.781-2.782l2.781 2.782l.719.687l.719-.687l15.906-16l-1.438-1.438L15 22.563L12.937 20.5L24.72 8.719z"/></svg>
                                                            </span>

                                                        </div>
                                                    </div>
												<?php endwhile; ?>
											<?php endif; ?>
                                        </div>
									<?php endwhile; ?>
								<?php endif; ?>
                            </div>
						<?php endif; ?>
                        <!-- ================ Donate section end ================ -->

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>